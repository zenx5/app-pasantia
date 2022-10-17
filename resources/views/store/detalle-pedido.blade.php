@if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
@extends('layout')
@section('content')

<div class="container">

    <div class="card detalle-pedido">

        <div class="card-header row">
            <a href="{{route('cart-show')}}" class="btn btn-primary ">
                <i class="fas fa-chevron-circle-left mr-2"></i>Regresar
             </a>
             <h3 class="green-text ml-auto"><i class="fas fa-shopping-cart"></i> Detalle de la compra</h3>
        </div>
        <div class="card-body">

        <div class="table-responsive">
            <h3 class="text-center my-2">Datos del Usuario</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr><td class="font-weight-bold">Usuario </td><td>{{Auth::user()->name}}</td></tr>
                <tr><td class="font-weight-bold">Correo </td><td>{{Auth::user()->email}}</td></tr>
            </table>
        </div>

        <div class="table-responsive">
            <h3 class="text-center">Datos de la Aplicación</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th class="font-weight-bold text-center">Aplicación</th>
                    <th class="font-weight-bold text-center">Precio</th>
                    <th class="font-weight-bold text-center">Subtotal</th>
                </tr>
                @foreach($cart as $item)
                    <tr>
                        <td class="text-center">{{$item->nombre}}</td>
                        <td class="text-center">{{$item->precio}} $</td>
                        <td class="text-center">{{number_format($item->precio * $item->cantidad)}} $</td>
                    </tr>
                @endforeach
            </table>
            <hr>
                <h3 class="text-center">
                    <span class="badge success-color">
                        Total: $ {{number_format($total,2)}} USD 
                    </span>
                </h3>
            <hr>
            <p class="font-weight-bold text-center">Elija una forma de pago</p>
                <div class="d-flex justify-content-center">
                    
                    <div class="row">
                        <a href="{{route('payment')}}" class="">
                            <i class="fab fa-cc-paypal fa-3x"></i>
                        </a>
                        <form action="{{route('addmoney.stripe')}}" method="POST" class="ml-2">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_24Brkd8NOycuNT3WwkYXc8HE"
                                data-amount="{{number_format($total)*100}}"
                                data-name="{{Auth::user()->name}}"
                                data-description="Item"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                            </script>
                        </form>
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>
@endsection