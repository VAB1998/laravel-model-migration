<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index(){
        return view('packages');
    }
}
