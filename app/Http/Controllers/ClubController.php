<?php

namespace App\Http\Controllers;
use App\Models\Club;


use Illuminate\Http\Request;

class ClubController extends Controller
{

    public function index()
    {
        $clubs = Club::all();
        return view ('clubs.index')->with('clubs', $clubs);
    }
    public function index1()
    {
        $clubs = Club::all();
        return view ('clubF')->with('clubs', $clubs);
    }
    
    public function create()
    {
        return view('clubs.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([  
            'nomClub'      =>  'required',
            'adresse'     =>  'required|string|min:5',
            'nbrpart'     =>  'required|integer|not_in:0'
            
            ]);
    
      
    
            $club = new Club;
    
            $club->nomClub = $request->nomClub;
    
            $club->adresse = $request->adresse;
    
            $club->nbrpart = $request->nbrpart;
         
          
    
            $club->save();
    
        return redirect()->route('club.index')->with('success', 'Club Added successfully.');  
    }
    
    public function show($id)
    {
        $club = Club::find($id);
        return view('clubs.show')->with('clubs', $club);
    }
    
    public function edit($id)
    {
        $club = Club::find($id);
        return view('clubs.edit')->with('clubs', $club);
    }
  
    public function update(Request $request, $id)
    {
        $club = Club::find($id);
        $input = $request->all();
        $club->update($input);
        return redirect()->route('club.index')->with('success', 'Club updated successfully.');  
    }
  
    public function destroy($id)
    {
        Club::destroy($id);
        return redirect()->route('club.index')->with('success', 'Club deleted successfully.');  
    }
}
