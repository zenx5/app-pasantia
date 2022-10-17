@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

 
  <div class="container">
    <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$x1}}</font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Compras totales</font></font></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></a>
          </div>
        </div>

        <div class="col-md-9  " >
            <h2> <i class="fas fa-project-diagram fa-2x " ></i>
              Indicadores de Compras </h2> 
            </br>
        </div>
  </div>
                
        <!--  Tabla 1  -->
        <div class="col-md-8 ">
          <h4>Compras por Pais</h4>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>PAIS</th>
                          <th>METODOS</th>
                          <th>CANTIDAD</th>

                      
                     
                        </tr>
                    </thead>
                    <tbody>
               
                        <tr>
                            <td > </td>
                            <td > </td>
                            <td > nada </td>
                            
                        </tr>
                   
                    </tbody>
                </table>
                <a  class="btn btn-success" >GRAFICAS </a>
            </div>
        </div>  

        <!--  Tabla 2  -->
        <div class="col-md-8 ">
          <h4>Compras por año</h4>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>AÑO</th>
                          
                          <th>CANTIDAD</th>

                        </tr>
                    </thead>
                    <tbody>
               
                    @foreach($comprax as $compra)
                        <tr>
                            <td > {{$compra-> }}</td>
                           
                            <td > nada </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a  class="btn btn-success" >GRAFICAS </a>
            </div>
        </div> 

        <!--  Tabla 3  -->
        <div class="col-md-8 ">
          <h4>Compras por metodo</h4>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>NOMBRE</th>                          
                          <th>CANTIDAD</th>

                      
                     
                        </tr>
                    </thead>
                    <tbody>
               
                        <tr>
                            <td > </td>
                            <td > nada </td>
                            
                        </tr>
                   
                    </tbody>
                </table>
                <a  class="btn btn-success" >GRAFICAS </a>
            </div>
        </div> 

        <!--  Tabla 4  -->
        <div class="col-md-8 ">
          <h4>Compras por Tipo de pago</h4>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>TIPO DE PAGO</th>
                          <TH>INGRESOS OBTENIDOS</TH>                          
                          <th>CANTIDAD</th>

                      
                     
                        </tr>
                    </thead>
                    <tbody>
               
                        <tr>
                            <td > </td>
                            <TD></TD>
                            <td > nada </td>
                            
                        </tr>
                   
                    </tbody>
                </table>
                <a  class="btn btn-success" >GRAFICAS </a>
            </div>
        </div> 

        

        <!--  Tabla 5  -->
    <div class="col-md-12">
      <h4>TOTAL DE GANANCIAS GENERADAS</h4>
        <div class="col-md-4 ">
          
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>MES</th>                          
                          <th>MONTO</th>

                      
                     
                        </tr>
                    </thead>
                    <tbody>
               
                        <tr>
                            <td > </td>
                            <td > nada </td>
                            
                        
                        </tr>

                        <tr>
                          <td></td>
                          <td>Ganancia total = </td>
                        </tr>

                   
                    </tbody>
                </table>
            </div>
        </div>

        <!--  Tabla 6
        +-
          -->
        <div class="col-md-4 ">
         
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover">
                   <thead>
                        <tr>
                     
                          <th>AÑO</th>                          
                          <th>MONTO</th>

                      
                     
                        </tr>
                    </thead>
                    <tbody>
               
                        <tr>
                            <td > </td>
                            <td > nada </td>
                            
                        
                        </tr>

                        <tr>
                          <td></td>
                          <td>Ganancia total = </td>
                        </tr>

                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

    </div>
</div>

@endsection