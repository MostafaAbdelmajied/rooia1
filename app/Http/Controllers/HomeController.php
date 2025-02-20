<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Service::all()->take(3);
        return view("home",compact("services"));
    }
    
}
