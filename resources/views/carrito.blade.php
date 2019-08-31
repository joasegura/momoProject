@extends('layouts.app')

@section('content')
{{-- carrito --}}


   <!-- footer -->
    <div class="container-footer">
       <nav class="main-footer">
          <ul class="footer-flex">
           <li><a href="#">Home</a></li>
           <li><a href="#">Preguntas</a></li>
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
