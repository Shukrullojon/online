<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submits = Submit::latest()->paginate(20);
        return view('submit.index',[
            'submits' => $submits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submit $submit)
    {
        return view('submit.edit', [
            'submit' => $submit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submit $submit)
    {
        $submit->update([
            'status' => $request->status,
        ]);
        return redirect()->route('submit.index')->with('success','Приложения изменена успешно');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
