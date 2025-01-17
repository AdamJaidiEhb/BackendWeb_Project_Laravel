<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\News;

class AdminController extends Controller
{
    public function dashboard()
    {
        $usersCount = User::count();
        $newsCount = News::count();

        return view('admin.dashboard', compact('usersCount', 'newsCount'));
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function makeAdmin(User $user)
    {
        $user->update(['role' => 'admin']);
        return redirect()->route('admin.users')->with('success', 'Utilisateur promu admin.');
    }
}
