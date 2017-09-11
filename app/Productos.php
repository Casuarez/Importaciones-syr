<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $table = 'productos';

    protected $fillable = ['nombre_cli','dni_cli','tipo_cli'];
}
