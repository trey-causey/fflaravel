<?php

namespace App\Http\Controllers;

use App\Models\Location\Country;
use App\Models\Location\Zipcode;
use Illuminate\Http\Request;
//use mysql_xdevapi\Exception;

class AdminController extends Controller
{
    public function addEditDB()
    {
        $countries = Country::all();
        if($_POST)
        {
            //Zipcode::storeZipcode();
            $this->saveZip(\request());
        }
        return view('admin.administration',
            ['countries' => $countries]);
    }

    public function fetchCountry()
    {
    }
    public function saveZip(Request $request)
    {
        try {
            $zipcode = new Zipcode();
            $zipcode->zipcode = request('zipcode');
            $zipcode->save();
        } catch (\Exception $exception)
        {
            return view('error.dbinserterror',$exception->getMessage());
        }
    }

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        \Log::info($input);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function addZipCodeToDB()
    {
        $countries = Country::all();
        //declare zip code object
        $zipCodeObject = new Zipcode();
        //accept the zip code input and validate that it is 5 numbers

        //if it is, add to the zip code database
        $this->saveZip(\request());
        //return the view
        return view('admin.administration',
            ['countries' => $countries]);
    }
}


