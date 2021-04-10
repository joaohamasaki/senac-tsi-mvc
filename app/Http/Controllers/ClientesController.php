<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Clientes;



class ClientesController extends Controller
{
    /*Uma forma de controlar o acesso
    public function __construct(){
        $this->middleware('auth');
    }
    */

    public function listar(){
        $clientes = Clientes::all();

        return view('clientes.listar', ['clientes' => $clientes]);
    }

    public function show(){
        $clientes = Clientes::all();

        return view('clientes.nascimento', ['clientes' => $clientes]);
    }
}
