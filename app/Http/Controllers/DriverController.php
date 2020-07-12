<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
   public function showDrivers()
   {
       $drivers = Driver::all();
       //var_dump($drivers);

       //$drivers = Driver::orderBy('created_at', 'desc')->get();
       return view('drivers.index', ['drivers'=> $drivers]);
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
