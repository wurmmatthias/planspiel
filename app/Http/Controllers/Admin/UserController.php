<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users (or you can use pagination if you have many users)
        $users = User::all();

        // Pass the users to the view
        return view('admin.users', compact('users'));
    }

    public function promote($id)
    {
        $user = User::findOrFail($id);
        // Update the role to 'admin'
        $user->role = 'admin';
        $user->save();

        return redirect()->back()->with('success', 'User promoted to admin successfully.');
    }
}
