@extends('layouts.app')

@section('content')

    <ul style="color:red" class="errores">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <form class="" action="/agregarProducto" method="post" enctype="multipart/form-data">
      @csrf
      <div class="">
        <label for="title">Nombre del producto:</label>
        <input type="text" name="nombre" value="">
      </div>
      <div class="">
        <label for="awards">Talle:</label>
        <input type="text" name="talle" value="">
      </div>
      <div class="">
        <label for="release_date">Precio:</label>
        <input type="text" name="precio" value="">
      </div>
        <div class="">
          <label for="">Imagen del producto:</label>
          <input type="file" name="imagen" value="">
        </div>
      <div class="">
        <input type="submit" name="" value="Agregar producto">
      </div>
    </form>
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
