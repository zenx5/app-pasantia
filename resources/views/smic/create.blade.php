@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
 
<div class="container">
    <div class="row">

        <div class="col-md-10  " >
            <h4 style= "text-align:center;">proyecto 1</h4>
                <div class="col-md-6" >
                    
                </div> 

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">HIPOTESIS</div>

                


<div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>N°</th>
                <th>HIPÓTESIS nombre corto</th>
                <th>DESCRIPCIÓN</th>
                <th>PROBABILIDAD S</th>
                <th>P/EXPERTOS</th>
                <th>TENDENCIA</th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          
            <tr>
                <td > 1</td>
                <td >  nombre</td>
                <td>  <button class="btn btn-default" data-toggle="modal" data-target="#n">VER</button></td>
                <td > 80% </td>
                <td>  <button class="btn btn-default" data-toggle="modal" data-target="#d">Detalles</button></td>
                <td> MODERADA </td>

                
            </tr>

                
            
            </tbody>
        </table>
    </div>
    

            

            <div id="oculto1"  style="display:none;">
                            <div class="panel panel-default" style="margin-top:60px">
                               

                                    <div class="center">
                                        <h4 style= "text-align:center;">HIPÓTESIS</h4> 
                                        <div style="overflow-x:auto;">
                                            <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barra.png')}}" width="300"></th>
                                            <th width="500">TENDECIAS
                                                <p>MUY FUERTE:</p>
                                                <p>FUERTE:</p>
                                                <p>MODERADA</p>
                                                <p>DEBIL</p>
                                                <p>DUDA</p>
                                                <p>IMPROBABLE</p>
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                </table>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>



    </div>
</div>


<div class="modal fade" id="d" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">HIPÓTESIS VARIABLE</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>EXPERTO</th>
                                            <th>PROBABILIDAD</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS de PROBABILIDADES</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barras.jpg')}}" width="300"></th>
                                            <th width="400">Expertos
                                                <p>1 Experto 1:</p>
                                                <p>2 Experto 2:</p>
                                                <p>3 Experto 3:</p>
                                                <p>4 Experto 4:</p>
                                                <p>5 Experto 5:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>

<div class="modal fade" id="n" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">HIPÓTESIS DETALLES</div>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti maxime, est sed deserunt incidunt
                 ratione deleniti omnis rem in, dolorum nostrum. Ea dolorem explicabo atque, nobis hic quod laudantium doloribus</p>
                
            </div>        
                   

        </div>
    </div>



    <div class="container">
    <div class="row">
    <div class="col-md-10  " >

        <div class="panel panel-default" style="margin-top:60px">
            <div class="panel-heading" style= "background-color:SkyBlue;">ESCENARIOS</div>

            <div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>N°</th>
                <th>ESCENARIO</th>
                <th>P/EXPERTOS</th>
                <th>P/GRUPO</th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          
            <tr>
                <td > 1</td>
                <td >  111 </td>
                <td>  <button class="btn btn-default" data-toggle="modal" data-target="#e">Detalles</button></td>
                <td>  <button class="btn btn-default" data-toggle="modal" data-target="#g">Detalles</button></td>

                
            </tr>

                
            
            </tbody>
        </table>
    </div>
    

            </div>
        </div>

         <a  class="btn btn-danger" onclick="mostrar3()">ESCENARIOS</a>
        <a  class="btn btn-warning" onclick="mostrar1()">HIPOTESIS</a>

        <div id="oculto3"  style="display:none;">
                <div class="panel panel-default" style="margin-top:60px">
                   

                        <div class="center">
                            <h4 style= "text-align:center;">ESCENARIOS PROBABILIDAD ACUMULADA POR GRUPO</h4> 
                            <div style="overflow-x:auto;">
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    
                                        <tr>
                                            <th>ESCENARIO</th>
                                            <th>PROBABILIDAD DE OCURRENCIA</th>
                                           
                                        </tr>

                                         <tr>
                                            <th> 111 </th>
                                            <th> 90% </th>
                                           
                                        </tr>
                                       
                                    

                                    
                                </table>
                                
                            </div>
                        </div>
                </div>
            </div>

            <div id="oculto1"  style="display:none;">
                            <div class="panel panel-default" style="margin-top:60px">
                               

                                    <div class="center">
                                        <h4 style= "text-align:center;">TIPO DE ACTORES</h4> 
                                        <div style="overflow-x:auto;">
                                            <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barra.png')}}" width="300"></th>
                                            <th width="500">LEYENDA
                                                <p>Actores dominantes:</p>
                                                <p>Actores de enlace:</p>
                                                <p>Actores autonomos:</p>
                                                <p>Actores dominados</p>
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                </table>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>



    </div>
</div>


<div class="modal fade" id="e" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">ESCENARIO VARIABLE</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>EXPERTO</th>
                                            <th>PROBABILIDAD</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS de PROBABILIDADES</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barras.jpg')}}" width="300"></th>
                                            <th width="400">Expertos
                                                <p>1 Experto 1:</p>
                                                <p>2 Experto 2:</p>
                                                <p>3 Experto 3:</p>
                                                <p>4 Experto 4:</p>
                                                <p>5 Experto 5:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>

<div class="modal fade" id="g" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRUPO VARIABLE</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>GRUPO</th>
                                            <th>PROBABILIDAD</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS de PROBABILIDADES</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barras.jpg')}}" width="300"></th>
                                            <th width="400">Expertos
                                                <p>1 GRUPO 1:</p>
                                                <p>2 GRUPO 2:</p>
                                                <p>3 GRUPO 3:</p>
                                                <p>4 GRUPO 4:</p>
                                                <p>5 GRUPO 5:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>



            </div>
            </div>

 </div>
 </div>



</div>




@endsection