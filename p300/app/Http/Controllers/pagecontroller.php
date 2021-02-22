<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\information;

class pagecontroller extends Controller
{
    public function home(){
        $information = information::latest()->paginate(200);

        return view('pages.home', compact('information'));
    }    
}
