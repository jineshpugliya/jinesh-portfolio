@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Users: {{ $totalUsers }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Projects: {{ $totalProjects }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Blogs: {{ $totalBlogs }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Contacts: {{ $totalContacts }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
