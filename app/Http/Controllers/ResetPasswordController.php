<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Notificacion;
use App\User;

class ResetPasswordController extends Controller
{
    public function resetPass(Request $request){
        Mail::to($request->get('email'),'Unexpo Prospectiva')->send(new Notificacion);
            $status = !Mail::failures()? 'Se a enviado un enlace a tu correo electronico' : 'No se pudo enviar el enlace';
            return redirect('password/reset')->with('status',$status);      
    }

    public function update(Request $request){

        $user = User::where('email',$request->get('email'))->first();
        $dato['user'] = $user;
        $data = request()->validate([
            'email' => 'required',
            'password' => ''
        ]);

        if($dato['user']->email == $request->get('email')){
            if($data['password']!=null){
                $data['password'] = bcrypt($data['password']);
            }else{
                unset($data['password']);
            }    
            $user->update($data);  
            $status = $user ? 'La contraseña fue cambiada exitosamente':'La constraseña no pudo ser cambiada';
            return redirect()->route('login')->with('status',$status);
        }
        else{
            return redirect()->route('inicio');
        }
        
    }
}
