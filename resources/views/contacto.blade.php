@extends('layouts.home')

@section('title', 'Home')


@section('content')

<div class="map">
  <div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1968.6563705671404!2d-75.39385511259691!3d9.305532337054458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5915fcca3c2097%3A0x3c53e23556f89afe!2sLaboratorio%20Cl%C3%ADnico%20BIOSALUD!5e0!3m2!1ses-419!2sco!4v1625793941271!5m2!1ses-419!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>

<section id="contact-page">
  <div class="container">
    <div class="center">
      <h2>Drop Your Message</h2>
      <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="row contact-wrap">
      <div class="col-md-8 col-md-offset-2">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>

          <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
        </form>
      </div>
    </div>
    <!--/.row-->
  </div>
  <!--/.container-->
</section>
<!--/#contact-page-->
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
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/fliplightbox.min.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
      $('.portfolio').flipLightBox()
    </script>
    <script src="contactform/contactform.js"></script>
@stop
