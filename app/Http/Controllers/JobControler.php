<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobControler extends Controller
{
    public function jobs(){
        return view('index.jobs');
    }
}
