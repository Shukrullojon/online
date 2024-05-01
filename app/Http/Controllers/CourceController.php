<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cources = Cource::filter($request->all())->latest()->paginate(20);
        return view('cource.index',[
            'cources' => $cources,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string',
            'info' => 'required|string',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Cource::create($request->all());
        return redirect()->route('cource.index')->with('success','Cource create succesfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cource $cource)
    {
        return view('cource.show',[
            'cource' => $cource,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cource $cource)
    {
        return view('cource.edit',[
            'cource' => $cource,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cource $cource)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string',
            'info' => 'required|string',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $request->request->remove('_method');
        $request->request->remove('_token');
        $cource->update($request->all());
        return redirect()->route('cource.index')->with('success','Cource update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cource $cource)
    {
        $cource->delete();
        return redirect()->route('cource.index')->with('success','Cource delete successfuly');
    }
}
