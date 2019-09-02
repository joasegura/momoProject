<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Producto extends Model
{
  public $table = "productos";
  public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];

  public function categoria()
  {
      return $this->belongsTo(Categoria::class);
  }

}
