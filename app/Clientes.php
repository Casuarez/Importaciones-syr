<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'clientes';

    protected $fillable = ['nombre_cli','dni_cli','tipo_cli'];
}
