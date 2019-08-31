<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalle de producto</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Usted eligio el producto {{$producto->nombre}}</h1>
    <div class="">
      <img src="/storage/{{$producto->imagen}}" alt="">
    </div>
    <form class="" action="/borrarProducto" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$producto->id}}">
      <input type="submit" name="" value="Borrar Producto">
    </form>
  </body>
</html>
