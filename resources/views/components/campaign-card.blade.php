<div class="campaign-card">
    <!-- Header Message -->
    <span class="campaignId hide">{{ $campaignId }}</span>
    <div class="campaign-header">
        <div class="emoji"><i class="fi fi-sc-sparkles gradient-icon"></i></div>
        <p>{{ $headerMessage ?? '"Psst... wanna be today\'s hero? 🎯 Every peso gets this student closer to their goal. Peek at the campaign details—you might just save the day!"' }}</p>
    </div>

    <!-- User Info --> 
    <div class="user-info ">
        <div class="verified-profile">
            <img src="{{ $userAvatar ?? asset('images/StudentCharacter.png') }}" alt="{{ $userName }}" class="user-avatar" title="View Profile">
            <i class="fi fi-ss-check-circle"></i>
        </div> 
        <div class="user-details">
            <h3 class="user-name">{{ $userName }}</h3>
            <p class="user-meta">{{ $userYear }} | {{ $userCourse }}</p>
        </div>
        <button class="bookmark-btn">
            <i class="fa-regular fa-bookmark"></i>
        </button>
    </div>

    <!-- Campaign Image -->
    <div class="campaign-image">
        <img src="{{ $campaignImage }}" alt="{{ $campaignTitle }}">
        <span class="campaign-badge">{{ $badge ?? 'Learning Material' }}</span>
    </div>

    <!-- Campaign Title -->
    <h2 class="campaign-title">{{ $campaignTitle }}</h2>

    <!-- Campaign Description -->
    <p class="campaign-description">{{ $campaignDescription }}</p>

    <!-- Progress Bar -->
    <div class="campaign-progress">
        <div class="progress-info">
            <span class="progress-amount">
                <i class="fa-solid fa-arrow-trend-up"></i>
                ₱ {{ number_format($raisedAmount) }} raised of ₱ {{ number_format($goalAmount) }}
            </span>
            <span class="progress-percentage">{{ $fundedPercentage }}% Funded</span>
        </div>
        <div class="progress-bar">
            <div class="progress-fill" style="--percent: {{ $fundedPercentage }}%"></div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="campaign-actions">
        <a class="btn donate-btn">Donate</a>
        <a href="{{ route('campaign.details', $campaignId) }}" class="btn see-more-btn">Read More</a>
        <div class="quick-actions">
            <div class="vote-count">
                <button class="action-btn share-up" title="Share Up">
                    <i class="fa-solid fa-arrow-up"></i>
                </button>
                <p class="vote-number hidden" data-value="{{ $voteCount }}">{{ $voteCount }}</p>
            </div>
            <div class="vote-count">
                <button class="action-btn share-down" title="Share Down">
                    <i class="fa-solid fa-arrow-down"></i>
                </button>
            </div>
            <div class="vote-count">
                <button class="action-btn copy-link" title="Copy Link">
                    <i class="fa-solid fa-link"></i>
                </button>
                <p class="vote-number hidden" data-value="{{ $copyLinkNum }}">{{ $copyLinkNum }}</p>
            </div>
        </div>
    </div>

    <!--Donation Process-->
    <div class="donation-popup-blur">
         <div class="donation donation-options">
            <p class="donation-name">Support {{ $userName ?? '"this Bitch"'}}</p>
            <div class="campaign-summary">
                <p>You're Supporting</p>
                <div class="summary-content">
                    <p class="campaign-title-sm">{{ $campaignTitle }}</p>
                    <p class="campaign-background">{{ $campaignDescription }}</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="--percent: {{ $fundedPercentage }}%"></div>
                    </div>
                    <div class="progress-amount-right">
                            ₱ {{ number_format($raisedAmount) }} raised of ₱ {{ number_format($goalAmount) }}
                    </div>
                </div>
            </div>
            <div class="qr-options">
                <p>Pick an e-wallet to donate</p>
                <div class="qr">
                    <img src="{{ asset('images/gcash.png') }}">
                </div>
                <div class="qr">
                    <img src="{{ asset('images/paypal.png') }}">
                </div>        
            </div>
            <div class="donation-action-btns">
                <div class="btn-secondary cancel">Cancel</div>
                <div class="btn-primary proceed disabled">Proceed</div>
            </div>
         </div>

         <div class="donation donation-qr hide">
            <div class="donation-options">
                <p class="donation-name">Support {{ $userName ?? '"this Bitch"'}}</p>
            </div>
            <div class="campaign-qr-gcash">
                <p>Open your GCash app and scan the QR code to donate.</p>
                <div class="campaign-qr-img">
                    <img src="{{ asset('images/gcash-qr.png') }}">
                </div>
            </div>
            <div class="campaign-qr-paypal">
                <p>Open your PayPal app and scan the QR code to donate.</p>
                <div class="campaign-qr-img">
                    <img src="{{ asset('images/paypal-qr.png') }}">
                </div>
            </div>
            <div class="donation-action-btns">
                <div class="btn-secondary back">Back</div>
                <div class="btn-primary proceed">Done</div>
            </div>        
         </div>

         <div class="donation upload-receipt hide">
            <div class="donation-options">
                <p class="donation-name">Support {{ $userName ?? '"this Bitch"'}}</p>
            </div>
            <div class="campaign-qr">
                <p>Upload your receipt to track your donation.</p>
                <div class="input-fields">                        
                    <div class="upload-container">
                        <div class="image-frame">
                            <div class="placeholder">
                                <div class="placeholder-icon">
                                    <div></div>
                                    <div></div>
                                </div> 
                            </div>
                            <img class="image-preview" alt="Preview">
                        </div>
                        <input type="file" class="file-input" accept="image/*" name="profilePicture">
                    </div>                      
                </div>
            </div>
            <div class="donation-action-btns">
                <div class="btn-secondary back">Back</div>
                <div class="btn-primary proceed disabled">Done</div>
            </div> 
         </div>
 
         <div class="donation confirmation-popup hide">
            <i class="fa-solid fa-circle-check fa-2xl" style="color: #707af2; font-size:80px; padding: 2px;"></i>
            <h1>Donation Successful</h1> 
            <p>Thank you for your donation!</p>
         </div>
    </div>
</div>