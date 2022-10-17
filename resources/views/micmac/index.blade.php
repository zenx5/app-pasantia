@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

 
<div class="container">
    <div class="row">

        <div class="col-md-10  "style= "text-align:center;" >
           <h2> <i class="fas fa-project-diagram fa-2x " ></i>
              Proyectos Micmac</h2> 
        </br>
                

            

                


<div class="center">
<div style="overflow-x:auto;">
 <table class="table table-striped table-bordered table-hover">
             <thead>
            <tr>
               
                <th>NOMBRE</th>
                <th>FECHA</th>
                <th>METODO(S)</th>

                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          @foreach($proy as $proys)

          @if ($x<> $proys->proyecto)
            <tr>
                <td >{{$proys->proyecto}} </td>
                <td > {{$proys->created_at}} </td>
                <td > nada </td>
                <td>  <a href="{{ route('micmac.show', $proys->proyecto) }}" class="btn btn-success" >Ver</a></td>
                <?php $x=$proys->proyecto ?>
            </tr>
             
            
              @endif
              @endforeach
            </tbody>
        </table>
    </div>
    


            </div>
        </div>
    </div>
</div>

@endsection