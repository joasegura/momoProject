@extends('layouts.app')
@section("title", "Bienvenido a momo")

@section('content')
  <body>
    <h1>Mis productos</h1>
    <div class="container-home">
      <section class="contenedor-productos">
        <article class="producto">
          <ul style="display:flex">
            @forelse ($productos as $producto)
              <li>
                <p>{{$producto->imagen}}</p>
                <p>{{$producto->nombre}}</p>
                <p>{{$producto->precio}}</p>
                <p>{{$producto->talle}}</p>
              </li>
            @empty
              <p>No hay productos</p>
            @endforelse
          </ul>
        </article>
      </section>
    </div>

@endsection
