@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="text-center my-5">
        <div class="card-header bg-warning text-white ml-auto mr-auto mt-5 col-lg-5 justify-content-center">
            <h3><i class="fas fa-shopping-basket"></i> Editar Servicio</h3>
        </div>
        <div class="row">

            <div class="ml-auto mr-auto col-lg-5 justify-content-center ">
                <div class="card p-3">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ url("admin/servicio/{$servicio->slug }")}}" >
                    {{method_field('PUT')}}
                    {{csrf_field()}}

                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre</label>
                            <input type="text" name="nombre" value="{{old('nombre',$servicio->nombre)}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""  class="font-weight-bold">Extracto</label>
                            <input type="text" name="slug" value="{{old('slug',$servicio->slug)}}" class="form-control">
                        </div>

                         <div class="form-group" >
                            <label for="" class="font-weight-bold">Descripcion</label>
                            <textarea name="descripcion" rows="3" value="{{old('descripcion',$servicio->descripcion)}}" id="" class="form-control" style="resize:none;"></textarea>
                        </div> 

                        <div class="form-group">
                            <label for=""class="font-weight-bold">Precio </label>
                            <input type="number" name="precio" class="form-control" value="{{old('precio',$servicio->precio)}}">   
                        </div>  

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Guardar</button>   
                            <a href="{{url('/admin/servicio')}}" class="btn btn-warning">Cancelar</a>        
                        </div>                        
                        </form>
                </div>
            </div>

        </div>
    </div>

@endsection