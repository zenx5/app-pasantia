<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <script src="{{asset('js/all.js')}}"></script>
    <title></title>
    <style>
          .slider{
                  width:100%;
                  height:50%;
                  background: url('img/calaco.png');
                  background-size: cover;
                  background-position: center;
          }
          
          .slider h3{
              margin-top:50px;
              color:#FFF;
           }
          
          @media(max-width:480px){
            .slider h3{
              display:flex;
              align-items:center;
              font-size:16px;
            }

            .slider img{
              visibility:hidden;
            }
          }

          @media(max-width:767px){
            .slider h3{
              font-size:16px;
            }

            .slider img{
              visibility:hidden;
            }
          }

          @media(max-width:1200px){
            .slider h3{
              font-size:20px;
            }

            .slider img{
              width:50%;
            }
          }


          .iconos{
              width: 50%;
              height: 50%;
              border-radius: 50%;
              background: red;
          }
          
          .fa-search-dollar{
            color:#a6cb12;
          }

          .fa-bullseye{
            color:#db2d43;
          }

          .fa-lightbulb{
            color:#e0bb20;
          }
          
          h3{
            color:#4B4B4C;
          }
          p{
            color:#808080;
          }
          p b{
            font-weight:bold;
          }

          ul li{
            color:#808080;
            margin-left:20px;
            text-align:justify;
          }
          
         .slider-2{
          font-family: 'Questrial', sans-serif;
         }

          .slider-3{
            background-color: #eeeeee;
            font-family: 'Questrial', sans-serif;
          }

          .slider-4 p{
            font-size:18px;
          }

       
    </style>
  </head>
  <body>
    @if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
    <section class="container-fluid slider ">
    
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="display-4 animated zoomIn titulo text-center">Proyecta el futuro de tu organizaci??n</h3>
              <p></p>
              <a href="{{route('register')}}" class="d-flex justify-content-center"><button class="btn btn-danger p-3">Registrate</button></a>
            </div>
            <div class="col-md-6 mt-4">
              <img src="img/Creando-tu-futuro.png" alt="">
            </div>
          </div>
        </div>
    </section>


    <section class="container my-5 slider-2">
          <h3 class="text-center mb-5">Planificaci??n Estrat??gica prospectiva es una nueva forma de hacer las cosas</h3>
        <div class="row">
              <div class="col-md-4 text-center">
                  <i class="fas fa-search-dollar fa-3x"></i>
                  <h3 class="my-4">Planificar</h3>
                  <p >???Todos los pa??ses deben tener en claro que los cambios sociales se ir??n acelerando,
                     los futuros puestos de trabajo requerir??n m??s y m??s conocimientos y habilidades.???</p>
              </div>
              <div class="col-md-4 text-center">
                <i class="fas fa-bullseye fa-3x "></i>
                <h3 class="my-4">La competencia</h3>
                <p>Aumenta r??pidamente e impacta de manera repentina en los mercados y en las sociedades
                  creciendo la rivalidad no s??lo entre pa??ses sino tambi??n entre compa????as.</p>
              </div>
              <div class="col-md-4 text-center">
                  <i class="fas fa-lightbulb fa-3x"></i>
                <h3 class="my-4">Estrategia trascendental</h3>
                <p>Permite la identificaci??n, anticipaci??n y proyecci??n de tendencias en los campos sociales,
                  econ??micos y tecnol??gicos, utilizando   m??todos interactivos y participativos de debate</p>
              </div>
        </div>
    </section>

    <section class="container-fluid my-5 slider-3 p-5">
        <div class="container">
        
            <div class="row">
                <div class="col-md-6">
                    <h3>??A qui??nes est?? dirigido la prospectiva? </h3>
                      <ul>
                        <li>A los l??deres pol??ticos y consejeros gubernamentales
                        que necesitan tomar decisiones con implicaciones socioecon??micas muy importantes a largo plazo.</li>
                        <li>A los l??deres de las Empresas y Organizaciones que buscan comprender el futuro con el fin de adelantarse a sus competidores</li>
                        <li>A los equipos directivos que necesitan plantear, analizar, evaluar, representar y comunicar las decisiones importantes sobre el futuro.</li>
                        <li>A los managers especializados en adquisiciones y fusiones de empresas, estrategias, marketing, etc.</li>
                        <li>A los profesionales y consejeros de inversiones que necesitan prospectar las evoluciones a largo plazo de las empresas donde vayan a invertir/desinvertir.</li>
                        <li>A los estudiantes que desean proyectarse un futuro mejor.</li>
                      </ul>
                </div>
                <div class="col-md-6 ">
                    <img src="{{asset('img/dirigido.jpg')}}" alt="" style="width:90%; height:100%;">
                </div>
            </div>

            <div class="row" style="margin-top:80px;">
                <div class="col-md-4">
                    <p class="">"Estudia el futuro para comprenderlo y poder influir en ??l. Aunque en ocasiones el t??rmino futurolog??a hace referencia a 
                        otras disciplinas no basadas en el m??todo cient??fico".
                        <p class="d-flex justify-content-end p-0"><b>Gast??n Berger</b> </p>
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="">
                      "Es el medio sistem??tico que permite de evaluar los desarrollos cient??ficos y tecnol??gicos que podr??an tener un fuerte impacto en la competitividad industrial, 
                      la creaci??n de riqueza y la calidad de vida".
                      <p class="d-flex justify-content-end p-0"><b>Luke Georghiou</b> </p>
                    </p>
                </div>
                <div class="col-md-4">
                  <p class="">
                  "Observa a largo plazo el futuro de la ciencia, la tecnolog??a, la econom??a y la sociedad con el prop??sito de identificar las tecnolog??as 
                  emergentes que probablemente produzcan los mayores beneficios econ??micos y/o sociales".
                  <p class="d-flex justify-content-end p-0"><b>OCDE</b> </p>
                  </p>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-4 my-5">
          <div class="container">
              <div class="text-center mb-5">
                  <h3>Precios</h3>
                  <p class="font-weight-normal mt-3">Opciones de precios flexibles adaptadas a sus necesidades.</p>
              </div> 

              <div class="card-deck mb-3 d-flex justify-content-center text-center">
                  <div class="row">
                          @foreach($servicios as $item)
                          <div class="card card-1 mb-4 col-md-4 ml-2 p-2">
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
          <p class="text-center"><a href="{{route('servicios')}}">Ver detalles de precios</a></p>
    </section>

    @extends('store.partials.footer')
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/mdb.min.js')}}"></script>
  <script src="{{asset('js/fontawesome.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/form.js')}}"></script>
  </body>
</html>
