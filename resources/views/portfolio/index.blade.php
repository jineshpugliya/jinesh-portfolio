@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
    <div class="container mx-auto px-6 z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="mb-6">
                    <h1 class="text-5xl lg:text-7xl font-orbitron font-black mb-4">
                        <span class="gradient-text">Jinesh</span>
                        <br>
                        <span class="text-white">Puglia</span>
                    </h1>
                    <div class="text-xl lg:text-2xl text-gray-300 mb-6 typing-animation font-jetbrains">
                        Certified Data Engineer | Full-Stack Developer
                    </div>
                    <p class="text-lg text-gray-400 mb-8 max-w-2xl">
                        Passionate about transforming data into insights and building scalable web applications. 
                        Based in Dehradun, Uttarakhand, India.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#projects" class="px-8 py-4 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] text-white font-semibold rounded-full hover:shadow-lg hover:shadow-[var(--primary-color)]/50 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-code mr-2"></i>
                        View Projects
                    </a>
                    <a href="{{ route('resume.download') }}" class="px-8 py-4 border-2 border-[var(--primary-color)] text-[var(--primary-color)] font-semibold rounded-full hover:bg-[var(--primary-color)] hover:text-white transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-download mr-2"></i>
                        Download Resume
                    </a>
                </div>
            </div>
            
            <div class="flex justify-center lg:justify-end">
                <div class="relative">
                    <div class="w-80 h-80 rounded-full glass-effect p-8 floating-animation">
                        <div class="w-full h-full rounded-full overflow-hidden border-4 border-[var(--primary-color)] neon-glow">
                            <img src="/placeholder.svg?height=300&width=300" alt="Jinesh Puglia" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] rounded-full flex items-center justify-center text-white font-bold text-lg animate-pulse">
                        3+
                        <span class="text-xs ml-1">YRS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-black bg-opacity-30">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-orbitron font-bold gradient-text mb-4">About Me</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Get to know more about my journey and expertise in data engineering and full-stack development
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <div class="glass-effect rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-6">My Story</h3>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        I'm Jinesh Puglia, a passionate data engineer and software developer with 3+ years of experience 
                        in full-stack development, cloud computing, big data, and more. I love building impactful digital 
                        solutions and constantly learn new technologies.
                    </p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        My expertise spans across multiple domains including web development with Laravel and PHP, 
                        data processing with Python and Hadoop, and cloud infrastructure with AWS. I'm always excited 
                        to take on new challenges and contribute to innovative projects.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[var(--primary-color)]">3+</div>
                            <div class="text-gray-400">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[var(--primary-color)]">50+</div>
                            <div class="text-gray-400">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[var(--primary-color)]">15+</div>
                            <div class="text-gray-400">Technologies</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[var(--primary-color)]">5+</div>
                            <div class="text-gray-400">Certifications</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <div class="glass-effect rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-6">Certifications</h3>
                    <div class="space-y-4">
                        @foreach($certifications as $cert)
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-certificate text-[var(--primary-color)]"></i>
                            <span class="text-gray-300">{{ $cert }}</span>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-white mb-4">Education</h4>
                        <div class="space-y-3">
                            <div>
                                <div class="font-semibold text-[var(--primary-color)]">Post Graduate Diploma in Data Engineering</div>
                                <div class="text-gray-400">IIIT Bangalore (2023-2024)</div>
                            </div>
                            <div>
                                <div class="font-semibold text-[var(--primary-color)]">BCA, Computer Programming</div>
                                <div class="text-gray-400">MGSU, Bikaner (2019-2021)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-orbitron font-bold gradient-text mb-4">Skills & Expertise</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Technologies and tools I work with to build amazing solutions
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($skills as $category => $skillList)
            <div class="glass-effect rounded-2xl p-8 animate-on-scroll">
                <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-6">{{ $category }}</h3>
                <div class="space-y-4">
                    @foreach($skillList as $skill => $level)
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-white font-medium">{{ $skill }}</span>
                            <span class="text-[var(--primary-color)]">{{ $level }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: {{ $level }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-black bg-opacity-30">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-orbitron font-bold gradient-text mb-4">Professional Experience</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                My career journey and key achievements in the tech industry
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="space-y-8">
                @foreach($experience as $job)
                <div class="timeline-item pl-12 animate-on-scroll">
                    <div class="glass-effect rounded-2xl p-8">
                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-white">{{ $job['position'] }}</h3>
                                <h4 class="text-xl text-[var(--primary-color)] font-semibold">{{ $job['company'] }}</h4>
                            </div>
                            <div class="text-right">
                                <div class="text-gray-300 font-medium">{{ $job['duration'] }}</div>
                                <div class="text-gray-400">{{ $job['location'] }}</div>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4">{{ $job['description'] }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($job['technologies'] as $tech)
                            <span class="px-3 py-1 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] text-white text-sm rounded-full">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-orbitron font-bold gradient-text mb-4">Featured Projects</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Some of my recent work and achievements that showcase my skills
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="project-card glass-effect rounded-2xl overflow-hidden animate-on-scroll">
                <div class="relative overflow-hidden">
                    <img src="{{ $project->image ?? '/placeholder.svg?height=200&width=400' }}" 
                         alt="{{ $project->title }}" 
                         class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="flex space-x-4">
                            @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" class="w-12 h-12 bg-[var(--primary-color)] rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ $project->title }}</h3>
                    <p class="text-gray-300 mb-4">{{ $project->description }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project->technologies as $tech)
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @empty
            <!-- Default projects if none exist -->
            <div class="project-card glass-effect rounded-2xl overflow-hidden animate-on-scroll">
                <div class="relative overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=400" alt="Data Engineering Pipeline" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Data Engineering Pipeline</h3>
                    <p class="text-gray-300 mb-4">Built scalable data processing pipeline using Python, Hadoop, and AWS for real-time analytics.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">Python</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">Hadoop</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">AWS</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card glass-effect rounded-2xl overflow-hidden animate-on-scroll">
                <div class="relative overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=400" alt="Laravel Web App" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">E-commerce Platform</h3>
                    <p class="text-gray-300 mb-4">Full-stack e-commerce solution with Laravel backend, payment integration, and admin dashboard.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">Laravel</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">PHP</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">MySQL</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card glass-effect rounded-2xl overflow-hidden animate-on-scroll">
                <div class="relative overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=400" alt="API Integration" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">API Integration Platform</h3>
                    <p class="text-gray-300 mb-4">Integrated multiple third-party APIs for seamless data exchange and automated workflows.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">PHP</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">REST API</span>
                        <span class="px-2 py-1 bg-[var(--primary-color)] bg-opacity-20 text-[var(--primary-color)] text-xs rounded-full border border-[var(--primary-color)]">JavaScript</span>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        
        <div class="text-center mt-12">
            <a href="#contact" class="px-8 py-4 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] text-white font-semibold rounded-full hover:shadow-lg hover:shadow-[var(--primary-color)]/50 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-envelope mr-2"></i>
                Let's Work Together
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-black bg-opacity-30">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-orbitron font-bold gradient-text mb-4">Get In Touch</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Ready to start your next project? Let's discuss how we can work together
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <div class="animate-on-scroll">
                <div class="glass-effect rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <div class="text-white font-semibold">Email</div>
                                <div class="text-gray-300">jineshpugliya@gmail.com</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <div class="text-white font-semibold">Phone</div>
                                <div class="text-gray-300">+91 98873 98311</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <div class="text-white font-semibold">Location</div>
                                <div class="text-gray-300">Dehradun, Uttarakhand, India</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <i class="fab fa-linkedin text-white"></i>
                            </div>
                            <div>
                                <div class="text-white font-semibold">LinkedIn</div>
                                <div class="text-gray-300">linkedin.com/in/jinesh-puglia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <form action="{{ route('contact.submit') }}" method="POST" class="glass-effect rounded-2xl p-8">
                    @csrf
                    
                    @if(session('success'))
                    <div class="mb-6 p-4 bg-green-500 bg-opacity-20 border border-green-500 rounded-lg text-green-300">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    @if(session('error'))
                    <div class="mb-6 p-4 bg-red-500 bg-opacity-20 border border-red-500 rounded-lg text-red-300">
                        {{ session('error') }}
                    </div>
                    @endif
                    
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-white font-semibold mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-3 bg-black bg-opacity-50 border border-gray-600 rounded-lg text-white focus:border-[var(--primary-color)] focus:outline-none transition-colors duration-300">
                            @error('name')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="block text-white font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-3 bg-black bg-opacity-50 border border-gray-600 rounded-lg text-white focus:border-[var(--primary-color)] focus:outline-none transition-colors duration-300">
                            @error('email')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-white font-semibold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 bg-black bg-opacity-50 border border-gray-600 rounded-lg text-white focus:border-[var(--primary-color)] focus:outline-none transition-colors duration-300 resize-none">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] text-white font-semibold rounded-full hover:shadow-lg hover:shadow-[var(--primary-color)]/50 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush
