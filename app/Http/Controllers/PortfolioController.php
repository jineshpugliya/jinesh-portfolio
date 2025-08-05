<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\Article;
use App\Mail\ContactMail;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = [
            'Programming Languages' => [
                'Python' => 90,
                'PHP' => 85,
                'JavaScript' => 80,
                'SQL' => 85,
                'HTML/CSS' => 90,
                'Java' => 75
            ],
            'Frameworks & Libraries' => [
                'Laravel' => 85,
                'CakePHP' => 80,
                'jQuery' => 75,
                'Bootstrap' => 85,
                'Tailwind CSS' => 80
            ],
            'Cloud & Big Data' => [
                'AWS' => 80,
                'Hadoop' => 75,
                'MapReduce' => 70,
                'Hive' => 75,
                'MySQL' => 85,
                'NoSQL' => 70
            ],
            'Tools & Technologies' => [
                'Git' => 85,
                'BitBucket' => 80,
                'Jira' => 75,
                'Docker' => 70,
                'Linux' => 75
            ]
        ];

        $experience = [
            [
                'company' => 'BigShip',
                'position' => 'Software Engineer',
                'duration' => 'June 2024 - Present',
                'location' => 'Dehradun, Uttarakhand, India',
                'description' => 'Leading full-stack development projects and implementing scalable solutions.',
                'technologies' => ['Laravel', 'PHP', 'JavaScript', 'AWS']
            ],
            [
                'company' => 'FirstFiling',
                'position' => 'Software Engineer',
                'duration' => 'July 2023 - June 2024',
                'location' => 'Rajasthan, India',
                'description' => 'Developed web applications and integrated third-party APIs.',
                'technologies' => ['PHP', 'Laravel', 'MySQL', 'JavaScript']
            ],
            [
                'company' => 'ITTrackNap',
                'position' => 'Software Developer',
                'duration' => 'August 2021 - July 2023',
                'location' => 'Jaipur, Rajasthan, India',
                'description' => 'Built responsive web applications and optimized database performance.',
                'technologies' => ['CakePHP', 'HTML/CSS', 'JavaScript', 'MySQL']
            ],
            [
                'company' => 'Axixa Technologies',
                'position' => 'Web Developer',
                'duration' => 'October 2020 - August 2021',
                'location' => 'Bikaner, Rajasthan, India',
                'description' => 'Developed dynamic websites and implemented responsive designs.',
                'technologies' => ['PHP', 'HTML', 'CSS', 'JavaScript']
            ]
        ];

        $certifications = [
            'Python Programming',
            'Jira Fundamentals Badge',
            'Introduction to Cloud Computing',
            'Java Programming - Complete Beginner to Advance',
            'IIIT-B & Upgrad - Data Engineering & Data Science'
        ];

        $projects = Project::where('featured', true)->latest()->take(6)->get();
        $articles = Article::published()->latest()->take(3)->get();

        return view('portfolio.index', compact('skills', 'experience', 'certifications', 'projects', 'articles'));
    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            Mail::to('jineshpugliya@gmail.com')->send(new ContactMail($request->all()));
            return back()->with('success', 'Thank you for your message! I\'ll get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }

    public function downloadResume()
    {
        $pathToFile = storage_path('app/public/resume/Jinesh_Puglia_Resume.pdf');
        
        if (!file_exists($pathToFile)) {
            abort(404, 'Resume not found');
        }

        return response()->download($pathToFile, 'Jinesh_Puglia_Resume.pdf');
    }

    public function blog()
    {
        $articles = Article::published()->latest()->paginate(9);
        return view('portfolio.blog', compact('articles'));
    }

    public function blogPost($slug)
    {
        $article = Article::where('slug', $slug)->where('published', true)->firstOrFail();
        return view('portfolio.blog-post', compact('article'));
    }

    public function toggleTheme(Request $request)
    {
        $theme = $request->input('theme', 'ai');
        session(['theme' => $theme]);
        return response()->json(['success' => true, 'theme' => $theme]);
    }
}
