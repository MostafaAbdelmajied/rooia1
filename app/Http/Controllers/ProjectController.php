<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $netbal = Project::where("type","netbal")->get();
        $ongoing = Project::where("type","ongoing")->get();
        return view("project",compact("netbal","ongoing"));
    }
}
