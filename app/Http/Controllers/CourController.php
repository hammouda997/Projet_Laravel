<?php

namespace App\Http\Controllers;
use App\Models\Cour;
use App\Models\Matiere;

use Illuminate\Http\Request;

class CourController extends Controller
{
    public function index()
    {
        $cours = Cour::all();
        return view ('cours.index')->with('cours', $cours);
    }
    
    public function create()
    {
        $matiere=Matiere::all();

        return view('cours.create',compact('matiere'));
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Cour::create($input);
        return redirect('cour')->with('flash_message', 'cour Addedd!');  
    }
    
    public function show($id)
    {
        $cour = Cour::find($id);
        return view('cours.show')->with('cours', $cour);
    }
    
    public function edit($id)
    {
        $cour = Cour::find($id);
        return view('cours.edit')->with('cours', $cour);
    }
  
    public function update(Request $request, $id)
    {
        $cour = Cour::find($id);
        $input = $request->all();
        $cour->update($input);
        return redirect('cour')->with('flash_message', 'cour Updated!');  
    }
  
    public function destroy($id)
    {
        Cour::destroy($id);
        return redirect('cour')->with('flash_message', 'cour deleted!');  
    }
}
