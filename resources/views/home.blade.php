@extends('layouts.home')

@section('title', 'Home')


@section('content')
<div class="container">
  
  <div class="row">
    <div class="slider">
      <div class="img-responsive">
        <ul class="bxslider">
          <li><img src="img/slider/01.jpg" alt="" style="max-width: 100%;" /></li>
          <li><img src="img/slider/02.jpg" alt="" /></li>
          <!--<li><img src="img/slider/03.jpg" alt="" /></li>-->
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h2>¿Quienes Somos?</h2>
        <p align="justify">IPS BIOSALUD S.A.S.  Es una empresa creada en el 2012 en la ciudad de Sincelejo, para brindar servicios integrales de salud a través de la prestación de servicios de mediana complejidad y con dedicación y esfuerzo, y a su vez ir creciendo en sus servicios, ampliando su portafolio y su capacidad de atención hasta llegar a ser una empresa reconocida en la ciudad</p>
      </div>
      <hr>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
          <h4>Misión</h4>
          <div class="icon">
            <i class="fab fa-font-awesome fa-3x"></i>
          </div>
          <p id="miviob" align="justify">Somos una organización dedicada a prestar servicio de laboratorio clínico, con más de ocho años de experiencia en el sector salud, que cuenta con un talento humano capacitado, íntegro y comprometido con las actividades que se realizan, ofreciendo servicio de calidad y logrando resultados confiables y oportunos, caracterizados por el más alto desarrollo profesional y tecnológico.</p>
          <div class="ficon">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
          <h4>Visión</h4>
          <div class="icon">
            <i class="fas fa-eye fa-3x"></i>
          </div>
          <p id="miviob" align="justify">En el 2024 seremos reconocidos a nivel nacional por nuestros altos estándares de calidad, con un recurso humano comprometido en la búsqueda continua de la excelencia, eficiencia y efectividad en la prestación de servicios de laboratorio clínico y salud ocupacional superando las expectativas de nuestros clientes, proveedores y partes interesadas.</p>
          <div class="ficon">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
          <h4>Objetivos</h4>
          <div class="icon">
            <i class="fa fa-location-arrow fa-3x"></i>
          </div>
          <ul id="miviob">
            <li> Capacitar continuamente al personal humano</li>
            <li>Desarollar nuestros serviciso de laboratorio clínico basados en la ética,honestidad compromiso y sentido humano.</li>
            <li>Aumentar la satisfaccion del cliente</li>
            <li>Mejorar la tecnología aplicada para los servicios ofrecidos</li>
            <li>Implementar y mejorar continuamente un sistema de gestion de calidad basado en las normas ISO 9001</li>
            <li>Cumplir los requisitos legales</li>
          </ul>
          <div class="ficon">
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h2>Galeria</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
        </p>
      </div>
      <hr>
    </div>
  </div>
</div>

<div class="content">
  <div class="grid">
    <figure class="effect-zoe">
      <img src="/img/cubiculo.jpg" alt="cubiculo" />
      <figcaption>
        <h2>Title <span>Name</span></h2>
        
        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
      </figcaption>
    </figure>
    <figure class="effect-zoe">
      <img src="img/toma.jpg" alt="toma" />
      <figcaption>
        <h2>Title <span>Name</span></h2>
        
        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
      </figcaption>
    </figure>
  </div>
</div>

<div class="content">
  <div class="grid">
    <figure class="effect-zoe">
      <img src="img/cito.jpg" alt="cito" />
      <figcaption>
        <h2>Title <span>Name</span></h2>
        
        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
      </figcaption>
    </figure>
    <figure class="effect-zoe">
      <img src="img/especiales.jpg" alt="especiales" />
      <figcaption>
        <h2>Title <span>Name</span></h2>
        <!--<p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>-->
        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
      </figcaption>
    </figure>
  </div>
</div>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/set1.css" />
    <link href="/css/overwrite.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
@stop

@section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/fliplightbox.min.js"></script>
    <script src="/js/functions.js"></script>
    
@stop
