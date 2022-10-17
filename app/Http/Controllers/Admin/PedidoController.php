<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\PedidoItem;

class PedidoController extends Controller
{
    public function index()
    {
        if(\Auth::user()->type!='admin'){
            $message = 'Permiso denegado: Solo los administradores pueden entrar a esta sección';
            return redirect()->route('inicio')->with('message', $message);
        }else{
            $pedidos = DB::table('pedidos as p')
                            ->join('users as u','p.idusers','=','u.id')
                            ->select('p.idpedido','p.status','p.total_pedido','p.created_at','u.name','u.last_name')
                            ->orderBy('idpedido', 'desc')->paginate(5);
    	
            return view('admin/pedido/index', compact('pedidos'));
        }
        
    }

    public function getItems(Request $request)
    {
    	$items = PedidoItem::with('servicio')->where('id_pedido', $request->get('id_pedido'))->get();
        /*$items = DB::table('pedido_items as pi')
                    ->join('servicios as se','pi.id_servicio','=','se.idservicio')
                    ->select('pi.idpedido_item','pi.cantidad','se.nombre','pi.precio','pi.id_servicio')
                    ->where('pi.id_pedido','=',$request-get('id_pedido'))
                    ->get();*/
        return json_encode($items);
    }

    public function destroy($id)
    {

        $pedido = Pedido::findOrFail($id);
        
        $deleted = $pedido->delete();
        
        $message = $deleted ? 'Pedido eliminado correctamente!' : 'El Pedido NO pudo eliminarse!';
        
        return redirect()->route('pedido.index')->with('message', $message);
    }
}
