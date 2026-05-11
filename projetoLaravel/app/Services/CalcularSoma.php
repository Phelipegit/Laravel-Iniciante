<?php

namespace App\Services;

use Illuminate\Http\Request;

class CalcularSoma {
    public function calcularSoma(Request $request) {
        $num1 = $request->num1;
        $num2 = $request->num2;
        return response()->json(['soma' => $num1 + $num2]);
    }
}
