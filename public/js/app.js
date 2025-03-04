document.addEventListener("DOMContentLoaded", function() {
    let titleText = "Jinu's Gamer Portfolio 🚀";
    let index = 0;

    function typeEffect() {
        document.title = titleText.substring(0, index);
        index++;
        if (index > titleText.length) {
            index = 0;
        }
        setTimeout(typeEffect, 200);
    }
    typeEffect();
});

// Add hover effects to navigation links
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('mouseover', function() {
        this.style.textShadow = "0 0 15px #ff00ff";
    });
    link.addEventListener('mouseout', function() {
        this.style.textShadow = "none";
    });
});

// Add click effect to buttons
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function() {
        this.style.transform = "scale(0.95)";
        setTimeout(() => {
            this.style.transform = "scale(1)";
        }, 200);
    });
});
