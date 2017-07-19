<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $projects;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->projects = Project::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projects;
        return view('home', compact('projects'));
    }


    // add one

    // list all

    // list one

    // update/delete one


}
