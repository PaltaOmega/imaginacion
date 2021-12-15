<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use App\Http\Requests\StorePruebaRequest;
use App\Http\Requests\UpdatePruebaRequest;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Bebida.mapache');
    }

    public function listarMapaches(){
        $a = 'Tengo mapaches';
        $b = 'Tengo tanukis';
        $c = [
            'mapaches' => $a,
            'tanukis' => $b
        ];
        return response()->json($c);
    }
}
