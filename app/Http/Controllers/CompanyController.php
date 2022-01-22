<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function allcompanies(){
        $company = Company::all();
        return view('index.viewcompany', [
            'company'=>$company
        ]);
    }
}
