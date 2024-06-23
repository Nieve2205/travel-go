<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    public function index()
    {
        return view('Paquetes.index');
    }

    public function reserva_view()
    {
        return view('Paquetes.reserva',['activeTab'=>'informacion']);
    }
    public function showTab($tab = 'informacion')
    {
        return view('Paquetes.reserva', ['activeTab' => $tab]);
    }
}
