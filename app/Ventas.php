<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
    protected $table = 'ventas';

    protected $fillable = ['nombre_cli','dni_cli','tipo_cli'];
}
