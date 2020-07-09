<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;


class AdminController extends Controller
{
    public function addEditDB()
    {
        return view('admin.administration');
    }
}
