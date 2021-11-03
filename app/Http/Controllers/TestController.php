<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index($nome)
    {
        //$nome = "Isabella";
        return view('teste.index', ['nome'=>$nome]); 
    }

    public function notas()
    {
        $notas = [
            0=>'Anotação 1',
            1=>'Anotação 2',
            2=>'Anotação 3',
            3=>'Anotação 444',
        ];
        return view('teste.notas', compact('notas'));
    }
}
