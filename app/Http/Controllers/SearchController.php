<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $origen = $request->input('origen');
        $destino = $request->input('destino');

        // Aquí puedes añadir la lógica para buscar en la base de datos o en algún otro lugar.
        // Por ejemplo, si tienes un modelo 'Trip', puedes hacer algo como:
        //$results = Trip::where('origen', 'like', '%' . $origen . '%')
        //                ->where('destino', $destino)
        //                ->get();

        // Para ahora, simplemente retornaremos los datos que recibimos como respuesta JSON
        return response()->json([
            'origen' => $origen,
            'destino' => $destino
        ]);
    }
}
