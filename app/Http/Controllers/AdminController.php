<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addEditDB()
    {
        $countries = Country::all();
        //$countries = DB::table('countries')->country_id;
        return view('admin.administration',['countries' => $countries]);

    }

    public function fetchCountry()
    {
        //$country = Country::where('country','=','Country')->get();
        $countries = app\Country::all();
        $country = Country::find(10);

    }
}
