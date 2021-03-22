<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\information;


class DonarController extends Controller
{
     public function index(){
        $informations = information::latest()->paginate(200);

        return view('pages.donor', compact('informations'));
    }

    public function donor_list(){
         $informations = information::latest()->paginate(200);
        return view('pages.donor_list', compact('informations'));
    }

     
     public function create(){

        return view('pages.create');
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

        information::create($request->all());

         $informations = information::latest()->paginate(200);
        return view('pages.donor_list', compact('informations'));
    }

 /*   public function edit(Student $student){
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, Student $student){
        $request->validate([
            'name'=>'required',
            'student_id' => 'required',
            'batch'=>'required',
             'sports_name'=>'required'
        ]);

        
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
    }

    public function destroy(Student $student){

        $student->delete();
        return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
    }
*/

}
