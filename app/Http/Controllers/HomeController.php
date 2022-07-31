<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $informations = Information::all();
        return view('index' , compact('informations'));
    }
}
