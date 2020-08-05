<?php

namespace App\Http\Controllers;

use App\Models\Constructors;
use Illuminate\Http\Request;

class ConstructorsController extends Controller
{
    public function showConstructors()
    {
        $constructors = Constructors::all();
        return view('constructors.index',
            ['constructors' => $constructors]);
    }

    public function getResults()
    {
        $con = new Constructors();
        $test = $con->getConstructorsResults();

        return view('constructors.index',
        ['constructors' => $test]);
    }
}
