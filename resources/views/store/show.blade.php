@if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
@extends('layout')
@section('content')

    <div class="card-body bg-light">
        <h3>Detalle del Servicio</h3>
        <div class="card-title"> <strong>{{$servicio->nombre}}</strong></div>

        <div class="text-justify font-weight-bold">
            
            <p>{{$servicio->descripcion}}</p>
            <p class="pricing-card-title">{{$servicio->precio}}$</p>
        </div>
        <a href="{{route('cart-add',$servicio->slug)}}"><button class="btn btn-primary">Contratar Servicio</button></a>
        <a href="{{route('servicios')}}">Regresar</a>
    </div>
@endsection