<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style>
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}
.float:hover {
	text-decoration: none;
	color: #25d366;
  background-color:#fff;
}

.my-float{
	margin-top:16px;
}
  </style>
</head>

<body>
  <nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="/"><!--<span style="font-family: 'Roboto', sans-serif;color:#cd2e27;">IPS</span><span style="font-family: 'Raleway', sans-serif;color:#1189ca;"> BIOSAlUD</span>-->
      <div><img src="img/logo1.svg" alt="" width="170px" style="margin-top:-10px;"></div></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="/">Home</a></li>
            <!--<li role="presentation"><a href="/Servicios">Servicios</a></li>-->
            <li role="presentation"><li>
                <a href="/Servicios">Servicios</a>
              <ul class="nav nav-tabs" role="tablist">                
                <li role="presentation"><a href="/Quimica">Quimica</a></li>
                <li role="presentation"><a href="#">Microbiologia</a></li>
                <li role="presentation"><a href="#">Hematologia</a></li>
              </ul>
            </li>
            <li role="presentation"><a href="https://lab.kubapp.co/login/biosalud">Resultados</a></li>
            <li role="presentation"><a href="/Contacto">Contacto</a></li>
            <li role="presentation"><a href="/Contacto">Nosotros</a></li>
            <li role="presentation"><a href="https://wa.me/34555005500/?text=tu%20texto%20personalizado" ><i class="fab fa-whatsapp fa-lg"></i></a>
</li>
            <li role="presentation"><a href="/login"><i class="fas fa-user"></i></a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>

  @yield('content')
  <a href="https://api.whatsapp.com/send?phone=5195508107&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">

  <i class="fa fa-whatsapp my-float"></i>
</a>
  @show

  <footer>
    <div class="inner-footer">
      <div class="container">

      </div>
    </div>


    <div class="last-div">
      
      <div class="container">
        
        <div class="row">
<div class="col-md-6">
<div class="single-appointment-sidebar availability">
				Copyright © 2021 Laboratorio Clinico Biosalud de la costa sas<br>Todos los derechos reservados.<br>
				Sede: Cra 22 N° 18-06 - Teléfonos: <a style="color:#FFF" href="tel:6052765522">(605) 276-5522</a> Celular: <a style="color:#FFF" href="https://api.whatsapp.com/send?phone=573106539365&amp;text=Hola,%20quiero%20más%20información%20sobre%20sus%20servicios." target="_blank" title="Enviar WhatsApp">(310) 653-9365</a><br>
				Sincelejo - Sucre - Colombia<br>
				
			</div>
<p></p>
</div>
<div class="col-md-6 footcerti">
			 <img src="img/vigilado.png" width="180">
		</div>
<p></p>
</div>
      </div>

      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
