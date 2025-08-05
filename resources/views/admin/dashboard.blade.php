@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white mb-2">Admin Dashboard</h1>
        <p class="text-gray-400">Manage your portfolio content</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Projects</p>
                    <p class="text-3xl font-bold text-white">{{ $projectsCount }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-project-diagram text-white text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Featured Projects</p>
                    <p class="text-3xl font-bold text-white">{{ $featuredProjects }}</p>
                </div>
                <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-star text-white text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Articles</p>
                    <p class="text-3xl font-bold text-white">{{ $articlesCount }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Published Articles</p>
                    <p class="text-3xl font-bold text-white">{{ $publishedArticles }}</p>
                </div>
                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-eye text-white text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid md:grid-cols-2 gap-6">
        <div class="glass-effect rounded-xl p-6">
            <h2 class="text-xl font-bold text-white mb-4">Quick Actions</h2>
            <div class="space-y-3">
                <a href="{{ route('admin.projects.create') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-colors duration-200">
                    <i class="fas fa-plus text-blue-400"></i>
                    <span class="text-white">Add New Project</span>
                </a>
                <a href="{{ route('admin.articles.create') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-colors duration-200">
                    <i class="fas fa-pen text-green-400"></i>
                    <span class="text-white">Write New Article</span>
                </a>
                <a href="{{ route('home') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-colors duration-200">
                    <i class="fas fa-eye text-purple-400"></i>
                    <span class="text-white">View Portfolio</span>
                </a>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <h2 class="text-xl font-bold text-white mb-4">Recent Activity</h2>
            <div class="space-y-3 text-gray-300">
                <p class="text-sm">Welcome to your portfolio admin panel!</p>
                <p class="text-sm">You can manage your projects and articles from here.</p>
                <p class="text-sm">Use the navigation menu to access different sections.</p>
            </div>
        </div>
    </div>
</div>
@endsection
