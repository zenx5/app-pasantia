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
                    <form method="POST" action="{{ url("admin/user/{$user->id}")}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre</label>
                            <input type="text" name="name" value="{{old('name',$user->name)}}" class="form-control">
                        </div>

                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Apellido</label>
                            <input type="text" name="last_name" value="{{old('last_name',$user->last_name)}}" class="form-control">
                        </div>

                        <div class="form-group" >
                            <label for="" class="font-weight-bold">Nombre de Usuario</label>
                            <input type="text" name="user" value="{{old('user',$user->user)}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Correo</label>
                            <input type="email" name="email" value="{{old('email',$user->email)}}" class="form-control">
                        </div>
                        <h5 class="text-danger">Cambiar Password<hr></h5> 
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Nuevo Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password_confirm" class="font-weight-bold">Confirmar Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        
                        <h5><b>Asignar Roles</b></h5>

                        <div class='form-group'>
                            @foreach ($roles as $role)
                                {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="type" class="font-weight-bold">Tipo</label>
                            
                            {!! Form::radio('type', 'user', true) !!} User
                            {!! Form::radio('type', 'admin') !!} Admin
                        </div>
                        
                        <div class="form-group">
                            <label for="address" class="font-weight-bold">Dirección</label>
                            <textarea name="address" id="" rows="3" class="form-control" value="{{old('address',$user->address)}}"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="active">Active</label>
                            
                            {!! Form::checkbox('active', null, $user->active == 1 ? true : false) !!}
                        </div><hr>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>   
                            <a href="{{url('/admin/user')}}" class="btn btn-warning">Cancelar</a>        
                        </div>                        
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection