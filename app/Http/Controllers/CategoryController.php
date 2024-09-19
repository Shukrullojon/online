<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);
        return view('category.index',[
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:250',
            'price' => 'required|string|max:250',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Category::create($request->all());
        return redirect()->route('category.index')->with('success','Категория успешно создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:250',
            'price' => 'required|string|max:250',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $category->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('category.index')->with('success','Категория изменена успешно');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success','Категория удален успешно');
    }
}
