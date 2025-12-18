<div>
    <aside class="navbar">
        <img src="{{ asset('images/favicon.png') }}">
        <ul>
            <li class="{{ request()->routeIs('admin-dashboard') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-dashboard') }}" class="{{ request()->routeIs('admin-dashboard') ? 'active' : ''}}">
                    <i class="fi fi-rr-dashboard-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin-accounts') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-accounts') }}" class="{{ request()->routeIs('admin-accounts') ? 'active' : ''}}">
                    <i class="fa-solid fa-users"></i>
                    <p>Accounts</p>
                </a>
            </li> 
            <li class="{{ request()->routeIs('admin-campaigns') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-campaigns') }}" class="{{ request()->routeIs('admin-campaigns') ? 'active' : ''}}">
                    <i class="fi fi-sr-hand-holding-heart"></i>
                    <p>Campaigns</p>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin-donations') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-donations') }}" class="{{ request()->routeIs('admin-donations') ? 'active' : ''}}">
                    <i class="fa-solid fa-wallet"></i>
                    <p>Donations</p> 
                </a>  
            </li>
            <li class="{{ request()->routeIs('admin-students') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-students') }}" class="{{ request()->routeIs('admin-students') ? 'active' : ''}}">
                    <i class="fa-solid fa-star"></i>
                    <p>Students</p>
                </a>
            </li> 
            <li class="{{ request()->routeIs('admin-reports') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-reports') }}" class="{{ request()->routeIs('admin-reports') ? 'active' : ''}}">
                    <i class="fa-solid fa-chart-bar"></i>
                    <p>Reports</p>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin-settings') ? 'active-nav' : ''}}">
                <a href="{{ route('admin-settings') }}" class="{{ request()->routeIs('admin-settings') ? 'active' : ''}}">
                    <i class="fa-solid fa-gear"></i>
                    <p>Settings</p>  
                </a> 
            </li>                                  
        </ul>


    </aside> 