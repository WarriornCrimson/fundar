<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Details | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign-details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign-card-sm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
</head>
<body>  
    <div class="campaign-details">
        <!-- Back Button -->
        <div class="back-navigation">
            <a href="{{ url()->previous() }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back</span>
            </a>
        </div>

        <div class="campaign-details-container">
            <!-- Left Column: Campaign Content -->
            <div class="campaign-content">
                <!-- User Info Header -->
                <div class="user-info-header">
                    <div class="verified-profile">
                        <img src="{{ $campaign['userAvatar'] ?? asset('images/StudentCharacter.png') }}" alt="{{ $campaign['userName'] }}" class="user-avatar">
                        <i class="fi fi-ss-check-circle"></i>
                    </div>
                    <div class="user-details">
                        <h3 class="user-name">{{ $campaign['userName'] }}</h3>
                        <p class="user-meta">{{ $campaign['userYear'] }} | {{ $campaign['userCourse'] }}</p>
                    </div>
                    <button class="bookmark-btn-detail">
                        <i class="fa-regular fa-bookmark"></i>
                    </button>
                </div>

                <!-- Campaign Image -->
                <div class="campaign-image-detail">
                    <img src="{{ $campaign['campaignImage'] }}" alt="{{ $campaign['campaignTitle'] }}">
                    <span class="campaign-badge-detail">{{ $campaign['badge'] ?? 'Learning Material' }}</span>
                </div>

                <!-- Tabs Navigation -->
                <div class="tabs-navigation">
                    <button class="tab-btn active" data-tab="story">Campaign Story</button>
                    <button class="tab-btn" data-tab="comments">Comments</button>
                    <button class="tab-btn" data-tab="donations">Donations</button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Campaign Story Tab -->
                    <div class="tab-panel active" id="story-panel">
                        <div class="campaign-story-header">
                            <h2>About this Campaign</h2>
                        </div>
                        
                        <div class="campaign-story-content">
                            <h1>{{ $campaign['campaignTitle'] }}</h3>                  
                            <p>{{ $campaign['campaignDescription'] }}</p>
                        </div>
                    </div>

                    <!-- Comments Tab -->
                    <div class="tab-panel" id="comments-panel">
                        <div class="comment-story-header">
                            <h2>Comments ({{ count($campaign['comments']) }})</h2>
                        </div>

                        <div class="current-user-comment-area">
                            <div class="user-info-header">
                                <div class="verified-profile">
                                    <img src="{{ asset('images/Andrea.png') }}" alt="Andrea Torreon" class="user-avatar">
                                    <i class="fi fi-ss-check-circle"></i>
                                </div>
                                <div class="user-details">
                                    <h3 class="user-name">Andrea</h3>
                                    <p class="user-meta">3rd Year | BS Information Technology</p>
                                </div>
                            </div>
                            <textarea class="write-comment-area" maxlength="500" placeholder="Write your comment here..."></textarea>
                            <p class="comment-limit"><span id="count">0</span> / 500 characters</p>
                            <div class="comment-cancel-post"><button class="btn-cancel cancel-edit hide">Cancel</button><button class="btn-primary disabled post-comment">Post</button></div>
                        </div>

                        <div class="comments-section">
                            <div class="user-comment hide">
                                <div class="user-info-header">
                                    <div class="verified-profile">
                                        <img src="{{ asset('images/Andrea.png') }}" alt="Andrea Torreon" class="user-avatar">
                                        <i class="fi fi-ss-check-circle"></i>
                                    </div>
                                    <div class="user-details">
                                        <h2 class="user-name">Andrea • <span class="postTime" ></span></h2>
                                        <p class="user-meta">Student</p>
                                    </div>
                                    <div class="comment-ellipsis">
                                       <i class="fi fi-rs-menu-dots"></i>
                                    </div>

                                <!--Edit/Delete Popup-->
                                    <div class="comment-settings">
                                        <div class="edit-comment">
                                            <i class="fi fi-rr-pen-field"></i>
                                            <p>Edit</p>
                                        </div> 

                                        <div class="delete-comment">
                                            <i class="fi fi-rs-trash"></i>
                                            <p>Delete</p>
                                        </div>                                       
                                    </div>
                                </div> 
                                <div class="comment-content">
                                    
                                </div>
                                <div class="heart" title="Thank this comment">
                                    <div class="heart-count-con">
                                        <i class="fi fi-rr-heart"></i>
                                        <p class="heart-count hide">0</p>
                                    </div>
                                </div>               
                            </div>                        

                            @foreach($campaign['comments'] as $comment)
                            <div class="user-comment">
                                <div class="user-info-header">
                                    <div class="verified-profile">
                                        <img src="{{ $comment['userAvatar'] ?? asset('images/StudentCharacter.png') }}" alt="{{ $comment['userName'] }}" class="user-avatar">
                                        <i class="fi fi-ss-check-circle"></i>
                                    </div>
                                    <div class="user-details">
                                        <h2 class="user-name">{{ $comment['userName'] }}<span class="postTime"> • {{ $comment['postedTime'] }}</span></h2>
                                        <p class="user-meta">{{ $comment['userCourse'] }}</p>
                                    </div>
                                </div> 
                                <div class="comment-content">
                                    {{ $comment['content'] }}
                                </div>
                                <div class="heart" title="Thank this comment">
                                    <div class="heart-count-con">
                                        <i class="fi fi-rr-heart"></i>
                                        <p class="heart-count">{{ $comment['heartCount']}}</p>
                                    </div>
                                </div>               
                            </div>
                            @endforeach
                            
                            @if(empty($campaign['comments']))
                                <p class="no-comments">No comments yet. Be the first to comment!</p>
                            @endif
                        </div>
                    </div>

                    <!-- Donations Tab -->
                    <div class="tab-panel" id="donations-panel">
                        <div class="campaign-story-header">
                            <h2>Recent Donations ({{ count($campaign['donations']) }})</h2>
                        </div>
                        <div class="donations-section">

                        @foreach($campaign['donations'] as $donation)
                            <div class="user-donation">
                                <div class="donor-name donor-detail">
                                    <h2>{{ $donation['donorName']}}</h2>
                                    <p>{{ $donation['postedTime']}}</p>
                                </div>
                                <div class="donor-detail donation-amount">
                                    <h2>₱ {{ number_format($donation['amount']) }}</h2>
                                    <p>{{ $donation['mode'] }}</p>                                    
                                </div>
                                <div class="heart">
                                    <div class="heart-count-con">
                                        <i class="fi fi-rr-heart"></i>
                                        <p class="heart-count">{{ $donation['donationHeart'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if(empty($campaign['donations']))
                            <p class="no-donations">Donation history will appear here.</p>
                        @endif
                        </div>
                    </div>
                </div>

                <hr class="end-section-hr">

                <div class="similar-campaigns-section">
                <h2>Similar Campaigns</h2>
                <div class="campaigns-grid"> 
                @foreach($campaign['similarCampaigns'] as $similar)
                <x-campaign-card-sm
                                :user-name="$similar['userName']"
                                :user-year="$similar['userYear']"
                                :user-course="$similar['userCourse']"
                                :user-avatar="$similar['userAvatar']"
                                :category="$similar['badge']"
                                :campaignId="$similar['campaignId']"
                                :campaign-image="$similar['campaignImage']"
                                :raised-amount="$similar['raisedAmount']"
                                :goal-amount="$similar['goalAmount']"
                                :campaign-title="$similar['campaignTitle']"
                                :campaign-description="$similar['campaignDescription']"
                />
                @endforeach
                </div>
                </div>
            </div>

            <!-- Right Column: Campaign Progress -->
            <div class="campaign-sidebar">
                <h2 class="progress-title">Campaign Progress</h2>
                <div class="campaign-progress-card">
                    
                    <div class="amount-raised">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span class="amount-text">₱ {{ number_format($campaign['raisedAmount']) }}</span>
                        <span class="goal-text">of ₱ {{ number_format($campaign['goalAmount']) }}</span>
                    </div>

                    <div class="progress-bar-detail">
                        <div class="progress-fill-detail" style="--width: {{ $campaign['fundedPercentage'] }}%"></div>
                    </div>

                    <p class="funded-percentage">{{ $campaign['fundedPercentage'] }}% Funded</p>

                    <div class="campaign-meta">
                        <div class="meta-item">
                            <i class="fa-regular fa-clock"></i>
                            <span>{{ $campaign['goalDate'] ?? 'Oct 9' }} — Goal Needed</span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                            <span>{{ count($campaign['donations']) ?? 0 }} donations</span>
                        </div>
                    </div>

                    <div class="campaign-stats-float">
                    <button class="donate-btn-detail">Donate</button>
                        <div class="action-buttons">
                            <div class="vote-count">
                            <button class="action-btn-detail share-up-detail" title="Share Up">
                                <i class="fa-solid fa-arrow-up"></i>
                            </button>
                            <p class="vote-number hidden">{{ $campaign['voteCount'] }}</p>
                            </div>
                            <div class="vote-count">
                                <button class="action-btn-detail share-down-detail" title="Share Down">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </button>

                            </div>
                            <div class="vote-count">
                            <button class="action-btn-detail copy-link-detail" title="Copy Link">
                                <i class="fa-solid fa-link"></i>
                            </button>
                            <p class="vote-number hidden">{{ $campaign['copyLinkNum'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

        <!--Donation Process-->
    <div class="donation-popup-blur">
         <div class="donation donation-options">
            <p class="donation-name">Support {{ $campaign['userName'] ?? '"this Bitch"'}}</p>
            <div class="campaign-summary">
                <p>You're Supporting</p>
                <div class="summary-content">
                    <p class="campaign-title-sm">{{ $campaign['campaignTitle'] }}</p>
                    <p class="campaign-background">{{ $campaign['campaignSummary'] }}</p>
                    <div class="progress-bar-detail">
                        <div class="progress-fill-detail" style="--width: {{ $campaign['fundedPercentage'] }}%"></div>
                    </div>
                    <div class="progress-amount-right">
                            ₱ {{ number_format($campaign['raisedAmount']) }} raised of ₱ {{ number_format($campaign['goalAmount']) }}
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
                <p class="donation-name">Support {{ $campaign['userName'] ?? '"this Bitch"'}}</p>
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
                <p class="donation-name">Support {{ $campaign['userName'] ?? '"this Bitch"'}}</p>
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

    <div class="save-campaign">
    </div>
    
    <script src="{{ asset('js/campaign-details.js') }}"></script>
</body>
</html>