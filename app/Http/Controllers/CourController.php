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
        public function index1()
        {
            $cours = Cour::all();
            return view ('CourF')->with('cours', $cours);
        }


    public function create()
    {
        $matiere=Matiere::all();

        return view('cours.create',compact('matiere'));
    }
  
    public function store(Request $request)
    {
        $request->validate([  
            'code'      =>  'required',
            'nom'     =>  'required|string|min:2',
            'duree'     =>  'required|integer|not_in:0'
            ]);
    
      
    
            $cour = new Cour;
    
            $cour->code = $request->code;
    
            $cour->nom = $request->nom;
    
            $cour->duree = $request->duree;
            $cour->file = $request->file;
            $cour->matiere_id = $request->matiere_id;
            
    
            $cour->save();
    
            return redirect()->route('cour.index')->with('success', 'cour Added successfully.'); 
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
        return redirect()->route('cour.index')->with('success', 'cours modifié avec succès');
    }
  
    public function destroy($id)
    {
        Cour::destroy($id);
        return redirect()->route('cour.index')->with('success', 'cour supprimé !');
    }
}
