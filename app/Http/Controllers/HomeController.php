<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Submit;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function front()
    {
        $categories = Category::withCount('works')->latest()->get();
        return view('front',[
            'categories' => $categories,
        ]);
    }

    public function work($id)
    {
        $category = Category::find($id);
        $works = Work::where('category_id',$id)->get();
        return view('work',[
            'works' => $works,
            'category' => $category,
        ]);
    }

    public function resume($id)
    {
        $work = Work::find($id);
        return view('resume',[
            'work' => $work,
        ]);
    }

    public function send_resume(Request $request, $id)
    {
        Submit::create([
            'work_id' => $id,
            'fio' => $request->fio,
            'phone' => $request->phone,
            'tg_username' => $request->tg_username,
            'additional' => $request->additional,
            'status' => 0,
        ]);
        return redirect()->route('front')->with('success','Информация успешно');
    }

    public function index()
    {
        $submits = Submit::select("status", DB::raw("count(id) as cnt"))->groupBy("status")->get()->pluck("cnt","status");
        return view('home',[
            'submits' => $submits,
        ]);
    }

    public function profile()
    {
        return view('profile');
    }
}
