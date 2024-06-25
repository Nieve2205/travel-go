<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $destination = $request->input('destination');
        $tripType = $request->input('trip_type');

        // Aquí puedes añadir la lógica para buscar en la base de datos o en algún otro lugar.
        // Por ejemplo, si tienes un modelo 'Trip', puedes hacer algo como:
        // $results = Trip::where('destination', 'like', '%' . $destination . '%')
        //                ->where('type', $tripType)
        //                ->get();

        // Para ahora, simplemente retornaremos los datos que recibimos como respuesta JSON
        return response()->json([
            'destination' => $destination,
            'trip_type' => $tripType
        ]);
    }
}
