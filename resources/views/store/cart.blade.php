@if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
@extends('layout')
@section('content')

<div class="container my-5">

    <div class="card text-center carrito">
        <div class="card-header">
            <h4 class="green-text"><i class="fas fa-shopping-cart"></i> Comprar Producto</h4>
        </div>
        <div class="table-cart">
            @if(count($cart))
            <p>
                <a href="{{route('cart-trash')}}" class="btn btn-danger">
                    Vaciar Carrito <i class="fas fa-trash-alt"></i>
                </a>
            </p>
            <div class="table-responsive carrito-detalle">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr style="background:#1a95b5;">
                            <th class="font-weight-bold" >Aplicación</th>
                            <th class="font-weight-bold" >Precio</th>
                            <th class="font-weight-bold" >Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td><strong>{{number_format($item->precio,2)}} $</strong></td>
                            <td>
                                <a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                    <h3><span class="badge success-color">
                            Total: {{number_format($total,2)}} $
                        </span>
                    </h3>
            </div>
            @else
                <h3 class="my-5"><span class="label label-warning">No hay servicios en el carrito</span></h3>
            @endif
            <hr>
            <p class="botones">
                <a href="{{route('servicios')}}" class="btn btn-primary ">
                    <i class="fas fa-chevron-circle-left mr-2"></i>Seguir Comprando
                </a>
                <a href="{{route('detalle-pedido')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-right mr-2"></i>Continuar</a>
            </p>
        </div>
    </div>
</div>    
@endsection