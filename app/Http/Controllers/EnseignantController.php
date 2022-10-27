<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
 
    public function index()
    {
        $data = Enseignant::latest()->paginate(5);

        return view('enseignants.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index1()
    {
        $data = Enseignant::latest()->paginate(5);

        return view('EnseignantF', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('enseignants.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'enseignant_name'          =>  'required',
            'enseignant_email'         =>  'required|email|unique:enseignants',
            'enseignant_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->enseignant_image->getClientOriginalExtension();

        request()->enseignant_image->move(public_path('images'), $file_name);

        $enseignant = new Enseignant;

        $enseignant->enseignant_name = $request->enseignant_name;
        $enseignant->enseignant_email = $request->enseignant_email;
        $enseignant->classe = $request->classe;
        $enseignant->enseignant_image = $file_name;

        $enseignant->save();

        return redirect()->route('enseignants.index')->with('success', 'enseignant Added successfully.');
    }

   
    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', compact('enseignant'));
    }

    
    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    
    public function update(Request $request, Enseignant $enseignant)
    {
        $request->validate([
            'enseignant_name'      =>  'required',
            'enseignant_email'     =>  'required|email',
            'enseignant_image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $enseignant_image = $request->hidden_enseignant_image;

        if($request->enseignant_image != '')
        {
            $enseignant_image = time() . '.' . request()->enseignant_image->getClientOriginalExtension();

            request()->enseignant_image->move(public_path('images'), $enseignant_image);
        }

        $enseignant = Enseignant::find($request->hidden_id);

        $enseignant->enseignant_name = $request->enseignant_name;

        $enseignant->enseignant_email = $request->enseignant_email;

        $enseignant->classe = $request->classe;

        $enseignant->enseignant_image = $enseignant_image;

        $enseignant->save();

        return redirect()->route('enseignants.index')->with('success', 'enseignant Data has been updated successfully');
    }

   
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();

        return redirect()->route('enseignants.index')->with('success', 'enseignant Data deleted successfully');
    }
    
}