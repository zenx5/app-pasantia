@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')


    <div class="text-center my-5">
 
        <div class="card informacion-usuarios">
            <div class="card-header">
                <h3>
                
                    
                    <h1><i class="fa fa-users"></i> Administracion de usuarios 
                        <a href="{{route('user.create')}}" class="btn btn-default pull-right"> NUEVO</a>
                     <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permisos</a></h1>
                </h3>
            </div>

            <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead >
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                            <a href="{{ route('user.edit', $user) }}" class="btn btn-warning"><i class="fas fa-pencil-alt icon-index"></i></a></td>
                            <td>
                                {!! Form::open(['route' => ['user.delete', $user]]) !!}  
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                        <i class="far fa-trash-alt icon-index"></i>
        								</button>
                                {{Form::Close()}} 
                            </td>    
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->user }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$users->render()}}
            </div>
            </div>
            <p>
            <a href="{{route('admin-home')}}">Regresar al panel de administración </a>
        </p>
        </div>
    </div>

@endsection