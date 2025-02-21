<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    public function index()
    {
        // Fetch all companies along with their owner (assuming a relationship is defined)
        $companies = Company::with('owner')->get();
        return view('admin.companies', compact('companies'));
    }
}
