@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    @if(Auth::check())

 <div class="card-header  mt-2">
        <h3>Bienvenido <b>{{Auth::user()->user}}</b> al Panel de Administración</h3><hr>
    </div>


<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$x1}}</font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pedidos realizados</font></font></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53 </font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">%</font></font></sup></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ventas fallidas</font></font></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$us}}</font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuarios registrados</font></font></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60</font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitantes</font></font></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></a>
          </div>
        </div>
        <!-- ./col -->
      </div>



   
    

<div class="row text-center">
    <div class="container-fluid spark-screen" >
        <div class="row">
            <div class="col-md-6 "  >

                <!-- Default box -->
                <div class="box" style="background-image: url(/img/mdn.png); ">
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
                                <i class="fas fa-shopping-basket icons-panel fa-10x"></i>
                                <a href="{{route('servicio.index')}}" class="btn btn-warning btn-block btn-panel-admin">Productos</a>
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
                <div class="box" style="background-image: url(/img/nubes.png); background-size: 100%;">
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
                            <i class="fas fa-users icons-panel fa-10x"></i>
                            <a href="{{route('user.index')}}" class="btn btn-warning btn-block btn-panel-admin">Usuarios</a>
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
            <div class="col-md-6  ">

                <!-- Default box -->
                <div class="box" style="background-image: url(/img/nubes.png); background-size: 100%;">
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
                            <i class="fab fa-cc-paypal icons-panel fa-10x"></i>
                            <a href="{{route('pedido.index')}}" class="btn btn-warning btn-block btn-panel-admin">Pedidos</a>
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
                <div class="box" style="background-image: url(/img/mdn.png); ">
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
                            <i class="fas fa-bar-chart icons-panel fa-10x"></i>
                            <a href="{{route('indicadores.index')}}" class="btn btn-warning btn-block btn-panel-admin">Indicadores</a>
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