@if(count($errors))
    <div class="alert alert-danger">
          <h4>Por favor corrige los siguientes errores</h4>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
             <ul>
                  @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                  @endforeach
              </ul>
      </div>
@endif      
