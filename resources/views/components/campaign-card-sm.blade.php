{{-- Small Campaign Card Component --}}
<div class="campaign-card-sm">
    <div class="campaign-card-sm-header">
        <div class="campaign-card-sm-avatar">
            <img src="{{ $userAvatar ?? asset('images/StudentCharacter.png') }}" alt="{{ $userName }}">
            <i class="fi fi-ss-check-circle"></i>
        </div>
        <div class="campaign-card-sm-user-info">
            <h3 class="campaign-card-sm-user-name">{{ $userName }}</h3>
            <p class="campaign-card-sm-user-meta">{{ $userYear }} | {{ $userCourse }}</p>
        </div>
    </div>

    <div class="campaign-card-sm-image">
        <img src="{{ $campaignImage }}" alt="{{ $campaignTitle }}">
        <div class="campaign-card-sm-progress-overlay">
            <p class="campaign-card-sm-raised">₱ {{ number_format($raisedAmount, 0) }} raised of ₱ {{ number_format($goalAmount, 0) }}</p>
            <div class="campaign-card-sm-progress-bar">
                <div class="campaign-card-sm-progress-fill" style="--percentWidth: {{ ($raisedAmount / $goalAmount) * 100 }}%"></div>
            </div>
        </div>
    </div>

    <div class="campaign-card-sm-content">
        <div class="badge-funded-percent">
            <div class="campaign-card-sm-funded">
                {{ number_format(($raisedAmount / $goalAmount) * 100) }}% Funded
            </div>            
            <div class="campaign-badge-detail"> 
                {{ $category }}
            </div>
        </div>
        <p class="campaign-card-sm-title">{{ $campaignTitle }}</p>
        <p class="campaign-card-sm-description">{{ Str::limit($campaignDescription, 120) }}</p>
        <a href="{{ route('campaign.details',  $campaignId) }}" class="campaign-card-sm-btn">Visit Campaign</a>
    </div>
</div>