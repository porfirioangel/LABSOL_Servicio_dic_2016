@extends('layouts.master')

@section('head')
	{{HTML::style('css/test.css');}}
	{{HTML::style('css/carousel.css');}}
	{{HTML::script('js/ie-emulation-modes-warning.js');}}
	{{HTML::script('js/docs.min.js');}}
	{{HTML::script('js/ie10-viewport-bug-workaround.js');}}
	{{HTML::script('js/carousel.js');}}

	
	
@stop

@section('cabecera')
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('inicio') }}">
		    <button type="button" class="btn btn-primary">Inicio</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('verProyectos') }}">
		    <button type="button" class="btn btn-primary">Proyectos Disponibles</button>
	    </a>
	  </div>
    <div class="btn-group" role="group">
      <a href="{{ URL::to('verProyectosFinalizados') }}">
        <button type="button" class="btn btn-primary">Proyectos Finalizados</button>
      </a>
    </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('nuevoEstudiante') }}">
		    <button type="button" class="btn btn-primary">Registro</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('login') }}">
		    <button type="button" class="btn btn-danger">Mi cuenta</button>
	    </a>
	  </div>
	</div>
@stop

@section('contenido')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
       
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/labsol_1.jpg" alt="First slide">
          <div class="container">
            <!--div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div-->
          </div>
        </div>
        <div class="item">
          <img src="img/labsol_2.jpg" alt="Second slide">
          <div class="container">
            <!--div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div-->
          </div>
        </div>
        <div class="item">
          <img src="img/labsol_3.jpg" alt="Third slide">
          <div class="container">
            <!--div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div-->
          </div>
        </div>
      </div>
     
        </div>
        
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
@stop

@section('pie')
<div class="col-md-10 col-md-offset-0">
     <div class="panel-body form-center payment-form">
    	<h5>Consejo Zacatecano de Ciencia, Tecnología e Innovación De la Juventud 504, Col. Barros Sierra C.P. 98090 Zacatecas, Zac.</h5>
    </div>
  </div>
  <div class="col-md-2 media">
        <a class="media-left pull-right"  href="">
          <img src="img/facebook.png" alt="facebook">
        </a>
        <a class="media-left pull-right"  href="#">
          <img src="img/twitter.png" alt="twitter">
        </a>
     </div>
@stop
