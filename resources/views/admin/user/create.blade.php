@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="my-5">
        <div class="card-header bg-warning text-white ml-auto mr-auto mt-5 col-lg-5 justify-content-center">
            <h3 class="text-center"> <i class="fas fa-user"></i> Usuario</h3>
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
                    <form action="{{url('admin/user')}}" method="POST">
                    {{csrf_field()}}
                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre</label>
                            {!!
                                Form::text(
                                    'name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Nombre',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Apellido</label>
                            {!!
                                Form::text(
                                    'last_name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Apellido',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre de Usuario</label>
                            {!!
                                Form::text(
                                   'user',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Usuario',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password', 
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                        'placeholder' => 'Password'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password" class="font-weight-bold">Confirmar Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                        'placeholder' => 'Confirmar Password'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <label for=""  class="font-weight-bold">Correo</label>
                            {!!
                                Form::email(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Correo',
                                        'autofocus'=>'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        
                        <div class="form-group">
                            <label for="type" class="font-weight-bold">Tipo:</label>
                            
                            {!! Form::radio('type', 'user', true) !!} User
                            {!! Form::radio('type', 'admin') !!} Admin
                        </div>
                        
                        <div class="form-group">
                            <label for="address" class="font-weight-bold">Dirección:</label>
                            
                            {!! 
                                Form::textarea(
                                    'address', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'rows' => '3',
                                        'style' => 'resize:none'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="active" class="font-weight-bold">Active:</label>                          
                            {!! Form::checkbox('active', null, true) !!}
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