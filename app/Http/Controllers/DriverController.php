<?php

namespace App\Http\Controllers;

use App\Models\Person\Driver;
use App\Models\Person\DriverPortraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
   public function showDrivers()
   {
       $drivers = Driver::all()->sortBy('date_of_birth');
       //var_dump($drivers);

       //$drivers = Driver::orderBy('created_at', 'desc')->get();
       return view('drivers.index', ['drivers'=> $drivers]);
   }

   public function showDriverPortraits()
   {
       $drivers = Driver::all()->sortBy('dob');
       $driverPortraits = DriverPortraits::all();
       //var_dump($drivers);
       $join = DB::select('SELECT dp.portraitURL, driverRef,dob FROM driverPortraits dp JOIN drivers d ON dp.driverID = d.driverID');
       //$drivers = Driver::orderBy('created_at', 'desc')->get();
       /*       return view('drivers.index', [
                  'drivers'=> $drivers,
                   'driverPortraits' => $driverPortraits
              ]);*/
       return view('drivers.index', ['join' => $join]);
   }

   public function updateDriver()
   {
   }
    /*public function getAdminCreate()
    {
        $tags = Tag::all();
        return view('admin.create', ['tags' => $tags]);
    }*/
}
