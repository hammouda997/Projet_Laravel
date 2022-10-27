<?php

namespace App\Http\Controllers;

use App\Models\Module;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
 
    public function index()
    {
        $data = Module::latest()->paginate(5);

        return view('modules.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        $module=Module::all();
        return view('modules.create',compact('module'));
    }

 
    public function store(Request $request)
    {
        $request->validate([  
        'module_name'      =>  'required',
        'module_coef'     =>  'required|integer|not_in:1',
        'module_durée'     =>  'required|integer|not_in:1'
        ]);

  

        $module = new Module;

        $module->module_name = $request->module_name;

        $module->module_coef = $request->module_coef;

        $module->module_durée = $request->module_durée;
      

        $module->save();

        return redirect()->route('modules.index')->with('success', 'module Added successfully.');
    }

   
    public function show(Module $module)
    {
        return view('modules.show', compact('module'));
    }

    
    public function edit(Module $module)
    {
        return view('modules.edit', compact('module'));
    }

    
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'module_name'      =>  'required',
            'module_coef'     =>  'required|integer|min:0',
            'module_durée'     =>  'required|integer|min:0'
        ]);

        


        $module = Module::find($request->hidden_id);

        $module->module_name = $request->module_name;

        $module->module_coef = $request->module_coef;

        $module->module_durée = $request->module_durée;

        $module->save();

        return redirect()->route('modules.index')->with('success', 'module Data has been updated successfully');
    }

   
    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('modules.index')->with('success', 'module Data deleted successfully');
    }
    
}