<?php

namespace App\Http\Controllers;

use App\Models\Clients\TeamManager;
use Illuminate\Http\Request;

class TeamManagerController extends Controller
{
    public function ShowManagers() {
        $managers = TeamManager::all();
        return view('teamManagers.index')
            ->with(['managers' => $managers]);
    }

    public function index() {

    }

    public function store() {
        //validate
        //persist
        TeamManager::create(request([
            'teamOwnerId',
            'firstName',
            'lastName',
            'dob',
            'handle'
        ]));
        //redirect
        return redirect('/teamManagers/index');
    }
}
