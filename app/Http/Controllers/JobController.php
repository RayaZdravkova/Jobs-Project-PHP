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
}
