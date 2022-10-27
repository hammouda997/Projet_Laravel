<?php

namespace App\Http\Controllers;
use App\Models\Module;

use Illuminate\Http\Request;
use App\Models\Examen;
class ExamenController extends Controller
{
    public function index()
    {
        $data = Examen::latest()->paginate(5);

        return view('examens.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {$module=Module::all();
        return view('examens.create',compact('module'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'examen_name'          =>  'required|min:4',
            'examen_date'         => 'date' ,
            'examen_durée'        =>  'required|integer|min:1',
            'examen_coef'         =>  'required|integer|min:1',
        ]);

      
        $examen = new Examen;

        $examen->examen_name = $request->examen_name;
        $examen->examen_date = $request->examen_date ;
        $examen->examen_durée = $request->examen_durée;
        $examen->examen_coef = $request->examen_coef;
        $examen->module_id = $request->module_id;
        
        $examen->save();

        return redirect()->route('examens.index')->with('success', 'examen Added successfully.');
    }

   
    public function show(Examen $examen)
    {
        return view('examens.show', compact('examen'));
    }

    
    public function edit(Examen $examen)
    {
        return view('examens.edit', compact('examen'));
    }

    
    public function update(Request $request, Examen $examen)
    {
        $request->validate([
            'examen_name'          =>  'required|min:8',
            'examen_date'         => 'date ' ,
            'examen_durée'        =>  'required',
            'examen_coef'         =>  'required',
         ]);

      

        $examen = Examen::find($request->hidden_id);

        $examen->examen_name = $request->examen_name;

        $examen->examen_date = $request->examen_date;

        $examen->examen_durée = $request->examen_durée;

        $examen->examen_coef = $request->examen_coef;
        
        $examen->save();

        return redirect()->route('examens.index')->with('success', 'examen Data has been updated successfully');
    }

   
    public function destroy(Examen $examen)
    {
        $examen->delete();

        return redirect()->route('examens.index')->with('success', 'examen Data deleted successfully');
    }
    
}
