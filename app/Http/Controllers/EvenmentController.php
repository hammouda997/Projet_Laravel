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
    public function index1()
    {
        $evenments = Evenment::all();
        return view ('EventF')->with('evenments', $evenments);
    }
    
    public function create()
    {
        $club=Club::all();

        return view('evenments.create',compact('club'));
        
    }
  
    public function store(Request $request)
    {
        $request->validate([  
            'description'     =>  'required|string|min:4',
            
            'duree'     =>  'required|integer|not_in:0',
            'date_deb'     =>  'required',
            

            ]);
            $evenment = new Evenment;
    
            $evenment->description = $request->description;
    
            $evenment->date_deb = $request->date_deb;
    
            $evenment->duree = $request->duree;
            
            $evenment->club_id = $request->club_id;

            $evenment->save();
            return redirect()->route('evenment.index')->with('success', 'event Added successfully.'); 
            

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
        return redirect()->route('evenment.index')->with('success', 'event updated successfully.');  
    }
  
    public function destroy($id)
    {
        Evenment::destroy($id);
        return redirect()->route('evenment.index')->with('success', 'event Deleted successfully.');  
    }
}

