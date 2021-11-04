<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    
    public function index(){

        $packages = Package::all();

        // dd($packages);

        return view('packages', compact('packages'));
    }

    public function show($id){

        $package = Package::findOrFail($id);


        return view('package', compact('package'));
    }
}
