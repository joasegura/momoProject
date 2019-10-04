@extends('layouts.app')

@section('content')
{{-- faq --}}
<h2 class="title-cloth">Preguntas /</h2>

<div class="pregunta">
  <h4>Cómo comprar?</h4>
  <div class="respuesta">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
  </div>
</div>

<div class="pregunta">
  <h4>Envíos</h4>
  <div class="respuesta">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
  </div>
</div>

<div class="pregunta">
  <h4>Formas de pago</h4>
  <div class="respuesta">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
  </div>
</div>

<div class="pregunta">
  <h4>Dónde nos encontramos?</h4>
  <div class="respuesta">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
  </div>
</div>

   <!-- footer -->
    <div class="container-footer">
       <nav class="main-footer">
          <ul class="footer-flex">
           <li><a href="#">Home</a></li>
           <li><a href="/faq">Preguntas</a></li>
           <li><a href="#">Sucursales</a></li>
           <li><a href="#">Contacto</a></li>
          </ul>
       </nav>
    </div>
  </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      $('.toggle-nav').click(() => {
        $('.main-nav').slideToggle('slow');
      })
    </script>
  @endsection
