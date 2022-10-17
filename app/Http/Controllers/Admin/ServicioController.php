<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Requests\ServicioRequest;

use App\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->type!='admin'){
            $message = 'Permiso denegado: Solo los administradores pueden entrar a esta sección';
            return redirect()->route('inicio')->with('message', $message);
        }else{
            $servicio = Servicio::orderBy('idservicio', 'desc')->paginate(5);;
            return view('admin/servicio/index',compact('servicio'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //return $request->all();
        $data = request()->validate([
            'nombre' => 'required|max:20|unique:servicios',
            'cantidad' => '',
            'slug' => 'required|max:100',
            'descripcion' => 'required|max:255',
            'precio' => 'required',
        ]);

        $servicio = Servicio::create([
            'nombre' => $data['nombre'],
            'cantidad' => 1,
            'slug' => $data['slug'],
            'descripcion' => $data['descripcion'],
            'precio' => $data['precio'],
    
        ]);

        $message = $servicio ? 'Servicio agregado correctamente !' : 'El servicio no pudo agregarse';
        return redirect()->route('servicio.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        return view('admin.servicio.edit',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioRequest $request,Servicio $servicio)
    {
        
        $servicio->fill($request->all());
        $servicio->slug = $request->get('slug');
        
        $updated = $servicio->save();

        $message = $servicio ? 'Servicio actualizado correctamente !' : 'El servicio no pudo actualizarse';
        return redirect()->route('servicio.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {   
        $deleted = $servicio->delete();
        
        $message = $deleted ? 'Servicio eliminado correctamente!' : 'El servicio NO pudo eliminarse!';
        
        return redirect()->route('servicio.index')->with('message', $message);

    }
}
