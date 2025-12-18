<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Campaigns | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/savedcampaigns.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/campaign-card-sm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign-details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
    <x-side-bar/>
    <div class="saved-campaigns-con">
        <h1 class="section-title">Saved Campaigns</h1>
        <p class="category-description">Keep track of the campaigns you care about.</p>
        <div class="show-saved-campaigns">
            <x-campaign-card-sm
                user-name="Allyssa"
                user-year="3rd Year"
                user-course="BS Information Technology"
                user-avatar="images/Allyssa.png"
                category="Learning Material"
                campaignId="1"
                campaign-image='images/Maria.png'
                raised-amount="10000"
                goal-amount="20000"
                campaign-title="Code for a Cause"
                campaign-description="Hi! I'm Allyssa, a tech student with a big dream — to build applications that solve real-world problems. As we begin our capstone project, I want to give my all, but I currently don't have a laptop powerful enough to handle development tools."
            />
        </div>
    </div>

    <script src="{{ asset('js/campaign-details.js') }}"></script>
    <script src="{{ asset('js/savecampaigns.js') }}"></script>
</body>
</html> 