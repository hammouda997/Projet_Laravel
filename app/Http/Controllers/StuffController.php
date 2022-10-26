<?php

namespace App\Http\Controllers;
use App\Models\Stuff;

use App\Models\Etablissement;

use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function index(){
        
    $stuffs = Stuff::all();
    return view ('stuffs.index')->with('stuffs', $stuffs);
}

public function create()
{
    $etablissement=Etablissement::all();

    return view('stuffs.create',compact('etablissement'));
}

public function store(Request $request)
{
    $input = $request->all();
    
    Stuff::create($input);
    return redirect('stuff')->with('flash_message', 'stuffs Addedd!');  
}

public function show($id)
{
    $stuff = Stuff::find($id);
    return view('stuffs.show')->with('stuffs', $stuff);
}

public function edit($id)
{
    $etablissement=Etablissement::all();
    $stuff = Stuff::find($id);
    return view('stuffs.edit',compact('etablissement'))->with('stuffs', $stuff);
}

public function update(Request $request, $id)
{
    $stuff = Stuff::find($id);
    $input = $request->all();
    $stuff->update($input);
    return redirect('stuff')->with('flash_message', 'stuffs Updated!');  
}

public function destroy($id)
{
    Stuff::destroy($id);
    return redirect('stuff')->with('flash_message', 'stuff deleted!');  
}
}

