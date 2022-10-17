@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="text-center my-5">
        <div class="card-header bg-warning text-white ml-auto mr-auto mt-5 col-lg-5 justify-content-center">
            <h3><i class="fas fa-shopping-basket"></i> Servicio</h3>
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
                    <form action="{{url('admin/servicio')}}" method="POST">
                    {{csrf_field()}}
                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre</label>
                            {!!
                                Form::text(
                                    'nombre',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Ingrese el nombre del Servicio',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for=""  class="font-weight-bold">Extracto</label>
                            {!!
                                Form::text(
                                    'slug',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Extracto',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                         <div class="form-group" >
                            <label for="" class="font-weight-bold">Descripcion</label>
                            {!!
                                Form::textarea(
                                    'descripcion',
                                    null,
                                    array(
                                        'class'=>'form-control ',
                                        'placeholder'=>'Descripcion',
                                        'autofocus'=>'autofocus',
                                        'style'=>'resize:none'
                                    )
                                )
                            !!}
                        </div> 

                        <div class="form-group">
                            <label for=""class="font-weight-bold">Precio </label>
                            {!!
                                Form::number(
                                    'precio',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Precio $',
                                        'autofocus'=>'autofocus',
                                        'style'=>'resize:none'
                                    )
                                )
                            !!}
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