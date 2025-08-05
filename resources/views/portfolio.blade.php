@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-background">
        <div class="grid-overlay"></div>
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="gradient-text">Jinesh Puglia</span>
                </h1>
                <h2 class="hero-subtitle">Certified Data Engineer & Full Stack Developer</h2>
                <p class="hero-description">
                    Passionate about transforming data into insights and building scalable web applications. 
                    Specialized in Python, Laravel, AWS, and modern web technologies.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        <i class="fas fa-code"></i>
                        View Projects
                    </a>
                    <a href="{{ route('download.resume') }}" class="btn btn-secondary">
                        <i class="fas fa-download"></i>
                        Download Resume
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-card">
                    <div class="profile-avatar">
                        <img src="/placeholder.svg?height=200&width=200" alt="Jinesh Puglia">
                    </div>
                    <div class="status-indicator">
                        <span class="status-dot"></span>
                        Available for work
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">Get to know more about my journey and expertise</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <p>
                    Hi there! I'm Jinesh Puglia, a passionate Data Engineer and Full Stack Developer with over 3+ years of experience 
                    in building scalable web applications and data processing systems. My expertise spans across multiple technologies 
                    including Python, PHP, Laravel, AWS, and modern frontend frameworks.
                </p>
                <p>
                    I specialize in transforming complex data into actionable insights and creating user-friendly web applications 
                    that solve real-world problems. My background in both data engineering and web development allows me to build 
                    comprehensive solutions from data collection to user interface.
                </p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number">3+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Technologies</span>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <div class="tech-stack">
                    <div class="tech-item">Python</div>
                    <div class="tech-item">Laravel</div>
                    <div class="tech-item">AWS</div>
                    <div class="tech-item">MySQL</div>
                    <div class="tech-item">JavaScript</div>
                    <div class="tech-item">Hadoop</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Skills & Expertise</h2>
            <p class="section-subtitle">Technologies and tools I work with</p>
        </div>
        <div class="skills-grid">
            @foreach($skills as $category => $skillList)
            <div class="skill-category">
                <h3 class="category-title">{{ $category }}</h3>
                <div class="skill-items">
                    @foreach($skillList as $skill)
                    <span class="skill-tag">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Professional Experience</h2>
            <p class="section-subtitle">My career journey and achievements</p>
        </div>
        <div class="timeline">
            @foreach($experience as $job)
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="job-title">{{ $job['position'] }}</h3>
                    <h4 class="company-name">{{ $job['company'] }}</h4>
                    <p class="job-duration">{{ $job['duration'] }}</p>
                    <p class="job-location">{{ $job['location'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">Some of my recent work and achievements</p>
        </div>
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <div class="project-image">
                    <img src="/placeholder.svg?height=200&width=300" alt="{{ $project['title'] }}">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p class="project-description">{{ $project['description'] }}</p>
                    <div class="project-tech">
                        @foreach($project['tech'] as $tech)
                        <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's discuss your next project or opportunity</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>jineshpugliya@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Phone</h4>
                        <p>+91 9887398311</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Location</h4>
                        <p>Dehradun, Uttarakhand, India</p>
                    </div>
                </div>
            </div>
            <form class="contact-form" method="POST" action="{{ route('contact') }}">
                @csrf
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                    @error('name')<span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                    @error('email')<span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                    @error('subject')<span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')<span class="error">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
