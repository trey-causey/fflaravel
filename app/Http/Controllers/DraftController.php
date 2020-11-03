<?php

namespace App\Http\Controllers;

use App\Models\Person\Driver;
use Illuminate\Http\Request;

class DraftController extends Controller
{

    public function showAvailableDrivers()
    {
        $drivers = Driver::all();
        return view ('draft.index');
    }


}
