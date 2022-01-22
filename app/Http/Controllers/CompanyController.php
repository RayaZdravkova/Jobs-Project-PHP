<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function allcompanies(){
        $company = Company::all();
        return view('index.viewcompany', [
            'company'=>$company
        ]);
    }
}
