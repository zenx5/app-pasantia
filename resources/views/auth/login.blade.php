@extends('layout')

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success d-flex justify-content-center" role="alert">
                {{ session('status') }}
            </div>
        @endif
      <div class="row login" style="">
            <div class="ml-auto mr-auto text-center">
                <div class="icono">
                    <i class="fas fa-user fa-2x"></i>
                </div> 
                <h4>¡Hola! Ingresa tu e-mail</h4>
            </div> 
        <div class="col-md-12">
            <div class="ml-auto mr-auto mt-2 col-lg-5 justify-content-center ">
              <div class="card justify-content-center">        
                  <div class="card-body">
                      <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('email')? 'has-error' : ''}}">
                            <div class="row">
                                <div class="ml-3">
                                  <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div class="col-md-10">
                                <input type="email"
                                        name="email"
                                        value="{{old('email')}}"
                                        placeholder="email..."
                                        class="form-control  mb-2">
                                  {!! $errors->first('email', '<span class="text-danger">:message</span>' ) !!}
                              </div>                           
                          </div>
                        </div>

                       <div class="form-group {{$errors->has('password')? 'has-error' : ''}}">
                            <div class="row">
                                <div class="ml-3">
                                  <i class="fas fa-key fa-2x"></i>
                                </div>
                                <div class="col-md-10">
                                  <input type="password"
                                            name="password"
                                            placeholder="password..."
                                            class="form-control">
                                    {!! $errors->first('password', '<span class="text-danger">:message</span>' ) !!}
                                </div>
                            </div>
                        </div>  

                          <div class="d-flex justify-content-center">
                            <input type="submit" name="" value="LOGIN" class="btn btn-success p-0">
                          </div>
                          <a href="{{url('password/reset')}}" class="d-flex justify-content-center">¿Olvidaste tu contraseña?</a>
                      </form>
                  </div>
              </div>
            </div>
        </div>
      </div>

</div>
@endsection
