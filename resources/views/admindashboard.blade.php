<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/admin-global.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
</head>
<body>
    <x-admin-sidebar/>
    
    <div class="admin-dashboard"> 
    <nav>
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search campaigns, students, donors...">
        </div>
        <div class="user-actions">
            <i class="fa-regular fa-bell"></i>
            <img src="{{ asset('images/Christo Rey.png') }}" alt="User Profile" class="profile-pic">
        </div>
    </nav>
    <main class="dashboard-container">
        
        <section class="stats-grid">
            <div class="stat-card">
                <p class="stat-label">Total Donations</p>
                <h2 class="stat-value">₱248,450</h2>
                <span class="stat-change positive"><i class="fa-solid fa-caret-up"></i> +12.5%</span>
            </div>
            <div class="stat-card">
                <p class="stat-label">Active Campaigns</p>
                <h2 class="stat-value">924</h2>
                <span class="stat-change positive"><i class="fa-solid fa-caret-up"></i> +4</span>
            </div>
            <div class="stat-card">
                <p class="stat-label">Pending Campaign Approvals</p>
                <h2 class="stat-value">3</h2>
                <span class="stat-change negative"><i class="fa-solid fa-caret-down"></i> -12</span>
            </div>
            <div class="stat-card">
                <p class="stat-label">Pending Student Verifications</p>
                <h2 class="stat-value">3</h2>
                <span class="stat-change negative"><i class="fa-solid fa-caret-down"></i> -2</span>
            </div>
        </section>

        <section class="alerts-section">
            <div class="header">
                <i class="fa-solid fa-circle-info"></i>
                <h3>System Alerts</h3>
            </div>
            
            <div class="alert-item warning">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <p>3 pending student verifications</p>
                <span>2h ago</span>
                <button class="btn-primary review-btn">Review</button>
            </div>
            <div class="alert-item danger">
                <i class="fa-solid fa-circle-exclamation"></i>
                <p>A Campaign flagged for review</p>
                <span>4h ago</span>
                <button class="btn-primary review-btn">Review</button>
            </div>
            <div class="alert-item info">
                <i class="fa-solid fa-clock"></i>
                <p>3 pending campaign verifications > 48 hours</p>
                <span>2s ago</span>
                <button class="btn-primary review-btn">Review</button>
            </div>
        </section>

        <section class="data-row">
            <div class="chart-panel line-chart-panel">
                <h3>Donations - Last 7 Days</h3>
                <canvas id="donationsChart"></canvas>
            </div>

            <div class="chart-panel top-campaigns-panel">
                <h3>Top Campaigns by % Funded</h3>
                <div class="campaign-item">
                    <p class="campaign-title">Code for a Cause</p>
                    <div class="funding-details">
                        <span class="funded-amount">₱ 10,000 raised of ₱ 20,000</span>
                        <span class="percentage">50% Funded</span>
                    </div>
                    <div class="progress-bar-bg"><div class="progress-bar" style="width: 50%;"></div></div>
                </div>
                <div class="campaign-item">
                    <p class="campaign-title">Powering the Future Through Renewable Energy</p>
                    <div class="funding-details">
                        <span class="funded-amount">₱ 5,000 raised of ₱ 17,000</span>
                        <span class="percentage">29% Funded</span>
                    </div>
                    <div class="progress-bar-bg"><div class="progress-bar" style="width: 29%;"></div></div>
                </div>
                <div class="campaign-item">
                    <p class="campaign-title">Help Me Keep My Dream of Becoming a CPA Alive</p>
                    <div class="funding-details">
                        <span class="funded-amount">₱ 5,000 raised of ₱ 20,000</span>
                        <span class="percentage">25% Funded</span>
                    </div>
                    <div class="progress-bar-bg"><div class="progress-bar" style="width: 25%;"></div></div>
                </div>
                <div class="campaign-item">
                    <p class="campaign-title">Future Nurse Fighting to Stay in School</p>
                    <div class="funding-details">
                        <span class="funded-amount">₱ 4,000 raised of ₱ 25,000</span>
                        <span class="percentage">16% Funded</span>
                    </div>
                    <div class="progress-bar-bg"><div class="progress-bar" style="width: 16%;"></div></div>
                </div>
            </div>
        </section>

    </main>
    </div>
</div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>