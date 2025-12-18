<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
     
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <x-admin-sidebar/>

    <div class="admin-accounts">
        <main class="dashboard-container">

            {{-- Row 1: Top Stats --}}
            <div class="top-stats-grid">
                <div class="stat-card">
                    <div class="stat-label">Total Verified Donations</div>
                    <div class="stat-value primary-text">₱732,984</div>
                    <div class="stat-meta positive">+13% vs last month</div>
                </div>

                <div class="stat-card">
                    <div class="stat-label">Active Users</div>
                    <div class="stat-value">8,547</div>
                    <div class="stat-meta">3,241 donors, 5,306 students</div>
                </div>

                <div class="stat-card">
                    <div class="stat-label">Average Donation</div>
                    <div class="stat-value secondary-text">₱512</div>
                    <div class="stat-meta">Median: ₱500</div>
                </div>

                <div class="stat-card">
                    <div class="stat-label">Success Rate</div>
                    <div class="stat-value positive-text">86%</div>
                    <div class="stat-meta">Campaigns fully funded</div>
                </div>
            </div>

            {{-- Row 2: Donations Bar Chart --}}
            <div class="chart-panel full-width-chart">
                <h3 class="chart-title">Donations - Last 6 Months</h3>
                <canvas id="donationsBarChart"></canvas>
            </div>

            {{-- Row 3: Campaigns by Category Pie Chart --}}
            <div class="data-row chart-row">
                <div class="chart-panel category-list-panel">
                    <h3 class="chart-title">Campaigns by Category</h3>
                    <ul class="category-items">
                        <li>Tuition Fee: 45</li>
                        <li>Emergency Fund: 24</li>
                        <li>Living Essentials: 28</li>
                        <li>Health Assistance: 18</li>
                        <li>Learning Materials: 32</li>
                    </ul>
                </div>
                <div class="chart-panel pie-chart-panel">
                    <canvas id="campaignPieChart"></canvas>
                </div>
            </div>

            {{-- Row 4: User Metrics --}}
            <h3 class="section-title">User Metrics</h3>
            <div class="user-metrics-grid">
                <div class="stat-card">
                    <div class="stat-label">New Users (30d)</div>
                    <div class="stat-value">1,247</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Active Users</div>
                    <div class="stat-value">6,832</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Repeat Donors</div>
                    <div class="stat-value">72%</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Churn Rate</div>
                    <div class="stat-value">8.5%</div>
                </div>
            </div>

            {{-- Row 5: Monthly Financial Summary --}}
            <div class="financial-summary-panel">
                <div class="summary-content">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <div class="summary-text">
                        <div class="summary-title">Monthly Financial Summary</div>
                        <div class="summary-subtitle">All transactions, fees, and settlements</div>
                        <div class="summary-date">May 2023 - May 2024</div>
                    </div>
                </div>
                <div class="summary-actions">
                    <button class="btn-secondary">Preview</button>
                    <button class="btn-primary">Export</button>
                </div>
            </div>

            {{-- Placeholder for additional sections if needed --}}
            {{-- <h3 class="section-title">Campaign Performance Report</h3> --}}

        </main>
    </div>

    <script src="{{ asset('js/reports.js') }}"></script> {{-- New JS file for charts --}}
</body>
</html>