<div>
    <aside class="navbar">
        <img src="{{ asset('images/favicon.png') }}">
        <ul>
            <li class="{{ request()->routeIs('home') ? 'active-nav' : ''}}">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : ''}}">
                    <i class="fa-solid fa-house"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{ request()->routeIs('leaderboard') ? 'active-nav' : ''}}">
                <a href="{{ route('leaderboard') }}" class="{{ request()->routeIs('leaderboard') ? 'active' : ''}}">
                    <i class="fa-solid fa-medal"></i>
                    <p>Leaderboard</p>
                </a>
            </li> 
            <li class="{{ request()->routeIs('challenges') ? 'active-nav' : ''}}">
                <a href="{{ route('challenges') }}" class="{{ request()->routeIs('challenges') ? 'active' : ''}}">
                    <i class="fa-regular fa-star"></i>
                    <p>Challenges</p>
                </a>
            </li>
            <li class="{{ request()->routeIs('saved') ? 'active-nav' : ''}}">
                <a href="{{ route('saved') }}" class="{{ request()->routeIs('saved') ? 'active' : ''}}">
                    <i class="fa-regular fa-bookmark"></i>
                    <p>Saved</p> 
                </a>  
            </li>
            <li class="{{ request()->routeIs('messages') ? 'active-nav' : ''}}">
                <a href="{{ route('messages') }}" class="{{ request()->routeIs('messages') ? 'active' : ''}}">
                    <i class="fa-regular fa-message"></i>
                    <p>Messages</p>
                </a>
            </li> 
            <li id="notificationToggle">
                <a href="#" onclick="event.preventDefault();">
                    <i class="fa-regular fa-bell"></i>
                    <p>Notifications</p>
                    <span class="notification-badge">3</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('profile') ? 'active-nav' : ''}}">
                <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : ''}}">
                    <i class="fa-regular fa-address-card"></i>
                    <p>Profile</p>  
                </a> 
            </li>                                  
        </ul>
        <a class="donation-button btn" href="{{ route('createCampaign') }}" id="startCampaignBtn">
            <i class="fa-solid fa-plus"></i>
            Start Campaign
        </a> 
    </aside> 

    <!-- Overlay for notification panel -->
    <div id="notificationOverlay" class="notification-overlay hide"></div>

    <!-- Notification Panel -->
    <div id="notificationContainer" class="notification-container">
        <div class="notification-header">
            <h3 class="notification-title">My Notifications</h3>
            <hr>
            <div class="notification-tabs">
                <span class="tab-active" id="tabAll">All</span>
                <span class="tab-inactive" id="tabUnread">Unread</span>
            </div>
        </div>
        <div class="notification-list" id="notificationList">
            <h4 class="notification-group-title">Today</h4>
            
            <!-- Notification Card 1 (Read) -->
            <div class="notification-card read" data-notification-id="1">
                <div class="notification-icon success">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="notification-content">
                    <p class="notification-text">Your student verification has been approved!</p>
                    <p class="notification-subtext">You can now start creating your campaigns.</p>
                </div>
                <span class="notification-time">8:31 AM</span>
            </div>

            <!-- Notification Card 2 (Unread) -->
            <div class="notification-card unread" data-notification-id="2">
                <div class="notification-icon info">
                    <i class="fa-regular fa-message"></i>
                </div>
                <div class="notification-content">
                    <p class="notification-text">New message from Mark.</p>
                    <p class="notification-subtext">Mark replied to your inquiry about the challenge.</p>
                </div>
                <span class="notification-time">Yesterday</span>
            </div>
            
            <h4 class="notification-group-title">Last Week</h4>

            <!-- Notification Card 3 (Unread) -->
            <div class="notification-card unread" data-notification-id="3">
                <div class="notification-icon challenge">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="notification-content">
                    <p class="notification-text">Challenge "First Spark" Completed!</p>
                    <p class="notification-subtext">Claim your First Donor badge now.</p>
                </div>
                <span class="notification-time">2d ago</span>
            </div>

            <!-- Notification Card 4 (Read) -->
            <div class="notification-card read" data-notification-id="4">
                <div class="notification-icon update">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="notification-content">
                    <p class="notification-text">System Update: New features added.</p>
                    <p class="notification-subtext">Check out the new leaderboard stats.</p>
                </div>
                <span class="notification-time">4d ago</span>
            </div>
            
            <!-- Notification Card 5 (Unread) -->
            <div class="notification-card unread" data-notification-id="5">
                <div class="notification-icon info">
                    <i class="fa-solid fa-circle-info"></i> 
                </div>
                <div class="notification-content">
                    <p class="notification-text">Welcome to the Platform!</p>
                    <p class="notification-subtext">Get started by completing your profile.</p>
                </div>
                <span class="notification-time">1w ago</span>
            </div>
        </div> 
    </div>
    
    <script src="{{ asset('js/notifications.js') }}"></script>
    <script>
        // Handle Start Campaign button click
        document.addEventListener('DOMContentLoaded', () => {
            const startCampaignBtn = document.getElementById('startCampaignBtn');
            
            if (startCampaignBtn) {
                startCampaignBtn.addEventListener('click', (e) => {
                    // Set flag in localStorage that user has started creating a campaign
                    localStorage.setItem('hasPendingCampaign', 'false');
                });
            }
        });
    </script>
</div>