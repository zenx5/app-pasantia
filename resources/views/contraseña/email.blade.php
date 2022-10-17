<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <script src="{{asset('js/all.js')}}"></script>
    
    <style>
        *{
            margin:0;
            padding:0;
            font-family:'Questrial', sans-serif;
        }
        .container{
            width:100%;
            height:60%;
            margin-top:50px;
            margin-bottom:50px;
        }

        .container .card .card-header{
            font-weight:bold;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">¡Hola!</div>

                    <div class="card-body">
                        <p>Recibes este email porque se solicitó un reestablecimiento de contraseña para tu cuenta.</p>
                    </div>
                </div>
                <a href="{{url('password/reset/{token}')}}" class="text-center"><button class="btn btn-success">cambiar contraseña</button></a>
            </div>
        </div>
    </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/mdb.min.js')}}"></script>
  <script src="{{asset('js/fontawesome.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
