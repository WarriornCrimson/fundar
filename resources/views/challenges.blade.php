<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Challenges Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/challenges.css') }}">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body>
    
<x-side-bar/>
<div class="main-layout">
        <main class="challenge-content">
            
            <!-- Banner/Hero Section (Simulating an Image Carousel) -->
            <div class="banner-container">
                <!-- Data attributes for carousel images -->
                <img src="{{ asset('images/CampaignBanner1.jpeg') }}" alt="Banner Image" class="banner-image" id="bannerImage">
                <div class="carousel-dots" id="carouselDots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
 
            <!-- Tab Navigation -->
            <div class="tab-navigation">
                <button class="tab-button active" data-tab="challenges">Challenges</button>
                <button class="tab-button" data-tab="ongoing">Ongoing</button>
                <button class="tab-button" data-tab="completed">Completed</button>
            </div>

            <!-- Challenge Content Section -->
            <div class="challenges-section" id="challenges">
                
                <!-- Daily Challenges -->
                <section class="challenge-category">
                    <h2 class="category-header">
                        <i data-lucide="sun"> </i> 
                        Daily Challenges
                    </h2>
                    <p class="category-description">Complete daily challenges to earn your badges.</p>
                    <div class="challenge-grid">
                        <div class="challenge-card" data-challenge-name="First Spark">
                            <h3 class="card-title">First Spark</h3>
                            <p class="card-description">Make your very first donation to support a student today to earn the First Donor Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="Chain of Kindness">
                            <h3 class="card-title">Chain of Kindness</h3>
                            <p class="card-description">Support 3 different student campaigns in one day to earn the Kindness Advocate Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="One Good Deed">
                            <h3 class="card-title">One Good Deed</h3>
                            <p class="card-description">Donate to at least 1 student campaign today to earn the Daily Helper Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="Quick Booster">
                            <h3 class="card-title">Quick Booster</h3>
                            <p class="card-description">Donate any amount to 5 ongoing campaigns and meet its goal today to earn the Engaged Student Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="Fresh Find">
                            <h3 class="card-title">Fresh Find</h3>
                            <p class="card-description">Donate to a newly launched campaign this week to earn the Campaign Starter Supporter Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>                        
                    </div>
                </section>

                <!-- Weekly Challenges -->
                <section class="challenge-category">
                    <h2 class="category-header">
                        <i data-lucide="calendar"></i>
                        Weekly Challenges
                    </h2>
                    <p class="category-description">Your weekly path to making a difference.</p>
                    <div class="challenge-grid">
                        <div class="challenge-card" data-challenge-name="Sponsor Squad">
                            <h3 class="card-title">Sponsor Squad</h3>
                            <p class="card-description">Support 5 different students this week to spread your impact to earn the Squad Leader Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="Share to Care">
                            <h3 class="card-title">Share to Care</h3>
                            <p class="card-description">Share 7 campaigns this week on social media. Earn the Community Voice Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="Boost the Newcomers">
                            <h3 class="card-title">Boost the Newcomers</h3>
                            <p class="card-description">Fund 3 newly created campaigns this week to help them take off. Earn the Launch Supporter Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="First Step Supporter">
                            <h3 class="card-title">First Step Supporter</h3>
                            <p class="card-description">Donate to a new campaign that is yet to receive any donation to earn the Campaign Starter Supporter Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card" data-challenge-name="First Step Supporter">
                            <h3 class="card-title">First Step Supporter</h3>
                            <p class="card-description">Donate to a new campaign that is yet to receive any donation to earn the Campaign Starter Supporter Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>                        
                    </div>
                </section>

                <!-- Rare Challenges -->
                <section class="challenge-category">
                    <h2 class="category-header">
                        <i data-lucide="diamond"></i>
                        Rare Challenges
                    </h2>
                    <p class="category-description">Special milestones that recognize generous and long-term donors.</p>
                    <div class="challenge-grid">
                        <div class="challenge-card large" data-challenge-name="Scholarship Angel">
                            <h3 class="card-title">Scholarship Angel</h3>
                            <p class="card-description">Fully fund a student's tuition campaign to earn the Scholarship Angel Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card large" data-challenge-name="Thousand Touches">
                            <h3 class="card-title">Thousand Touches</h3>
                            <p class="card-description">Reach ₱1,000 in total donations and make a lasting difference to earn the Impact Donor Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card large" data-challenge-name="Hall of Hearts">
                            <h3 class="card-title">Hall of Hearts</h3>
                            <p class="card-description">Donate ₱5,000 or more overall to earn the Heart of Gold Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card large" data-challenge-name="Legacy Maker">
                            <h3 class="card-title">Legacy Maker</h3>
                            <p class="card-description">Support 50 different student campaigns in total and earn the Legacy Giver Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>
                        <div class="challenge-card large" data-challenge-name="Early Light">
                            <h3 class="card-title">Early Light</h3>
                            <p class="card-description">Be among the first 5 donors to 3 newly created campaigns to earn the Impact Pioneer Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>  
                        <div class="challenge-card large" data-challenge-name="Scholarship Angel">
                            <h3 class="card-title">Scholarship Angel</h3>
                            <p class="card-description">Fully fund a student's tuition campaign to earn the Scholarship Angel Badge.</p>
                            <button class="start-button">Start Challenge</button>
                        </div>                                                
                    </div>
                </section>
            </div>

            <!-- ONGOING Challenges Section -->
            <div class="challenges-section hidden" id="ongoing">
                <section class="challenge-category">
                    <h2 class="category-header text-gray-700">Ongoing Challenges</h2>
                    <p class="category-description text-gray-600">Conquer the challenges and unlock rewards!</p>
                </section>
                <!-- Placeholder for Ongoing challenges - should be dynamically filled by JS -->
                <p id="ongoing-placeholder">You have not started a challenge yet!</p>
            </div> 

            <!-- COMPLETED Challenges Section -->
            <div class="challenges-section hidden" id="completed">
                <section class="challenge-category">
                    <h2 class="category-header text-gray-700">Completed Challenges</h2>
                    <p class="category-description text-gray-600">You conquered these like a champ.</p>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Today</h3>
                </section>

                <div class="completed-challenge-card" 
                     data-challenge-name="First Spark" 
                     data-badge-name="First Donor" 
                     data-badge-image="{{ asset('images/First-Donor.png') }}"
                >
                    <div class="content">
                        <h4 class="completed-title">First Spark</h4>
                        <p class="completed-text">You've completed this challenge!</p>
                    </div>
                    <button class="unlock-button">Unlock badge</button>
                </div>
                
                <p id="completed-placeholder" class="p-8 text-center text-gray-500 hidden">No challenges completed yet. Keep donating!</p>
            </div>
            
        </main>

        <!-- Sidebar Area -->
        <div class="sidebar-content">
            <div class="sidebar-header">Top Challenges</div>
            <p class="sidebar-description">Donors' top picks this week</p>

            <div class="top-challenge-card">
                <!-- <img src="https://placehold.co/40x40/f0e3af/8d6e3c?text=" alt="Badge" class="top-challenge-icon"> -->
                <div class="info">
                    <div class="title">First Spark</div>
                    <p class="card-description">Make your very first donation to support a student today.</p>
                    <div class="stats">1002 challengers 🔥</div>
                </div>
                <button class="start-button sidebar-start-button">Join</button>
            </div>
            
            <div class="top-challenge-card">
                <!-- <img src="https://placehold.co/40x40/c8e6c9/388e3c?text=🏆" alt="Badge" class="top-challenge-icon"> -->
                <div class="info">
                    <div class="title">One Good Deed</div>
                    <p class="card-description">Donate to at least 1 student campaign today</p>
                    <div class="stats">999 challengers 🔥</div>
                </div>
                <button class="start-button sidebar-start-button">Join</button>
            </div>

            <div class="top-challenge-card">
                <!-- <img src="https://placehold.co/40x40/ffccbc/d32f2f?text=🥉" alt="Badge" class="top-challenge-icon"> -->
                <div class="info">
                    <div class="title">Boost the Newcomers</div>
                    <p class="card-description">Fund 3 newly created campaigns this week.</p>
                    <div class="stats">609 challengers 🔥</div>
                </div>
                <button class="start-button sidebar-start-button">Join</button>
            </div>
    </div>
    </div>

    <!-- MODAL POPUP (Challenge Progress) - Now positioned bottom-right -->
    <div id="challengeModal" class="modal-overlay hidden modal-bottom-right">
        <div class="modal-content">
            <button class="modal-close-button">
                <i data-lucide="x"></i>
            </button>
            <div class="modal-body">
                <div class="modal-icon-container">
                    <!-- Placeholder Badge Icon -->
                    <img src="https://placehold.co/100x100/E8EAF6/707AF2?text=Badge" alt="Challenge Badge" id="modalBadgeIcon">
                </div>
                <h3 class="modal-title" id="modalTitle">First Spark</h3>
                <p class="modal-description" id="modalDescription">Make your first donation to unlock this badge</p>
                <div class="modal-progress">
                    <span class="progress-label">Progress</span>
                    <div class="progress-bar-container">
                        <div class="progress-bar"></div>
                    </div>
                    <span class="progress-status">0/1</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL POPUP (Badge Unlocked/Collected) - New Modal -->
<div id="badgeUnlockModal" class="modal-overlay hidden">
    <div class="sunray-background"></div>
    <div class="modal-content badge-content">
        <button class="modal-close-button badge-close-button">
            <i data-lucide="x"></i>
        </button>
        <div class="badge-modal-body">

            <h3 class="badge-modal-header">Congratulations, Andrea!</h3>
            <p class="badge-modal-subheader">You've earned a new badge!</p>
            
            <!-- Badge Container with Confetti -->
            <div class="badge-confetti-container">
                <!-- Confetti Images (positioned relative to this container) -->
                <img class="left" src="{{ asset('images/Confetti-left.png')}}" alt="Confetti Left">
                <img class="right" src="{{ asset('images/Confetti-right.png')}}" alt="Confetti Right">
                
                <!-- Badge Icon (centered) -->
                <img src="https://placehold.co/180x180/FFB74D/ffffff?text=FIRST+DONOR" 
                    alt="Unlocked Badge" 
                    class="unlocked-badge-icon" 
                    id="unlockedBadgeIcon">
            </div>
            
            <!-- Description -->
            <p class="badge-modal-description">
                You've completed the <span id="unlockedChallengeName" style="font-weight: 600;">First Spark</span> 
                challenge and with that, here's your <span id="unlockedBadgeName" style="font-weight: 600;">First Donor</span> badge
            </p>
            
            <!-- Action Buttons -->
            <div class="badge-actions">
                <button class="action-button view-collections">View Collections</button>
                <button class="action-button awesome-button">Awesome!</button>
            </div>
        </div>
    </div>
</div>
    <!-- Initialization of Lucide Icons and JavaScript -->
    <script>
        lucide.createIcons();
    </script>
    <script src="{{ asset('js/challenges.js') }}"></script>
</body>
</html>