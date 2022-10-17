@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="text-center my-5">
        <div class="card informacion-servicio">

            <div class="card-header">
            <h3 class="green-text">
                <i class="fas fa-shopping-basket "></i>
                    PRODUCTOS
                    <a href="{{route('servicio.create')}}" class="btn btn-success font-weight-bold text-white"><i class="far fa-circle"></i> Nuevo</a>
                </h3>
            </div>
            <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-white">Editar</th>
                            <th class="font-weight-bold text-white">Eliminar</th>
                            <th class="font-weight-bold text-white">Nombre</th>
                            <th class="font-weight-bold text-white">Extracto</th>
                            <th class="font-weight-bold text-white">Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicio as $ser)
                        <tr>
                            <td>
                            <a href="{{ route('servicio.edit', $ser->slug) }}" class="btn btn-warning"><i class="fas fa-pencil-alt icon-index"></i></a></td>
                            <td>
                                {!! Form::open(['route' => ['servicio.delete', $ser->slug]]) !!}  
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                        <i class="far fa-trash-alt icon-index"></i>
        								</button>
                                {{Form::Close()}} 
                            </td>    
                            <td>{{$ser->nombre}}</td>
                            <td>{{$ser->slug}}</td>
                            <td>{{$ser->precio}} $</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$servicio->render()}}
            </div>
            </div>
            <p>
                <a href="{{route('welcome')}}">Regresar al panel de administración </a>
            </p>
        </div>
    </div>

@endsection