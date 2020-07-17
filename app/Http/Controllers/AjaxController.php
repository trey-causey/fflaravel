<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        \Log::info($input);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function index() {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }

}
