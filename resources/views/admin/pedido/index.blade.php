@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container text-center my-5">

        <div class="card informacion-ordenes">
            
        <div class="card-header">
            <h3>
                <i class="fa fa-shopping-cart"></i> INFORMACIÓN DE ORDENES
            </h3>
        </div>

        <div class="card-body">

        
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ver Detalle</th>
                            <th>Eliminar</th>
                            <th>Fecha de Compra</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                            <tr>
                                <td>
                                    <a 
                                        href="#" 
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $pedido->idpedido }}"
                                        data-path="{{ route('pedido.getItems') }}"
                                        data-toggle="modal" 
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                    <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['pedido.delete', $pedido->idpedido]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="far fa-trash-alt icon-index"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td>{{ $pedido->created_at }}</td>
                                <td>{{ $pedido->name}}</td>
                                <td>{{ $pedido->status}}</td>
                                <td>${{ number_format($pedido->total_pedido,2) }}</td>                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>  
            <hr>
            
            <?php echo $pedidos->render(); ?>
            <p>
            <a href="{{route('welcome')}}">Regresar al panel de administración </a>
        </p>
        </div>
       
    </div>
    @include('admin.partials.modal-detalle-pedido')
@endsection   