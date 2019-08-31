<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Momo Productos</title>
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    <h1>Mis productos</h1>
    <ul>
      @forelse ($productos as $producto)
        <li>
          <p>{{$producto->nombre}}</p>
          <p>{{$producto->imagen}}</p>
          <p>{{$producto->precio}}</p>
          <p>{{$producto->talle}}</p>
        </li>
      @empty
        <p>No hay productos</p>
      @endforelse
    </ul>
  </body>
</html>
