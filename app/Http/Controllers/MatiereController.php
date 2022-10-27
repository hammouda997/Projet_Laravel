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
    public function index1()
    {
        $matieres = Matiere::all();
        return view ('MatiereF')->with('matieres', $matieres);
    }
    
    
    public function create()
    {

        return view('matieres.create');
    }
  
    public function store(Request $request)
    {
        
        
        $request->validate([  
            'codeM'      =>  'required',
            'nom'     =>  'required|string|min:2',
            'coff'     =>  'required|integer|not_in:0',
            'evaluation'     =>  'required'
            ]);
    
      
    
            $matiere = new Matiere;
    
            $matiere->codeM = $request->codeM;
    
            $matiere->nom = $request->nom;
    
            $matiere->coff = $request->coff;
            $matiere->evaluation = $request->evaluation;
          
    
            $matiere->save();
    
            return redirect()->route('matiere.index')->with('success', 'matiére ajouté avec succès.'); 
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
        return redirect()->route('matiere.index')->with('success', 'matiére modifié avec succès.');  
    }
  
    public function destroy($id)
    {
        Matiere::destroy($id);
        return redirect()->route('matiere.index')->with('success', 'matiére supprimé avec succès.'); 
    }
}

