document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');
    const challengeSections = document.querySelectorAll('.challenges-section');
    const startButtons = document.querySelectorAll('.start-button');
    
    // Challenge Progress Modal (Bottom Right)
    const challengeModalOverlay = document.getElementById('challengeModal');
    const challengeModalCloseButton = challengeModalOverlay.querySelector('.modal-close-button');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    
    // Badge Unlock Modal
    const badgeUnlockModal = document.getElementById('badgeUnlockModal');
    const badgeUnlockCloseButton = badgeUnlockModal.querySelector('.badge-close-button');
    const unlockButtons = document.querySelectorAll('.unlock-button');
    const unlockedChallengeName = document.getElementById('unlockedChallengeName');
    const unlockedBadgeName = document.getElementById('unlockedBadgeName');
    const unlockedBadgeIcon = document.getElementById('unlockedBadgeIcon');

    // Banner/Carousel elements
    const bannerImage = document.getElementById('bannerImage');
    const carouselDotsContainer = document.getElementById('carouselDots');
    const carouselDots = document.querySelectorAll('.dot');
    const images = [
        'https://images.unsplash.com/photo-1542810634-71277d95dcbb?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cG9vciUyMHN0dWRlbnR8ZW58MHx8MHx8fDA%3D',
        'https://www.parentclub.scot/sites/default/files/2024-03/boys-running-playground-school-banner.jpg',
        'https://d32ijn7u0aqfv4.cloudfront.net/wp/wp-content/uploads/20181025104522/group-students-graduationcapgown-diploma_SLR18157_Applying-to-Graduate-School_858462408_is.jpg'
    ];
    let currentImageIndex = 0;
    const intervalTime = 5000; // 5 seconds

    // Store current badge data when modal is opened
    let currentBadgeData = null;

    // --- Tab Switching Logic ---

    /**
     * Handles the display logic when a tab button is clicked.
     * @param {string} targetId The ID of the section to show (e.g., 'challenges').
     */
    function switchTab(targetId) {
        challengeSections.forEach(section => {
            section.classList.add('hidden');
        });

        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.classList.remove('hidden');
        }

        tabButtons.forEach(button => {
            button.classList.remove('active');
        });

        const activeTab = document.querySelector(`.tab-button[data-tab="${targetId}"]`);
        if (activeTab) {
            activeTab.classList.add('active');
        }
    }

    // --- Challenge Progress Modal Logic (Bottom Right) ---

    /**
     * Opens the challenge detail modal.
     * @param {HTMLElement} button The button element that was clicked.
     */
    function openChallengeModal(button) {
        const card = button.closest('.challenge-card, .top-challenge-card');
        if (!card) return;

        const title = card.querySelector('.card-title, .top-challenge-card .title')?.textContent || 'Challenge Detail';
        const description = card.querySelector('.card-description')?.textContent || 'See your progress to unlock this badge.';

        modalTitle.textContent = title;
        modalDescription.textContent = description;
        
        challengeModalOverlay.classList.remove('hidden');
    }

    /**
     * Closes the challenge detail modal.
     */
    function closeChallengeModal() {
        challengeModalOverlay.classList.add('hidden');
    }
    
    // --- Badge Unlock Modal Logic with Sequential Animations ---

    /**
     * Opens the badge collection modal with sequential animations.
     * @param {HTMLElement} button The unlock button element that was clicked.
     */
    function openBadgeUnlockModal(button) {
        const card = button.closest('.completed-challenge-card');
        if (!card) return;

        // Get data from the completed card's attributes
        const challengeName = card.getAttribute('data-challenge-name');
        const badgeName = card.getAttribute('data-badge-name');
        const badgeImage = card.getAttribute('data-badge-image');

        // Store badge data for later use
        currentBadgeData = {
            name: badgeName,
            description: `Completed the ${challengeName} challenge`,
            earnedDate: new Date().toISOString() // Current date when badge is unlocked
        };

        // Update modal content
        unlockedChallengeName.textContent = challengeName;
        unlockedBadgeName.textContent = badgeName;
        unlockedBadgeIcon.src = badgeImage;
        unlockedBadgeIcon.alt = badgeName + " Badge";

        // Show the modal and hide the scrollbar
        badgeUnlockModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';

        // Start the sequential animation
        playBadgeUnlockAnimation();
    }

    /**
     * Plays the sequential animation for the badge unlock modal.
     * 1. Show header
     * 2. Show subheader
     * 3. Show description
     * 4. Pop up badge
     * 5. Show confetti
     * 6. Show action buttons
     */
    function playBadgeUnlockAnimation() {
        const badgeModalBody = badgeUnlockModal.querySelector('.badge-modal-body');
        const header = badgeModalBody.querySelector('.badge-modal-header');
        const subheader = badgeModalBody.querySelector('.badge-modal-subheader');
        const badgeContainer = badgeModalBody.querySelector('.badge-confetti-container');
        const badge = badgeModalBody.querySelector('.unlocked-badge-icon');
        const confettiLeft = badgeModalBody.querySelector('.left');
        const confettiRight = badgeModalBody.querySelector('.right');
        const description = badgeModalBody.querySelector('.badge-modal-description');
        const actions = badgeModalBody.querySelector('.badge-actions');
        const radialBg = badgeModalBody.querySelector('.radial-animation');

        // Reset all animations by adding 'hidden-animation' class
        header.classList.add('hidden-animation');
        subheader.classList.add('hidden-animation');
        badgeContainer.classList.add('hidden-animation');
        badge.classList.add('hidden-animation');
        confettiLeft.classList.add('hidden-animation');
        confettiRight.classList.add('hidden-animation');
        description.classList.add('hidden-animation');
        actions.classList.add('hidden-animation');

        // Start radial animation immediately
        if (radialBg) {
            radialBg.classList.add('radial-active');
        }

        // Sequential animation timeline
        setTimeout(() => {
            header.classList.remove('hidden-animation');
            header.classList.add('fade-in-up');
        }, 100);

        setTimeout(() => {
            subheader.classList.remove('hidden-animation');
            subheader.classList.add('fade-in-up');
        }, 400);

        setTimeout(() => {
            description.classList.remove('hidden-animation');
            description.classList.add('fade-in-up');
        }, 700);

        setTimeout(() => {
            badgeContainer.classList.remove('hidden-animation');
            badge.classList.remove('hidden-animation');
            badge.classList.add('pop-in');
        }, 1000);

        setTimeout(() => {
            confettiLeft.classList.remove('hidden-animation');
            confettiLeft.classList.add('confetti-pop-left');
            confettiRight.classList.remove('hidden-animation');
            confettiRight.classList.add('confetti-pop-right');
        }, 1400);

        setTimeout(() => {
            actions.classList.remove('hidden-animation');
            actions.classList.add('fade-in-up');
        }, 1800);
    }

    /**
     * Closes the badge collection modal.
     */
    function closeBadgeUnlockModal() {
        badgeUnlockModal.classList.add('hidden');
        document.body.style.overflow = '';

        // Reset animations
        const badgeModalBody = badgeUnlockModal.querySelector('.badge-modal-body');
        const radialBg = badgeModalBody.querySelector('.radial-animation');
        if (radialBg) {
            radialBg.classList.remove('radial-active');
        }

        // Remove animation classes
        badgeModalBody.querySelectorAll('.fade-in-up, .pop-in, .confetti-pop-left, .confetti-pop-right').forEach(el => {
            el.classList.remove('fade-in-up', 'pop-in', 'confetti-pop-left', 'confetti-pop-right');
        });
    }

    /**
     * Saves the badge to achievements and redirects to profile
     */
    function saveBadgeAndRedirect() {
        if (!currentBadgeData) return;

        // Get existing achievements from localStorage
        const achievements = JSON.parse(localStorage.getItem('userAchievements') || '[]');
        
        // Add the new badge to achievements
        achievements.push(currentBadgeData);
        
        // Save back to localStorage
        localStorage.setItem('userAchievements', JSON.stringify(achievements));
        
        // Redirect to profile page with achievements section hash
        window.location.href = '/profile#achievements';
    }
    
    // --- Banner Carousel Logic ---

    /**
     * Cycles the banner image and updates the dots.
     */
    function cycleBanner() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateBanner();
    }

    /**
     * Updates the banner image source and active dot.
     */
    function updateBanner() {
        bannerImage.style.opacity = 0; 
        setTimeout(() => {
            bannerImage.src = images[currentImageIndex];
            bannerImage.style.opacity = 1;
        }, 300);

        carouselDots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentImageIndex);
        });
    }

    // --- Event Listeners and Initialization ---

    // Tab Listeners
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-tab');
            switchTab(target);
        });
    });

    // Challenge Modal Listeners
    startButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            openChallengeModal(e.currentTarget);
        });
    });
    
    challengeModalCloseButton.addEventListener('click', closeChallengeModal);
    
    // Badge Unlock Modal Listeners
    unlockButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            openBadgeUnlockModal(e.currentTarget);
        });
    });

    badgeUnlockCloseButton.addEventListener('click', closeBadgeUnlockModal);
    badgeUnlockModal.addEventListener('click', (e) => {
        if (e.target === badgeUnlockModal) {
            closeBadgeUnlockModal();
        }
    });

    // View Collections button - saves badge and redirects to profile
    const viewCollectionsBtn = badgeUnlockModal.querySelector('.view-collections');
    if (viewCollectionsBtn) {
        viewCollectionsBtn.addEventListener('click', saveBadgeAndRedirect);
    }

    // Awesome button - just closes modal
    const awesomeBtn = badgeUnlockModal.querySelector('.awesome-button');
    if (awesomeBtn) {
        awesomeBtn.addEventListener('click', () => {
            // Save the badge before closing
            if (currentBadgeData) {
                const achievements = JSON.parse(localStorage.getItem('userAchievements') || '[]');
                achievements.push(currentBadgeData);
                localStorage.setItem('userAchievements', JSON.stringify(achievements));
            }
            closeBadgeUnlockModal();
        });
    }

    // Initialize Banner Carousel
    let bannerInterval = setInterval(cycleBanner, intervalTime);

    carouselDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(bannerInterval);
            currentImageIndex = index;
            updateBanner();
            bannerInterval = setInterval(cycleBanner, intervalTime);
        });
    });

    // Default tab activation
    switchTab('challenges');

    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons(); 
    }
});