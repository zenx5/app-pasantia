@extends('layout')
@section('content')

<div class="slider-register d-flex align-items-center container-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="display-4 animated zoomIn">Regístrate</h3>
            <h4>Obtén nuetros productos de análisis prospectivo</h4>
            <a href="home"><button class="btn btn-success">Ver productos</button></a>     
        </div>
    </div>
  </div>
</div>

<div class="container">

<div class="row registro" style="margin-bottom:170px; margin-top:50px;">
    <div class="col-md-12">
        <div class="ml-auto mr-auto mt-5 col-lg-5 justify-content-center ">
          <div class="card">
              <div class="card-header" style="background:#ffa726;">
                  <h3 class="text-center text-white">Registrate gratis</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="{{route('register')}}">
                {!! csrf_field() !!}

                    <div class="form-group row">
                      <div class="ml-3">
                        <i class="fas fa-user fa-2x"></i>
                      </div>
                      <div class="col-md-10 mr-auto">
                        <input type="text"
                               name="name"
                               value="{{old('name')}}"
                               placeholder="Nombre..."
                               class="form-control">
                         {!! $errors->first('name', '<span class="text-danger">:message</span>' ) !!}
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="ml-3">
                        <i class="fas fa-user fa-2x"></i>
                      </div>
                      <div class="col-md-10 mr-auto">
                        <input type="text"
                               name="last_name"
                               value="{{old('last_name')}}"
                               placeholder="Apellido..."
                               class="form-control">
                         {!! $errors->first('last_name', '<span class="text-danger">:message</span>' ) !!}
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="ml-3">
                        <i class="fas fa-user fa-2x"></i>
                      </div>
                      <div class="col-md-10 mr-auto">
                        <input type="text"
                               name="user"
                               value="{{old('user')}}"
                               placeholder="Nombre de usuario..."
                               class="form-control">
                         {!! $errors->first('user', '<span class="text-danger">:message</span>' ) !!}
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="ml-3">
                        <i class="fas fa-envelope fa-2x"></i>
                      </div>
                      <div class="col-md-10 mr-auto">
                        <input type="email"
                               name="email"
                               value="{{old('email')}}"
                               placeholder="email..."
                               class="form-control  mb-2">
                         {!! $errors->first('email', '<span class="text-danger">:message</span>' ) !!}
                      </div>

                    </div>

                   <div class="form-group row">
                     <div class="ml-3">
                       <i class="fas fa-key fa-2x"></i>
                     </div>
                     <div class="col-md-10 mr-auto">                  
                         <input type="password"
                                name="password"
                                placeholder="password..."
                                class="form-control">
                         {!! $errors->first('password', '<span class="text-danger">:message</span>' ) !!}
                     </div>

                   </div>
                   <div class="form-group row">
                     <div class="ml-3">
                       <i class="fas fa-key fa-2x"></i>
                     </div>
                     <div class="col-md-10 mr-auto">
                         <input type="password"
                                name="password_confirmation"
                                placeholder="repeat password..."
                                class="form-control">
                         {!! $errors->first('password_confirmation', '<span class="text-danger">:message</span>' ) !!}
                     </div>
                   </div>

                   <div class="form-group row">
                      <div class="ml-3">
                        <i class="fas fa-globe fa-2x"></i>
                      </div>
                    <div class="col-md-10 ml-2">
                     <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                                        
                             <div class="form-group row">
                      <div class="ml-3">
                        
                      </div>
                      <div class="col-md-10 mr-auto">
                        <input type="text"
                               name="pais"
                               value="{{old('pais')}}"
                               placeholder="Pais..."
                               class="form-control">
                         {!! $errors->first('name', '<span class="text-danger">:message</span>' ) !!}
                      </div>   
                          

                           
                           </div> </div>

                   <div class="form-group row">
                     <div class="ml-3">
                       <i class="fas fa-map-marker fa-2x"></i>
                     </div>
                     <div class="col-md-10 ml-2">
                        <textarea name="address" class="form-control" id="" cols="3" style="resize:none" placeholder="direccion..."></textarea>
                     </div>
                   </div>
              

                      <div class="d-flex justify-content-center">
                        <input type="submit" name="" value="REGISTRARSE" class="btn btn-success p-0">
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>  </form></div></div></div></div></div></div>
@endsection