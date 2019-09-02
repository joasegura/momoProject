<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use Auth;


class ProductosController extends Controller
{
  public function listado() {
    $usuarioLog = Auth::user();

  //  if ($usuarioLog == null) {  *por si el usuario no esta logeado que haga una redireccion a otra pag
  //    return redirect();
  //  }

    $productos = Producto::all();

    $vac = compact("productos");

    return view("productos", $vac);
  }

  public function listadoPorCategoria($categoria) {

    $productos = Producto::where("categoria_id", $categoria)->get();

    $vac = compact("productos");

    return view("productos", $vac);
  }


  public function agregar(Request $req) {
    $reglas = [
      "nombre" => "string|min:3",
      "talle" => "min:1",
      "precio" => "integer|min:3",
      "imagen" => "file"
    ];

    $mensajes = [
      "string" => "El campo :attribute debe ser un texto",
      "min" => "El campo :attribute tiene un minimo de :min cifras",
      "integer" => "El campo :attribute debe ser un numero entero",
    ];
    $this->validate($req, $reglas, $mensajes);


    $productoNuevo = new Producto();

    $ruta = $req->file("imagen")->store("public");
    $nombreArchivo = basename($ruta);

    $productoNuevo->imagen = $nombreArchivo;
    $productoNuevo->nombre = $req["nombre"];
    $productoNuevo->talle = $req["talle"];
    $productoNuevo->precio = $req["precio"];

    $productoNuevo->save();

    return redirect("/index");
  }

  public function borrar(Request $formulario) {
    $id = $formulario["id"];

    $producto = Producto::find($id);

    $producto->delete();

    return redirect("/productos");
  }

  public function detalle($id) {

    $producto = Producto::find($id);

    $vac = compact("producto");

    return view("detalleProducto", $vac);
  }

}
