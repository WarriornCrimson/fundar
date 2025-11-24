<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
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
        <li class="{{ request()->routeIs('notifications') ? 'active-nav' : ''}}">
            <a href="{{ route('notifications') }}" class="{{ request()->routeIs('notifications') ? 'active' : ''}}">
                <i class="fa-regular fa-bell"></i>
                <p>Notifications</p>
            </a>
        </li>
        <li class="{{ request()->routeIs('profile') ? 'active-nav' : ''}}">
            <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : ''}}">
                <i class="fa-regular fa-address-card"></i>
                <p>Profile</p>  
            </a> 
        </li>                                   
    </ul>
</aside>
</div>