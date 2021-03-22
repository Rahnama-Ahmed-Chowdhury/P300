<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;


class DonarController extends Controller
{
    
    public function donor_list(){
         $informations = Information::latest()->paginate(200);
        return view('informations.donor_list', compact('informations'));
    }

     
     public function create(){

        return view('informations.create');
    }



    public function store(Request $request){
        $request->validate([
            'Name'=>'required',
            'Gender' => 'required',
            'Date_of_Birth'=>'required',
            'Blood_Type'=>'required',
            'Mobile_Number'=>'required',
            'Email'=>'required',
            'Address'=>'required'
        ]);

        Information::create($request->all());

         $informations = Information::latest()->paginate(200);
        return view('informations.donor_list', compact('informations'));
    }


     public function edit(Information $information){
            return view('informations.edit', compact('information'));
        }



    public function update(Request $request, Information $information){
        $request->validate([
            'Name'=>'required',
            'Gender' => 'required',
            'Date_of_Birth'=>'required',
            'Blood_Type'=>'required',
            'Mobile_Number'=>'required',
            'Email'=>'required',
            'Address'=>'required'
        ]);

        
        $information->update($request->all());

         $informations = Information::latest()->paginate(200);
        return view('informations.donor_list', compact('informations'));
    }

   public function destroy(Information $information){

        $information->delete();
        $informations = Information::latest()->paginate(200);
        return view('informations.donor_list', compact('informations'));
    }


}
