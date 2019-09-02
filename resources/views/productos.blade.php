@extends('layouts.app')
@section("title", "Bienvenido a momo")

@section('content')
  <body>
    <h1>Mis productos</h1>
    <div class="container-home">
      <section class="contenedor-productos">
        <article class="producto">
          @forelse ($productos as $producto)
          <div class="foto-producto">
              <img src="{{Storage::url($producto->imagen)}}">
              <h4>{{$producto->nombre}} <br> {{$producto->precio}}</h4>
              <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
           </div>
         @empty
           <p>No hay productos</p>
         @endforelse
        </article>
      </section>
    </div>

@endsection
