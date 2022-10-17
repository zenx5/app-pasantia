<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class UserController extends Controller
{
    public function index(){

      $usuarios = User::all();//usando Eloquent
      $titulo = 'Listado de usuarios';

      return view('usuario.index',compact('titulo','usuarios'));
    }

    public function show($id){
      $usuarios = User::find($id);

        if($usuarios==null){
            return response()->view('error.404',[],404);
        }

        return view('usuario.show', compact('usuarios'));
    }

    public function create(){
         return view('usuario.create');
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'email'=> ['required','email','unique:users,email'],
            'password' => 'required|min:6',
            'password2' => 'required|min:6|same:password',]
            ,
            [
              'name.required' => 'El campo nombre es obligatorio',
              'email' => 'Porfavor ingresa una direccion de email válida',
              'email.unique' => 'Ya existe un usuario con este correo',
              'password.required' => 'la contraseña es muy corta o es incorrecta',
              'password2' => 'las contraseña no coinciden'
            ]);

            $usuario= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        

                return view('usuario.success');

          //  return view('auth.login');// Redirigimos a la ruta con el nombre "login"

     }
 
     public function edit(User $user){
        $roles = Role::get();
        return view('usuario.edit',['user'=> $user]);

     }

    public function update(User $user){

        $data = request()->validate([
            'name' => 'required',
            'email'=> ['required','email','unique:users,email'],
            'password' => ''
        ],[
          'name.required' => 'El campo nombre es obligatorio',
          'email' => 'Porfavor ingresa una direccion de email válida',
          'email.unique' => 'Ya existe un usuario con este correo',
        ]);

        if($data['password']!=null){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('usuario.show',['user'=>$user]);

    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('usuario.index');
    }

}
