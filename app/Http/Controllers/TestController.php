<?php namespace App\Http\Controllers;

use App\Models\Test\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function showTestTable()
    {
        echo 'hello world!';
        $test = Test::all();
        echo $test;

    }
    public function showDrivers()
    {

    }

    public function showDriverPortraits()
    {

    }

    public function updateDriver()
    {

    }

}
