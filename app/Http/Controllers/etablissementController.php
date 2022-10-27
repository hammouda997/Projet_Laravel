<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;

class etablissementController extends Controller
{

    public function index()
    {
        $etablissements = Etablissement::all();
        return view ('etablissements.index')->with('etablissements', $etablissements);
    }
    public function index1()
    {
        $etablissements = Etablissement::all();
        return view (('EtablissementF') ,compact('etablissements'));
    }
    public function create()
    {
        return view('etablissements.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Etablissement::create($input);
        return redirect('etablissement')->with('flash_message', 'etablissements Addedd!');  
    }
    
    public function show($id)
    {
        $etablissement = Etablissement::find($id);
        return view('etablissements.show')->with('etablissements', $etablissement);
    }
    
    public function edit($id)
    {
        $etablissement = Etablissement::find($id);
        return view('etablissements.edit')->with('etablissements', $etablissement);
    }
  
    public function update(Request $request, $id)
    {
        $etablissement = Etablissement::find($id);
        $input = $request->all();
        $etablissement->update($input);
        return redirect('etablissement')->with('flash_message', 'etablissement Updated!');  
    }
  
    public function destroy($id)
    {
        Etablissement::destroy($id);
        return redirect('etablissement')->with('flash_message', 'etablissement deleted!');  
    }
}
