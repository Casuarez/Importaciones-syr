<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $table = 'inventario';

    protected $fillable = ['nombre_cli','dni_cli','tipo_cli'];
}
