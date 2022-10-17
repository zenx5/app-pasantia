@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    @if(Auth::check())
    <div class="card-header text-center mt-2">
        <i class="fas fa-bar-chart  icons-panel fa-2x"></i>
        <h3>Indicadores</h3><br>
    </div>
    

<div class="row text-center">
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-6 " >

                <!-- Default box -->
                <div class="box" >
                    <div class="box-header with-border"  >
                     <h2 class="box-title" >  </h2>  
                        <div class="box-tools pull-right" >
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse" >
                                <i class="fa fa-minus"></i></button>
                            
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12 my-2">
                            <div class="card">
                                <i class="fas fa-credit-card icons-panel fa-10x"></i>
                                <a href="{{route('compras.index')}}" class="btn btn-warning btn-block btn-panel-admin">Compras</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
       



    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-6 ">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                       <h2 class="box-title" >  </h2> 
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            
                        </div>
                    </div>
                    <div class="box-body">
                      <div class="col-md-12  my-2">
                        <div class="card">
                            <i class="fas fa-globe icons-panel fa-10x"></i>
                            <a href="{{route('user.index')}}" class="btn btn-warning btn-block btn-panel-admin">Visitas</a>
                        </div>
                    </div>   
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div> 

 </div>
    </div> 


    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-6 ">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border ">
                     <h2 class="box-title" >  </h2>   
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            
                        </div>
                    </div>
                    <div class="box-body">
                     <div class="col-md-12  my-2">
                        <div class="card">
                            <i class="far fa-thumbs-up icons-panel fa-10x"></i>
                            <a href="{{route('pedido.index')}}" class="btn btn-warning btn-block btn-panel-admin">Usabilidad</a>
                        </div>
                    </div>   
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div> 
</div>
       
    @endif 
@endsection