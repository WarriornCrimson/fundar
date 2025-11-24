// Scroll Animation for Sections
document.addEventListener('DOMContentLoaded', function() {
    // Get all sections and elements to animate
    const sectionsToAnimate = document.querySelectorAll('#features, #info-sec, #campaign-section, #testimonials-section, #banner-section, #faqs, #founders, #footer-quote');
    
    // Also animate individual elements within sections
    const elementsToAnimate = document.querySelectorAll('.feat-box, .cs-header, .left-contents .box, .right-contents, .card, .question, .founder-card');
    
    // Add the animate-on-scroll class to sections
    sectionsToAnimate.forEach(section => {
        section.classList.add('animate-on-scroll');
    });
    
    // Add the animate-on-scroll class to elements with stagger
    elementsToAnimate.forEach((element, index) => {
        element.classList.add('animate-on-scroll');
        element.style.transitionDelay = `${index * 0.1}s`;
    });
    
    // Set up progress bars with different percentages
    const progressBars = document.querySelectorAll('.progress-fill');
    const progressPercentages = [75, 60, 45, 80, 90]; // Different percentage for each campaign
    
    progressBars.forEach((bar, index) => {
        const percentage = progressPercentages[index % progressPercentages.length];
        bar.setAttribute('data-progress', percentage);
        bar.style.width = '0%'; // Start at 0
    });
    
    // Intersection Observer options
    const observerOptions = {
        threshold: 0.1, // Trigger when 10% of element is visible
        rootMargin: '0px 0px -50px 0px' // Trigger slightly before element enters viewport
    };
    
    // Create the observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Animate progress bars when their container becomes visible
                if (entry.target.classList.contains('box') || entry.target.classList.contains('right-contents')) {
                    const progressFill = entry.target.querySelector('.progress-fill');
                    if (progressFill && !progressFill.classList.contains('animated')) {
                        animateProgressBar(progressFill);
                        progressFill.classList.add('animated');
                    }
                }
                
                // Optional: stop observing after animation
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all sections
    sectionsToAnimate.forEach(section => {
        observer.observe(section);
    });
    
    // Observe all elements
    elementsToAnimate.forEach(element => {
        observer.observe(element);
    });
    
    // Smoother progress bar animation function
    function animateProgressBar(progressBar) {
        const targetPercentage = parseInt(progressBar.getAttribute('data-progress'));
        let currentPercentage = 0;
        const startTime = performance.now();
        const duration = 2000; // 2 seconds for smoother animation
        
        function easeOutCubic(t) {
            return 1 - Math.pow(1 - t, 3);
        }
        
        function animate(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutCubic(progress);
            
            currentPercentage = easedProgress * targetPercentage;
            progressBar.style.width = currentPercentage + '%';
            
            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                progressBar.style.width = targetPercentage + '%';
            }
        }
        
        requestAnimationFrame(animate);
    }
    
    // Campaign Carousel Functionality
    const leftBtn = document.querySelector('.left-btn');
    const rightBtn = document.querySelector('.right-btn');
    const rightContents = document.querySelector('.right-contents');
    const leftBoxes = document.querySelectorAll('.left-contents .box');
    
    let currentIndex = 4; // Start with Maria (index 4, the 5th box)
    
    // Campaign data
    const campaigns = [
        {
            name: 'Joseph',
            title: 'Help <span>Joseph</span> Continue His Education and Achieve the Dream of Graduating',
            imageClass: 'cs-img1',
            imagePath: '../images/Joseph.png',
            progress: 75
        },
        {
            name: 'Julian',
            title: 'Help <span>Julian</span> Continue His Education and Achieve the Dream of Graduating',
            imageClass: 'cs-img2',
            imagePath: '../images/Julian.png',
            progress: 60
        },
        {
            name: 'Mark',
            title: 'Help <span>Mark</span> Continue His Education and Achieve the Dream of Graduating',
            imageClass: 'cs-img3',
            imagePath: '../images/Mark.png',
            progress: 45
        },
        {
            name: 'Kristine',
            title: 'Help <span>Kristine</span> Continue Her Education and Achieve the Dream of Graduating',
            imageClass: 'cs-img4',
            imagePath: '../images/Kristine.png',
            progress: 80
        },
        {
            name: 'Maria',
            title: 'Help <span>Maria</span> Continue Her Education and Achieve the Dream of Graduating',
            imageClass: 'cs-img5',
            imagePath: '../images/Maria.png',
            progress: 90
        }
    ];
    
    function updateRightContent(index) {
        const campaign = campaigns[index];
        
        // Update title
        const titleElement = rightContents.querySelector('p');
        titleElement.innerHTML = campaign.title;
        
        // Update box image class and name
        const box = rightContents.querySelector('.box');
        
        // Remove all previous image classes
        box.classList.remove('cs-img1', 'cs-img2', 'cs-img3', 'cs-img4', 'cs-img5');
        
        // Add new image class
        box.classList.add(campaign.imageClass);
        
        // Keep the cs-img5 dimensions (always maintain right content size)
        box.style.width = '675px';
        box.style.height = '367px';
        
        // Update background image directly with proper CSS properties
        box.style.backgroundImage = `url('${campaign.imagePath}')`;
        box.style.backgroundSize = 'cover';
        box.style.backgroundPosition = 'center';
        box.style.backgroundRepeat = 'no-repeat';
        
        // Update name
        box.querySelector('h3').textContent = campaign.name;
        
        // Update progress bar
        const progressFill = box.querySelector('.progress-fill');
        progressFill.style.width = '0%';
        progressFill.setAttribute('data-progress', campaign.progress);
        progressFill.classList.remove('animated');
        
        // Animate progress bar with smooth animation
        setTimeout(() => {
            const targetPercentage = campaign.progress;
            const startTime = performance.now();
            const duration = 2000;
            
            function easeOutCubic(t) {
                return 1 - Math.pow(1 - t, 3);
            }
            
            function animate(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutCubic(progress);
                
                const currentPercentage = easedProgress * targetPercentage;
                progressFill.style.width = currentPercentage + '%';
                
                if (progress < 1) {
                    requestAnimationFrame(animate);
                } else {
                    progressFill.style.width = targetPercentage + '%';
                    progressFill.classList.add('animated');
                }
            }
            
            requestAnimationFrame(animate);
        }, 300);
    }
    
    // Right button - go to next campaign
    if (rightBtn) {
        rightBtn.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % campaigns.length;
            updateRightContent(currentIndex);
        });
    }
    
    // Left button - go to previous campaign
    if (leftBtn) {
        leftBtn.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + campaigns.length) % campaigns.length;
            updateRightContent(currentIndex);
        });
    }
    
    // Optional: Click on left boxes to show them in right content
    leftBoxes.forEach((box, index) => {
        box.addEventListener('click', function() {
            currentIndex = index;
            updateRightContent(currentIndex);
        });
    });
});

// Navigation highlight on scroll
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function highlightNavOnScroll() {
    const scrollY = window.pageYOffset;
    
    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 100;
        const sectionId = section.getAttribute('id');
        
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', highlightNavOnScroll);

// FAQs Toggle functionality
const faqsBtns = document.querySelectorAll('.faqs-btn');
const studentFaqs = document.querySelector('.student-faqs');
const donorFaqs = document.querySelector('.donor-faqs');

if (faqsBtns.length > 0) {
    faqsBtns[0].classList.add('active'); // Student button active by default
    
    faqsBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            faqsBtns.forEach(b => b.classList.remove('active'));
            // Add active to clicked button
            btn.classList.add('active');
            
            if (index === 0) { // Student
                studentFaqs.classList.remove('hidden');
                donorFaqs.classList.add('hidden');
            } else { // Donor
                studentFaqs.classList.add('hidden');
                donorFaqs.classList.remove('hidden');
            }
        });
    });
}

// Smooth scroll for navigation links
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
            
            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        }
    });
});

// Back to top button
const bttBtn = document.querySelector('.btt');
if (bttBtn) {
    bttBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

/// Cursor following gradient blur effect (smooth version)
document.addEventListener('DOMContentLoaded', function() {
    // Create the cursor blur element
    const cursorBlur = document.createElement('div');
    cursorBlur.classList.add('cursor-gradient-blur');
    document.body.appendChild(cursorBlur);
    
    let mouseX = 0;
    let mouseY = 0;
    let currentX = 0;
    let currentY = 0;
    
    // Track mouse movement
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });
    
    // Smooth animation
    function animate() {
        // Ease towards mouse position
        currentX += (mouseX - currentX) * 0.05;
        currentY += (mouseY - currentY) * 0.05;
        
        cursorBlur.style.left = currentX + 'px';
        cursorBlur.style.top = currentY + 'px';
        
        requestAnimationFrame(animate);
    }
    
    animate();
    
    // Hide cursor blur when mouse leaves the window
    document.addEventListener('mouseleave', function() {
        cursorBlur.style.opacity = '0';
    });
    
    // Show cursor blur when mouse enters the window
    document.addEventListener('mouseenter', function() {
        cursorBlur.style.opacity = '1';
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.querySelector('.btn-primary');
    
    if (loginBtn) {
        loginBtn.addEventListener('click', function() {
            window.location = '/login'; // Change to your login page URL
        });
    }
});