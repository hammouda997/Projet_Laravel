<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
 
    public function index()
    {
        $data = Etudiant::latest()->paginate(5);

        return view('etudiants.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        $enseignant=Enseignant::all();
        return view('etudiants.create',compact('enseignant'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'etudiant_name'          =>  'required',
            'etudiant_email'         =>  'required|email|unique:etudiants',
            'etudiant_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->etudiant_image->getClientOriginalExtension();

        request()->etudiant_image->move(public_path('images'), $file_name);

        $etudiant = new Etudiant;

        $etudiant->etudiant_name = $request->etudiant_name;
        $etudiant->etudiant_email = $request->etudiant_email;
        $etudiant->etudiant_gender = $request->etudiant_gender;
        $etudiant->etudiant_image = $file_name;
        $etudiant->enseignant_id = $request->enseignant_id;

        $etudiant->save();

        return redirect()->route('etudiants.index')->with('success', 'etudiant Added successfully.');
    }

   
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    
    public function edit(Etudiant $etudiant)
    {
        $enseignant=Enseignant::all();
        return view('etudiants.edit', compact('etudiant','enseignant'));
    }

    
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'etudiant_name'      =>  'required',
            'etudiant_email'     =>  'required|email',
            'etudiant_image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $etudiant_image = $request->hidden_etudiant_image;

        if($request->etudiant_image != '')
        {
            $etudiant_image = time() . '.' . request()->etudiant_image->getClientOriginalExtension();

            request()->etudiant_image->move(public_path('images'), $etudiant_image);
        }

        $etudiant = Etudiant::find($request->hidden_id);

        $etudiant->etudiant_name = $request->etudiant_name;

        $etudiant->etudiant_email = $request->etudiant_email;

        $etudiant->etudiant_gender = $request->etudiant_gender;

        $etudiant->etudiant_image = $etudiant_image;

        $etudiant->save();

        return redirect()->route('etudiants.index')->with('success', 'etudiant Data has been updated successfully');
    }

   
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')->with('success', 'etudiant Data deleted successfully');
    }
    
}