@extends('layouts.app')
@section('content')
<h1 class="mb-4">Projects</h1>
<div class="row">
    @foreach($projects as $project)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection