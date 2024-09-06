<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{

    public function create(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        if ($validatedData->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validatedData->errors()
            ], 200);
        }
        Job::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Job create successfully'
        ], 201);
    }

    public function list(Request $request)
    {
        $jobs = Job::select("id","title","description","price","address")->get();
        return response()->json([
            'status' => true,
            'jobs' => $jobs
        ], 200);
    }

    public function delete($id)
    {
        $job = Job::find($id);
        if (empty($job)){
            return response()->json([
                'status' => false,
                'message' => "Job not found"
            ], 404);
        }
        $job->delete();
        return response()->json([
            'status' => true,
            'message' => "Job delete successfuly"
        ], 200);
    }
}
