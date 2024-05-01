<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $lessons = Lesson::filter($request->all())->latest()->paginate(20);
        $cources = Cource::latest()->get()->pluck('name','id');
        return view('lesson.index',[
            'lessons' => $lessons,
            'cources' => $cources,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cources = Cource::latest()->get()->pluck('name','id');
        return view('lesson.create',[
            'cources' => $cources,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string',
            'info' => 'required|string',
            'cource_id' => 'required',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Lesson::create($request->all());
        return redirect()->route('lesson.index')->with('success','Lesson create succesfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return view('lesson.show',[
            'lesson' => $lesson,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        $cources = Cource::latest()->get()->pluck('name','id');
        return view('lesson.edit',[
            'lesson' => $lesson,
            'cources' => $cources,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string',
            'info' => 'required|string',
            'cource_id' => 'required',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $request->request->remove('_method');
        $request->request->remove('_token');
        $lesson->update($request->all());
        return redirect()->route('lesson.index')->with('success','Lesson update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lesson.index')->with('success','Lesson delete successfuly');
    }
}
