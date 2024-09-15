<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $head_services = Service::all()->take(3);
        $services = Service::all();
        return view("services",compact("services","head_services"));
    }
}
