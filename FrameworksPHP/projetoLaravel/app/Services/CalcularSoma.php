<?php

namespace App\Services;

use Illuminate\Http\Request;

class CalcularSoma {
    public function calcularSoma(Request $request) {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $select = $request->select;
        if($select == ("+")) {
            return response()->json(['result' => $num1 + $num2]);
        }
        if($select == ("-")) {
            return response()->json(['result' => $num1 - $num2]);
        }
        if($select == ("x")) {
            return response()->json(['result' => $num1 * $num2]);
        }

        return response()->json(['result' => 0]);
    }
}
