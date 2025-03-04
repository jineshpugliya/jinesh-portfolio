@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
