<?php

namespace App\Http\Controllers;
use App\Models\Evenment;
use Illuminate\Http\Request;
use App\Models\Club;

class EvenmentController extends Controller
{

    public function index()
    {
        $evenments = Evenment::all();
        return view ('evenments.index')->with('evenments', $evenments);
    }
    
    public function create()
    {
        $club=Club::all();

        return view('evenments.create',compact('club'));
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        
        Evenment::create($input);
        return redirect('evenment')->with('flash_message', 'evenement Addedd!');  
    }
    
    public function show($id)
    {
        $evenment = Evenment::find($id);
        return view('evenments.show')->with('evenments', $evenment);
    }
    
    public function edit($id)
    {
        $club=Club::all();
        $evenment = Evenment::find($id);
        return view('evenments.edit',compact('club'))->with('evenments', $evenment);
    }
  
    public function update(Request $request, $id)
    {
        $evenment = Evenment::find($id);
        $input = $request->all();
        $evenment->update($input);
        return redirect('evenment')->with('flash_message', 'evenment Updated!');  
    }
  
    public function destroy($id)
    {
        Evenment::destroy($id);
        return redirect('evenment')->with('flash_message', 'Evenment deleted!');  
    }
}

