<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
	public function admin(){
		return view('admin.index');
	}	

	public function administrador(){
		return view('admin.administrador');
	}

	public function clientes(){
		return view('admin.clientes');
	}

	public function inventario(){
		return view('admin.inventario');
	}

	public function ventas(){
		return view('admin.ventas');
	}

	public function productos(){
		return view('admin.productos');
	}


}
