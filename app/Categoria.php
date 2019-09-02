<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $guarded = [];

  public function productos()
{
  return $this->hasMany(Producto::class);
}

}
