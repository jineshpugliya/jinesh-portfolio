<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'ai') }}-theme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Jinesh Puglia - Certified Data Engineer & Full-Stack Developer from Dehradun, India. Specializing in Python, Laravel, AWS, and modern web technologies.">
    <meta name="keywords" content="Data Engineer, Full Stack Developer, Python, Laravel, PHP, AWS, Web Development">
    <meta name="author" content="Jinesh Puglia">

    <title>@yield('title', 'Jinesh Puglia - Data Engineer & Full Stack Developer')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <style>
        :root {
            /* AI Theme Colors */
            --ai-primary: #00d4ff;
            --ai-secondary: #0099cc;
            --ai-accent: #00ffff;
            --ai-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --ai-bg-gradient: linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);

            /* Gamer Theme Colors */
            --gamer-primary: #ff6b35;
            --gamer-secondary: #f7931e;
            --gamer-accent: #ffff00;
            --gamer-gradient: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            --gamer-bg-gradient: linear-gradient(135deg, #0f0f0f 0%, #1a0f1a 50%, #2d1b2d 100%);
        }

        .ai-theme {
            --primary-color: var(--ai-primary);
            --secondary-color: var(--ai-secondary);
            --accent-color: var(--ai-accent);
            --gradient: var(--ai-gradient);
            --bg-gradient: var(--ai-bg-gradient);
        }

        .gamer-theme {
            --primary-color: var(--gamer-primary);
            --secondary-color: var(--gamer-secondary);
            --accent-color: var(--gamer-accent);
            --gradient: var(--gamer-gradient);
            --bg-gradient: var(--gamer-bg-gradient);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            color: #ffffff;
        }

        .font-orbitron {
            font-family: 'Orbitron', monospace;
        }

        .font-jetbrains {
            font-family: 'JetBrains Mono', monospace;
        }

        .gradient-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .neon-glow {
            box-shadow: 0 0 20px var(--primary-color);
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .typing-animation {
            overflow: hidden;
            border-right: 2px solid var(--primary-color);
            white-space: nowrap;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: var(--primary-color);
            }
        }

        .skill-bar {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .skill-progress {
            height: 8px;
            background: var(--gradient);
            border-radius: 10px;
            transition: width 2s ease-in-out;
        }

        .project-card {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }

        .project-card:hover {
            transform: translateY(-10px) rotateX(5deg);
        }

        .timeline-item {
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -20px;
            top: 0;
            width: 2px;
            height: 100%;
            background: var(--gradient);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: -26px;
            top: 20px;
            width: 14px;
            height: 14px;
            background: var(--primary-color);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--primary-color);
        }

        .particle-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--primary-color);
            border-radius: 50%;
            animation: particle-float 10s linear infinite;
        }

        @keyframes particle-float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) translateX(100px);
                opacity: 0;
            }
        }

        .theme-toggle {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            z-index: 1000;
            background: var(--gradient);
            border-radius: 50px;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 0 20px var(--primary-color);
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
    </style>

    @stack('styles')
</head>

<body class="overflow-x-hidden">
    <!-- Particle Background -->
    <div class="particle-bg" id="particle-bg"></div>

    <!-- Theme Toggle -->
    <div class="theme-toggle" id="theme-toggle">
        <i class="fas fa-palette text-white text-xl"></i>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-effect">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-orbitron font-bold gradient-text">
                    JP
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Home</a>
                    <a href="#about"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">About</a>
                    <a href="#skills"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Skills</a>
                    <a href="#experience"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Experience</a>
                    <a href="#projects"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Projects</a>
                    <a href="#contact"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="#home"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Home</a>
                    <a href="#about"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">About</a>
                    <a href="#skills"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Skills</a>
                    <a href="#experience"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Experience</a>
                    <a href="#projects"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Projects</a>
                    <a href="#contact"
                        class="nav-link text-white hover:text-[var(--primary-color)] transition-colors duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-50 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-orbitron font-bold gradient-text mb-4">Jinesh Puglia</h3>
                    <p class="text-gray-300 mb-4">Certified Data Engineer & Full-Stack Developer passionate about
                        building innovative solutions.</p>
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/jinesh-puglia" target="_blank"
                            class="text-white hover:text-[var(--primary-color)] transition-colors duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="mailto:jineshpugliya@gmail.com"
                            class="text-white hover:text-[var(--primary-color)] transition-colors duration-300">
                            <i class="fas fa-envelope text-2xl"></i>
                        </a>
                        <a href="tel:+919887398311"
                            class="text-white hover:text-[var(--primary-color)] transition-colors duration-300">
                            <i class="fas fa-phone text-2xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4 text-[var(--primary-color)]">Quick Links</h4>
                    <div class="space-y-2">
                        <a href="#about"
                            class="block text-gray-300 hover:text-white transition-colors duration-300">About Me</a>
                        <a href="#skills"
                            class="block text-gray-300 hover:text-white transition-colors duration-300">Skills</a>
                        <a href="#projects"
                            class="block text-gray-300 hover:text-white transition-colors duration-300">Projects</a>
                        <a href="{{ route('blog') }}"
                            class="block text-gray-300 hover:text-white transition-colors duration-300">Blog</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4 text-[var(--primary-color)]">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-envelope mr-2"></i> jineshpugliya@gmail.com</p>
                        <p><i class="fas fa-phone mr-2"></i> +91 98873 98311</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Bikaner, Rajasthan, India</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} Jinesh Puglia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Theme toggle functionality
        document.getElementById('theme-toggle').addEventListener('click', function() {
            const currentTheme = document.documentElement.classList.contains('ai-theme') ? 'ai' : 'gamer';
            const newTheme = currentTheme === 'ai' ? 'gamer' : 'ai';

            document.documentElement.classList.remove('ai-theme', 'gamer-theme');
            document.documentElement.classList.add(newTheme + '-theme');

            // Save theme preference
            fetch('/toggle-theme', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    theme: newTheme
                })
            });
        });

        // Particle background animation
        function createParticles() {
            const particleBg = document.getElementById('particle-bg');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particleBg.appendChild(particle);
            }
        }

        // Initialize particles
        createParticles();

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            animateElements.forEach(el => observer.observe(el));
        });
    </script>

    @stack('scripts')
</body>

</html>
