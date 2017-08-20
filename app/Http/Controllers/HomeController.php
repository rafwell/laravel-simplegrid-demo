<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rafwell\Simplegrid\Grid;
use App\Employe;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index');
    }
}
