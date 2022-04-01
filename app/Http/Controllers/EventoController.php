<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        $nome = "Bruno";
        $idade = 19;

        $arr = [1,2,3,4,5,6,7,8,9,10];
       
        $nomes = ['Rodrigo', 'João', 'Erick'];
        return view('welcome', 
        [
            'nome' => $nome, 
            'idade'=> $idade, 
            'arr'=> $arr,
            'nomes'=> $nomes
        ]);
    }
public function create(){
    $teste="teste";
    return view('eventos.create');
}

}
