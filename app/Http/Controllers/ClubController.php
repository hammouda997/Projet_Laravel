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
    
    public function create()
    {
        return view('clubs.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Club::create($input);
        return redirect('club')->with('flash_message', 'club Addedd!');  
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
        return redirect('club')->with('flash_message', 'club Updated!');  
    }
  
    public function destroy($id)
    {
        Club::destroy($id);
        return redirect('club')->with('flash_message', 'club deleted!');  
    }
}
