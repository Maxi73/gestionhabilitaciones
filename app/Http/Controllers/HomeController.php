<?php

namespace App\Http\Controllers;


use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        //$vehiculos = Vehiculo::all();

        $hoy =  date("Y-m-d");
        $vtvVencidas = Vehiculo::where('fechaVencimientoVtv','<',$hoy)->get();
        $segurosVencidos = Vehiculo::where('fechaVencimientoSeguro','<',$hoy)->get();
        $licenciasVencidas = Vehiculo::where('fechaVencimientoLicencia','<',$hoy)->get();


        return view('home.index')
            ->with('vtvVencidas',$vtvVencidas)
            ->with('segurosVencidos',$segurosVencidos)
            ->with('licenciasVencidas',$licenciasVencidas);
    }



}
