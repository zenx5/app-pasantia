@extends('layout')
@if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
@section('content')

<div class="info-precio">

<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center animated zoomIn">
      <h1 class="display-4 font-weight-bold">Métodos y herramientas</h1>
      <p class="lead">Si la prospectiva es una indisciplina intelectual, también necesita rigor y método para clarificar la acción de los hombres y orientarla hacia un futuro deseado. Las herramientas 
        de la prospectiva estratégica permiten hacer las preguntas adecuadas y reducir incoherencias de razonamiento</p>
    </div>
</div>
<div class="container my-5 p-5" style="font-family:'Questrial', sans-serif;">
    <h3 class="text-center mb-5" style="">Elija un método de análisis prospectivo adecuado para usted</h3>
    <div class="card-deck mb-3 d-flex justify-content-center text-center">
        <div class="row">
                @foreach($servicios as $item)
                <div class="card card-1 " >
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{$item->nombre}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{$item->precio}} $<small class="text-muted">/ mo</small></h1>
                        <p class="card-text">{{$item->slug}}</p>
                        <a href="{{ route('cart-add', $item->slug) }}"><button type="button" class="btn btn-lg btn-block p-2"><i class="fas fa-shopping-cart"></i> Comprar</button></a>
                    </div>
                </div>
                @endforeach
        </div> 
    </div>    
</div>       

<div class="container my-3">
    <h3 class="text-center font-weight-bold" style="font-size:45px;">La prospectiva como ventaja competitiva sostenible</h3>    
    <div class="row mt-5">
        <div class="col-md-6 mt-2">
           <p class="text-justify" style="font-size:24px;">Las organizaciones no sólo deben convivir y estar suficientemente satisfechos con los éxitos del presente, 
               sino seguir visualizando y planificando su visión hacia un futuro prometedor.</p>
        </div>
        <div class="col-md-6 justify-content-center">
             <img src="img/estadistica.png" alt="" class="ml-3" style="width:80%;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 justify-content-center mt-3">
            <img src="img/vision.png" alt="" class="ml-5" style="width:80%;">
        </div>

        <div class="col-md-6" style="margin-top:60px;">
            <p class="text-justify" style="font-size:24px;">Contar con una filosofía de empresa y una visión orientadora es vital para las organizaciones contemporáneas por los constantes 
            cambios en el entorno altamente cambiante y competitivo.</p>
            <p class="text-justify" style="font-size:24px;">Todo lo que una empresa pueda haber construido hasta hoy será efímero en el futuro, si no está sintonizada con la velocidad del cambio.</p>
        </div>
    </div>
</div>

<div class="container my-5 card-email">

    <div class="card">
        <div class="card-header" style="">
            <div class="d-flex justify-content-center p-2">
                <p class="text-center" style="font-size:25px;">Si necesitas más información por favor escríbenos a: <a href="mailto:unexpo_prop@gmail.com">unexpo_prop@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection