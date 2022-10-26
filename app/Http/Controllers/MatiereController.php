<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matiere;

class MatiereController extends Controller
{

    public function index()
    {
        $matieres = Matiere::all();
        return view ('matieres.index')->with('matieres', $matieres);
    }
    
    public function create()
    {

        return view('matieres.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Matiere::create($input);
        return redirect('matiere')->with('flash_message', 'matiere Addedd!');  
    }
    
    public function show($id)
    {
        $matiere = Matiere::find($id);
        return view('matieres.show')->with('matieres', $matiere);
    }
    
    public function edit($id)
    {
        $matiere = Matiere::find($id);
        return view('matieres.edit')->with('matieres', $matiere);
    }
  
    public function update(Request $request, $id)
    {
        $matiere = Matiere::find($id);
        $input = $request->all();
        $matiere->update($input);
        return redirect('matiere')->with('flash_message', 'matiere Updated!');  
    }
  
    public function destroy($id)
    {
        Matiere::destroy($id);
        return redirect('matiere')->with('flash_message', ' deleted!');  
    }
}

