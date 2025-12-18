<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Listings | FUNDar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/admin-campaigns.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/closecampaigncard.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/pendingusercampaigncard.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>

    <x-admin-sidebar/>

    <div class="main-content-wrapper">
        <main class="campaign-listings-container">
            <div class="filter-controls-row">
                    <div class="campaigns-tabs">
                        <button class="tab-button active" data-filter="all">All campaigns</button>
                        <button class="tab-button live" data-filter="live">Live Campaigns</button>
                        <button class="tab-button pending" data-filter="pending">Pending Campaigns</button>
                        <button class="tab-button closed" data-filter="closed">Closed Campaigns</button>
                        <div class="dropdown-filter">
                            <button class="dropdown-button">
                                All Campaigns <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>
                    </div>
            </div>

            <div class="search-bar-row">
                <div class="search-input-wrapper">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="campaign-search" placeholder="Search by name, email, or ID...">
                </div>
            </div>
            
            <section class="campaign-grid">
                
                <div class="live-campaigns">
                    <x-user-campaign-card/>
                    <x-user-campaign-card/>
                </div>
                
            </section>
        </main>
    </div>

    <script src="{{ asset('admin-campaigns.js') }}"></script>
</body>
</html>