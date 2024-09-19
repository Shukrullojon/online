<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::latest()->paginate(20);
        return view('work.index',[
            'works' => $works,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get()->pluck('name','id');
        return view('work.create',[
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:250',
            'work_type' => 'required|integer',
            'experence' => 'required|string|max:250',
            'salary' => 'required|string|max:250',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Work::create($request->all());
        return redirect()->route('work.index')->with('success','Работа успешно создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        return view('work.show', [
            'work' => $work
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        $categories = Category::get()->pluck('name','id');
        return view('work.edit', [
            'work' => $work,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:250',
            'work_type' => 'required|integer',
            'experence' => 'required|string|max:250',
            'salary' => 'required|string|max:250',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $work->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'work_type' => $request->work_type,
            'experence' => $request->experence,
            'salary' => $request->salary,
            'info' => $request->info,
            'requir' => $request->requir,
            'offer' => $request->offer,
        ]);
        return redirect()->route('work.index')->with('success','Работа изменена успешно');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index')->with('success','Работа удален успешно');
    }
}
