<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'Data Engineering Pipeline',
                'description' => 'Built a scalable data processing pipeline using Python, Hadoop, and AWS for real-time analytics and data transformation. Handles millions of records daily with automated monitoring and error handling.',
                'technologies' => ['Python', 'Hadoop', 'AWS', 'Apache Spark', 'MySQL'],
                'featured' => true,
                'order' => 1
            ],
            [
                'title' => 'E-commerce Platform',
                'description' => 'Full-stack e-commerce solution with Laravel backend, payment gateway integration, inventory management, and responsive admin dashboard. Supports multiple payment methods and real-time notifications.',
                'technologies' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'Stripe API'],
                'featured' => true,
                'order' => 2
            ],
            [
                'title' => 'API Integration Platform',
                'description' => 'Integrated multiple third-party APIs for seamless data exchange and automated workflows. Features include API rate limiting, caching, and comprehensive logging for monitoring.',
                'technologies' => ['PHP', 'CakePHP', 'REST APIs', 'Redis', 'JSON'],
                'featured' => true,
                'order' => 3
            ],
            [
                'title' => 'Business Intelligence Dashboard',
                'description' => 'Interactive dashboard for business analytics with real-time data visualization, custom reporting, and automated insights generation using machine learning algorithms.',
                'technologies' => ['Python', 'Django', 'D3.js', 'PostgreSQL', 'Machine Learning'],
                'featured' => true,
                'order' => 4
            ],
            [
                'title' => 'Cloud Migration Project',
                'description' => 'Successfully migrated legacy on-premise applications to AWS cloud infrastructure with improved scalability, security, and cost optimization. Implemented CI/CD pipelines and monitoring.',
                'technologies' => ['AWS', 'Docker', 'Kubernetes', 'Jenkins', 'Terraform'],
                'featured' => true,
                'order' => 5
            ],
            [
                'title' => 'Real-time Chat Application',
                'description' => 'Built a real-time messaging application with WebSocket support, file sharing, group chats, and push notifications. Features end-to-end encryption and message history.',
                'technologies' => ['Node.js', 'Socket.io', 'React', 'MongoDB', 'WebRTC'],
                'featured' => true,
                'order' => 6
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
