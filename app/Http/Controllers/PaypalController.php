<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input; 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
 
use App\Pedido;
use App\PedidoItem;


class PaypalController extends BaseController
{
    private $_api_context;
 //'mode' => 'sandbox', 'http.ConnectionTimeOut' => 30, 'log.LogEnabled' => true, 'log.FileName' => storage_path() . '/logs/paypal.log','log.LogLevel' => 'FINE')
	public function __construct()
	{
		// setup PayPal api context
		//$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential('ARjr7RrDMHfsobnilc7QmnLezaC38P2ijgrkapd7P_cr0Vnt97hY_17zEC95nq137AnEodmvq4i8ETQb','EAM7wSALZbtuOS6tIiVAcIomG_58yMeiGDsUhv6gm7wCISjMtvOculd2pi5MWfKSoHmmC68Pfmv8R9Lm'
        ));
		$this->_api_context->setConfig(array('mode' => 'sandbox', 'http.ConnectionTimeOut' => 30,'log.LogEnabled' => true,'log.FileName' => storage_path() . '/logs/paypal.log','log.LogLevel' => 'FINE'));
	}

    public function postPayment(){
        $payer = new Payer();
		$payer->setPaymentMethod('paypal');
 
		$items = array();
		$subtotal = 0;
		$cart = \Session::get('cart');
        $currency = 'USD';

        foreach($cart as $servicio){
            $item = new Item();
            $item->setName($servicio->nombre)
                 ->setCurrency($currency)
                 ->setDescription($servicio->descripcion)
                 ->setQuantity($servicio->cantidad)
                 ->setPrice($servicio->precio);

                 $items[] = $item;
                 $subtotal+=$servicio->precio * $servicio->cantidad;
        }

        $item_list = new ItemList();
		$item_list->setItems($items);

        $detalle = new Details();
        $detalle->setSubtotal($subtotal)
                ->setShipping(0);

        $total = $subtotal + 0;
        $amount = new Amount();
        $amount->setCurrency($currency)
               ->setTotal($total)
               ->setDetails($detalle);

       	$transaction = new Transaction();
		$transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Pedido de prueba en mi App Store');
                    
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
                      ->setCancelUrl(\URL::route('payment.status')); 
                      
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }
        
        foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

        \Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
			// redirect to paypal
			return \Redirect::away($redirect_url);
		}
 
		return \Redirect::route('cart-show')->with('message', 'Ups! Error desconocido.');
    }
    
    public function getPaymentStatus(){
        
        // Get the payment ID before session clear
		$payment_id = \Session::get('paypal_payment_id');
		// clear the session payment ID
		\Session::forget('paypal_payment_id');
		$payerId = \Request::get('PayerID');
		$token = \Request::get('token');

        if(empty($payerId) || empty($token)){

            return \Redirect::route('inicio')->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(\Request::get('PayerID'));

        $result = $payment->execute($execution, $this->_api_context);

        if($result->getState() == 'approved'){
            
            $this->saveOrder();

            \Session::forget('cart');

            return \Redirect::route('inicio')->with('message','Compra realizada con exito');
        }

        return \Redirect::route('inicio')->with('message', 'La compra fue cancelada');

    }

    private function saveOrder()
	{
        $subtotal = 0;
        $cart = \Session::get('cart');
	    foreach($cart as $item){
	        $subtotal += $item->precio * $item->cantidad;
	    }
	    
	    $pedido = Pedido::create([
            'total_pedido' => $subtotal,
            'status' => 'Pago',
	        'idusers' => \Auth::user()->id
	    ]);
	    
	    foreach($cart as $item){
	        $this->saveOrderItem($item, $pedido->idpedido);
	    }
    }
    
    private function saveOrderItem($item, $pedido_id)
	{
		PedidoItem::create([
			'cantidad' => $item->cantidad,
			'precio' => $item->precio,
			'id_servicio' => $item->idservicio,
			'id_pedido' => $pedido_id
		]);
	}
	

}
