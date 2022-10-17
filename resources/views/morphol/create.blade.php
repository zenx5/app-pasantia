@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<div class="container">
    <div class="row">

        <div class="col-md-10  " >
            <h4 style= "text-align:center;">INDICADORES DE GESTION</h4>
                <div class="col-md-6" >
                    
                </div> 

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">PROYECTOS 1</div>

                


<div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>N°</th>
                <th>DOMINIO (CORTO)</th>
                <th>DESCRIPCIÓN</th>
                <th>VARIABLE (CORTO)</th>
                <th>DESCRIPCIÓN</th>
                <th>HIPOTESIS</th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          
            <tr>
                <td > 1</td>
                <td > DPTO RRHH </td>
                <td > <button class="btn btn-default" data-toggle="modal" data-target="#d" >VER</button></td>
                <td>  OBREROS </td>
                <td><button class="btn btn-default" data-toggle="modal" data-target="#v">VER</button></td>
                <td><button class="btn btn-default" data-toggle="modal" data-target="#h">DETALLES</button></td>

                
            </tr>

                
            
            </tbody>
        </table>
    </div>
    


            </div>
        </div>

         <a  class="btn btn-danger" onclick="mostrar3()">Listado de objetivos</a>
        <a  class="btn btn-warning" onclick="mostrar1()">Graficas de actores</a>

        <div id="oculto3"  style="display:none;">
                <div class="panel panel-default" style="margin-top:60px">
                   

                        <div class="center">
                            <h4 style= "text-align:center;">LISTADO DE OBJETIVOS</h4> 
                            <div style="overflow-x:auto;">
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    
                                        <tr>
                                            <th>Nombre Objetivo</th>
                                            <th>DESCRIPCION</th>
                                           
                                        </tr>

                                         <tr>
                                            <th></th>
                                            <th> </th>
                                           
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


<div class="modal fade" id="i" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">NOMBRE DEL ACTOR</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>GRADOS</th>
                                            <th>ACTORES</th>
                                           
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
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="400">LEYENDA
                                                <p>0 Sin influencia:</p>
                                                <p>1 Influencia operativa:</p>
                                                <p>2 Influencia en proyecto:</p>
                                                <p>3 Influencia en mision:</p>
                                                <p>4 Influencia de existencia:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
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

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">DPTO RRHH</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt repudiandae provident iste aperiam impedit accusantium modi nulla? Aperiam beatae natus optio quasi saepe corporis eos facere, nam nobis sint?</p>                                       
                                    </thead>                                    
                                </table>                
            </div>        
                   

        </div>
    </div>
</div>


<div class="modal fade" id="v" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">OBREROS</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt repudiandae provident iste aperiam impedit accusantium modi nulla? Aperiam beatae natus optio quasi saepe corporis eos facere, nam nobis sint?</p>                                       
                                    </thead>                                    
                                </table>                
            </div>        
                   

        </div>
    </div>
</div>



<div class="modal fade" id="h" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">HIPÓTESIS / VARIABLE OBREROS</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>HIPÓTESIS</th>
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
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="400">Expertos
                                                <p>1 HIPÓTESIS 1:</p>
                                                <p>2 HIPÓTESIS 2:</p>
                                                <p>3 HIPÓTESIS 3:</p>
                                                <p>4 HIPÓTESIS 4:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>



</div>
@endsection