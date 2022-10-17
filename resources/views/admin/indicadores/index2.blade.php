@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container text-center my-5">

        <div class="card informacion-ordenes ">
            
        <div class="card-header">
            <h3>
                <i class="fa fa-eye"></i> INFORMACIÓN DE VISITAS
            </h3>
        </div>

        <div class="card-body col-md-10 ">

        
            <div class="table-responsive">
               
            </div>
            </div>  
            <hr>
          
    </div>

    <div class="card-body col-md-10 ">

        
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Usuario</th>
                            <th>Pais</th>
                            <th>Fecha</th>
                            <th>Tiempo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                                         
                            </tr>
                        
                    </tbody>
                </table>
            </div>
            </div>  
            <hr>
    </div>

    <div class=" col-md-10 ">
    <div id="canvas-holder">
            <canvas id="chart-area" width="500" height="500"/>
        </div>

    </div>
    @include('admin.partials.modal-detalle-pedido')
@endsection 

<script>

        var doughnutData = [
                {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                },
                {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                },
                {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                },
                {
                    value: 120,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Dark Grey"
                }

            ];

            window.onload = function(){
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
            };



    </script>  