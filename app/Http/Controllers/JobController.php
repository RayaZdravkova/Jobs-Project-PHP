<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function jobs(Request $request)
    {
        $jobs = Job::where([
                ['position', '!=', Null],
                [function ($query) use ($request) {
                    if(($term = $request->term)) {
                        $query->orWhere('position', 'LIKE', '%' . $term . '%')->get();
                    }
                }]
            ])
            ->orderBy("id", "desc")
            ->paginate(10);
            return view('index.job', compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $job=Job::find($id);
        return view('index.viewjob', ['job' => $job]);
    }

  
}
