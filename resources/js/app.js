import "./bootstrap"
import Alpine from "alpinejs"
import AOS from "aos"
import "aos/dist/aos.css"
import Typed from "typed.js"

window.Alpine = Alpine
Alpine.start()

// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
})

// Typing animation for hero section
document.addEventListener("DOMContentLoaded", () => {
    const typedElement = document.querySelector(".typing-animation")
    if (typedElement) {
        new Typed(typedElement, {
            strings: [
                "Certified Data Engineer",
                "Full-Stack Developer",
                "Cloud Computing Expert",
                "Python Specialist",
                "Laravel Developer",
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true,
            showCursor: true,
            cursorChar: "|",
        })
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault()
            const target = document.querySelector(this.getAttribute("href"))
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                })
            }
        })
    })

    // Navbar background change on scroll
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector("nav")
        if (window.scrollY > 50) {
            navbar.classList.add("backdrop-blur-lg", "bg-black", "bg-opacity-80")
        } else {
            navbar.classList.remove("backdrop-blur-lg", "bg-black", "bg-opacity-80")
        }
    })

    // Skill bars animation
    const skillBars = document.querySelectorAll(".skill-progress")
    const observerOptions = {
        threshold: 0.5,
        rootMargin: "0px 0px -100px 0px",
    }

    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const progressBar = entry.target
                const width = progressBar.style.width
                progressBar.style.width = "0%"
                setTimeout(() => {
                    progressBar.style.width = width
                }, 200)
            }
        })
    }, observerOptions)

    skillBars.forEach((bar) => {
        skillObserver.observe(bar)
    })

    // Contact form enhancement
    const contactForm = document.querySelector("#contact form")
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            const submitBtn = this.querySelector('button[type="submit"]')
            const originalText = submitBtn.innerHTML

            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...'
            submitBtn.disabled = true

            // Re-enable after 3 seconds (form will redirect anyway)
            setTimeout(() => {
                submitBtn.innerHTML = originalText
                submitBtn.disabled = false
            }, 3000)
        })
    }

    // Project cards hover effect
    const projectCards = document.querySelectorAll(".project-card")
    projectCards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-10px) scale(1.02)"
        })

        card.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0) scale(1)"
        })
    })

    // Theme toggle functionality
    const themeToggle = document.getElementById("theme-toggle")
    if (themeToggle) {
        themeToggle.addEventListener("click", function () {
            const html = document.documentElement
            const currentTheme = html.classList.contains("ai-theme") ? "ai" : "gamer"
            const newTheme = currentTheme === "ai" ? "gamer" : "ai"

            html.classList.remove("ai-theme", "gamer-theme")
            html.classList.add(newTheme + "-theme")

            // Add visual feedback
            this.style.transform = "translateY(-50%) scale(1.2)"
            setTimeout(() => {
                this.style.transform = "translateY(-50%) scale(1)"
            }, 200)

            // Save theme preference
            fetch("/toggle-theme", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.getAttribute("content") || "",
                },
                body: JSON.stringify({ theme: newTheme }),
            }).catch(console.error)
        })
    }

    // Add CSRF token to meta tag if not present
    if (!document.querySelector('meta[name="csrf-token"]')) {
        const meta = document.createElement("meta")
        meta.name = "csrf-token"
        meta.content = "{{ csrf_token() }}"
        document.head.appendChild(meta)
    }
})

// Particle system for background
class ParticleSystem {
    constructor() {
        this.particles = []
        this.canvas = null
        this.ctx = null
        this.init()
    }

    init() {
        this.canvas = document.createElement("canvas")
        this.canvas.style.position = "fixed"
        this.canvas.style.top = "0"
        this.canvas.style.left = "0"
        this.canvas.style.width = "100%"
        this.canvas.style.height = "100%"
        this.canvas.style.pointerEvents = "none"
        this.canvas.style.zIndex = "-1"
        document.body.appendChild(this.canvas)

        this.ctx = this.canvas.getContext("2d")
        this.resize()
        this.createParticles()
        this.animate()

        window.addEventListener("resize", () => this.resize())
    }

    resize() {
        this.canvas.width = window.innerWidth
        this.canvas.height = window.innerHeight
    }

    createParticles() {
        const particleCount = Math.floor((window.innerWidth * window.innerHeight) / 15000)

        for (let i = 0; i < particleCount; i++) {
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                size: Math.random() * 2 + 1,
                opacity: Math.random() * 0.5 + 0.2,
            })
        }
    }

    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height)

        this.particles.forEach((particle) => {
            particle.x += particle.vx
            particle.y += particle.vy

            if (particle.x < 0 || particle.x > this.canvas.width) particle.vx *= -1
            if (particle.y < 0 || particle.y > this.canvas.height) particle.vy *= -1

            this.ctx.beginPath()
            this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2)
            this.ctx.fillStyle = `rgba(102, 126, 234, ${particle.opacity})`
            this.ctx.fill()
        })

        requestAnimationFrame(() => this.animate())
    }
}

// Initialize particle system
new ParticleSystem()
