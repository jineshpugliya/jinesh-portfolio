<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    // Show portfolio homepage
    public function index()
    {
        $projects = Project::latest()->get();
        return view('home', compact('projects'));
    }

    // Admin: Show all projects
    public function adminIndex()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects', compact('projects'));
    }

    // Store a new project
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;

        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->save();

        return redirect()->route('admin.projects')->with('success', 'Project added successfully!');
    }

    // Update an existing project
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->only('title', 'description'));

        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('projects', 'public');
            $project->save();
        }

        return redirect()->route('admin.projects')->with('success', 'Project updated successfully!');
    }

    // Delete a project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully!');
    }
}
