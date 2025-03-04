@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
