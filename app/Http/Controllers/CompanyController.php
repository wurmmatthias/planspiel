<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    // Show form for creating a new company
    public function create()
    {
        // Prevent admins from creating a company
        //if (Auth::user()->isAdmin()) {
        //    abort(403, 'Admins cannot create a company.');
        //}

        return view('companies.create');
    }

    // Handle company creation
    public function store(Request $request)
    {
        // Prevent admins from creating a company if needed
        //if (Auth::user()->isAdmin()) {
        //    abort(403, 'Admins cannot create a company.');
        //}

        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo'        => 'required|string', // This will store the selected icon identifier
        ]);

        $company = Company::create([
            'name'        => $data['name'],
            'owner_id'    => Auth::id(),
            'description' => $data['description'] ?? null,
            'logo'        => $data['logo'],
        ]);

        // Assign the newly created company to the user
        $user = Auth::user();
        $user->company()->associate($company);
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Company created successfully!');
    }

    // Show form to join an existing company
    public function joinForm()
    {
        //if (Auth::user()->isAdmin()) {
        //    abort(403, 'Admins cannot join a company.');
        //}

        // For example, list available companies or show a join code form.
        $companies = Company::all();
        return view('companies.join', compact('companies'));
    }

    // Handle joining a company (could be via join code or selection)
    public function join(Request $request)
    {
        //if (Auth::user()->isAdmin()) {
        //    abort(403, 'Admins cannot join a company.');
        //}

        $data = $request->validate([
            'company_id' => 'required|exists:companies,id',
        ]);

        $user = Auth::user();
        $user->company_id = $data['company_id'];
        $user->save();

        return redirect()->route('dashboard')->with('success', 'You have joined the company!');
    }

    public function leave(Request $request)
    {
        $user = Auth::user();

        if (!$user->company) {
            return redirect()->back()->with('error', 'You are not part of any company.');
        }

        // Remove the company association for debugging
        $user->company_id = null;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'You have left your company.');
    }
}
