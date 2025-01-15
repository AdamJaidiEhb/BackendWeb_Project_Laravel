<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    public function manageUsers()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

public function makeAdmin(User $user)
{
    $user->update(['role' => 'admin']);
    return back()->with('success', 'Gebruiker is nu een admin.');
}

}
