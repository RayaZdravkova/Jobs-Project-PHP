<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function jobs(){
        $jobs = Job::all();
        return view('index.job', [
            'jobs'=>$jobs
        ]);
    }

    public function show($id)
    {
        $job=Job::find($id);
        return view('index.viewjob', ['job' => $job]);
    }

    public function job(Request $request)
    {
        $jobs = Job::where([
                ['name', '!=', Null],
                [function ($query) use ($request) {
                    if(($term = $request->term)) {
                        $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                    }
                }]
            ])
            ->orderBy("id", "desc")
            ->paginate(10);
            return view('index.job', compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
