<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Circuit;
use App\Http\Requests;

class CircuitController extends Controller
{
    public function getCircuit()
    {
        $circuit = new Circuit();
        return view('races.circuit');

    }
}
