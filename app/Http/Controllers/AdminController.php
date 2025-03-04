<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Contact;

class AdminController extends Controller
{
    /**
     * Admin Dashboard
     */
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalProjects = Portfolio::count();
        $totalBlogs = Blog::count();
        $totalContacts = Contact::count();

        return view('admin.dashboard', compact('totalUsers', 'totalProjects', 'totalBlogs', 'totalContacts'));
    }

    /**
     * Manage Users (List all users)
     */
    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Edit User (Show Edit Form)
     */
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update User
     */
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email', 'role'));

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    /**
     * Delete User
     */
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}
