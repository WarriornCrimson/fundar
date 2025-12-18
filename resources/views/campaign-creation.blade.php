<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Campaign | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/campaign-creation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
    <div class="campaign-creation-divider">
        <a class="go-to-prev back-btn" href="{{ url()->previous() }}">
            <i class="fas fa-arrow-left"></i>
        </a>
    <div class="campaign-creation-container">
    <!-- Step 1: Category Selection -->
    <div id="step-1" class="step-content active">
        
        <div class="step-header">
            <p class="step-indicator">Step 1 of 7</p>
            <p class="completion-text">14.29% complete</p>
        </div>
        
        <div class="progress-bar">
            <div class="progress-fill" style="width: 14.29%"></div>
        </div>
        
        <div class="step-body first-step">
            <h1>What are you fundraising for?</h1>
            <p class="subtitle">Pick a category to help donors understand your cause.</p>
            
            <div class="category-grid">
                <div class="category-card" data-category="tuition">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="category-info">
                        <h3>Tuition Fee</h3>
                        <p>Enrollment fees, exam fees, school fees.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="learning">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="category-info">
                        <h3>Learning Material</h3>
                        <p>Books, notebooks, supplies, gadgets, laptop.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="essentials">
                    <div class="category-icon">
                        <i class="fas fa-apple-alt"></i>
                        <i class="fas fa-bus"></i>
                    </div>
                    <div class="category-info">
                        <h3>Living Essentials</h3>
                        <p>Food, transportation, rent, utilities, uniforms.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="health">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="category-info">
                        <h3>Health Assistance</h3>
                        <p>Hospital bills, medicines, check-ups.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="research">
                    <div class="category-icon">
                        <i class="fas fa-flask"></i>
                        <i class="fas fa-microscope"></i>
                    </div>
                    <div class="category-info">
                        <h3>Research</h3>
                        <p>Thesis printing, experiments, project supplies.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="emergency">
                    <div class="category-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                        <i class="fas fa-house-damage"></i>
                    </div>
                    <div class="category-info">
                        <h3>Emergency Fund</h3>
                        <p>Family emergencies, disasters, accidents.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="activities">
                    <div class="category-icon">
                        <i class="fas fa-trophy"></i>
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="category-info">
                        <h3>Extracurricular</h3>
                        <p>Sports, contests, trips, student events.</p>
                    </div>
                </div>
                
                <div class="category-card" data-category="general">
                    <div class="category-icon">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="category-info">
                        <h3>General Assistance</h3>
                        <p>Personal needs, one-time help, others.</p>
                    </div>
                </div>

                <button class="btn-next" id="step1-next">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Step 2: Goal Amount & Payment Method -->
    <div id="step-2" class="step-content">
        
        <div class="step-header">
            <p class="step-indicator">Step 2 of 7</p>
            <p class="completion-text">28.57% complete</p>
        </div>
        
        <div class="progress-bar">
            <div class="progress-fill" style="width: 28.57%"></div>
        </div>
        
        <div class="step-body">
            <div class="form-section">
                <h1>How much do you need to raise?</h1>
                <p class="subtitle">Set a goal to show donors how much support you need for your campaign.</p>
                
                <div class="form-group">
                    <label>Goal Amount (₱) <span class="required">*</span></label>
                    <input type="number" id="goal-amount" placeholder="₱ 50,000 max" min="100" max="50000" required>
                    <small>Set a realistic goal based on your actual needs.</small>
                </div>

                <div class="form-group">
                    <label>Date of Need <span class="required">*</span></label>
                    <input type="date" id="date-of-need" required>
                    <small>When do you need the funds by?</small>
                </div>
            </div>
            
            <div class="form-section">
                <h1>How can donors send you funds?</h1>
                <p class="subtitle">Select your preferred e-wallet method.</p>
                
                <div class="payment-methods">
                    <div class="payment-card" data-wallet="gcash">
                        <div class="payment-icon">
                            <img src="{{ asset('images/GCash.png') }}">
                        </div>
                    </div>
                    
                    <div class="payment-card" data-wallet="paypal">
                        <div class="payment-icon">
                            <img src="{{ asset('images/PayPal.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="step-actions">
                <button class="btn-outline" id="step2-back-btn">Back</button>
                <button class="btn-primary" id="step2-next">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 3: Campaign Picture -->
    <div id="step-3" class="step-content">
        
        <div class="step-header">
            <p class="step-indicator">Step 3 of 7</p>
            <p class="completion-text">42.86% complete</p>
        </div>
        
        <div class="progress-bar">
            <div class="progress-fill" style="width: 42.86%"></div>
        </div>
        
        <div class="step-body">
            <h1>Add a campaign picture.</h1>
            <p class="subtitle">A photo makes your story real. Upload a photo that shows what your campaign is all about.</p>
            
            <div class="upload-container">
                <div class="image-frame" id="campaign-image-frame">
                    <div class="placeholder" id="campaign-placeholder">
                        <div class="placeholder-icon">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <img id="campaign-preview" alt="Campaign preview">
                </div>
                <input type="file" id="campaign-image-input" accept="image/*" hidden>
                <p class="upload-hint">Show your campaign with a photo.</p>
            </div>
            
            <div class="step-actions">
                <button class="btn-outline" id="step3-back-btn">Back</button>
                <button class="btn-primary" id="step3-next">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 4: Campaign Title & Story -->
    <div id="step-4" class="step-content">
        
        <div class="step-header">
            <p class="step-indicator">Step 4 of 7</p>
            <p class="completion-text">57.14% complete</p>
        </div>
        
        <div class="progress-bar">
            <div class="progress-fill" style="width: 57.14%"></div>
        </div>
        
        <div class="step-body">
            <h1>Give your campaign a title and story.</h1>
            <p class="subtitle">Telling your story helps donors see how you're part of their journey.</p>
            
            <div class="form-group">
                <label>Title <span class="required">*</span></label>
                <div class="with-refine">
                    <input type="text" id="campaign-title" placeholder="e.g., Help Me Pay My Med Tuition" maxlength="1000" required>
                    <button class="refine-btn">
                        <i class="fi fi-rr-magic-wand"></i>
                        Refine
                    </button>
                </div>
                <div class="char-counter">
                    <span id="title-counter">0</span>/60
                </div>
            </div>
            
            <div class="form-group">
                <label>Share Your Story <span class="required">*</span></label>
                <div class="with-refine">
                    <textarea id="campaign-story" placeholder="Share the background, and the goals behind support." maxlength="5000" rows="8" required></textarea>
                    <button class="refine-btn">
                        <i class="fi fi-rr-magic-wand"></i>
                        Refine
                    </button>
                    <div class="char-counter">
                        <span id="story-counter">0</span>/5000 Characters
                    </div>
                </div>
            </div>
            
            <div class="step-actions">
                <button class="btn-outline" id="step4-back-btn">Back</button>
                <button class="btn-primary" id="step4-next">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 5: Campaign Preview -->
    <div id="step-5" class="preview-con step-content">
        <div class="step-5-header">
            <div class="step-header">
                <p class="step-indicator">Step 5 of 7</p>
                <p class="completion-text">71.43% complete</p>
            </div>
            
            <div class="progress-bar">
                <div class="progress-fill" style="width: 71.43%"></div>
            </div>
        </div>
        <div class="step-body">
            <h1>Preview your campaign.</h1>
            <p class="subtitle">Double-check your project before sending it for approval.</p>
            
            <div class="campaign-card">
            <!-- User Info -->
            <div class="user-info ">
                <div class="verified-profile">
                    <img src="{{ asset('images/Andrea.png') }}" alt="" class="user-avatar">
                    <i class="fi fi-ss-check-circle"></i>
                </div> 
                <div class="user-details">
                    <h3 class="user-name">Andrea</h3>
                    <p class="user-meta">3rd Year | BS Information Technology</p>
                </div>
                <button class="bookmark-btn">
                    <i class="fa-regular fa-bookmark"></i> 
                </button>
            </div>

            <!-- Campaign Image -->
            <div class="campaign-image">
                <img src="" alt="">
                <span class="campaign-badge"></span>
            </div>

            <!-- Campaign Title -->
            <h2 class="campaign-title"></h2>

            <!-- Campaign Description -->
            <p class="campaign-description"></p>

            <!-- Progress Bar -->
            <div class="campaign-progress">
                <div class="progress-info">
                    <span class="progress-amount">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        
                    </span>
                    <span class="progress-percentage"></span>
                </div>
                <div class="progress-bar-green">
                    <div class="progress-fill-green"></div>
                </div>
            </div>

    <!-- Action Buttons -->
        <div class="campaign-actions">
            <a class="btn donate-btn">Donate</a>
            <a class="btn see-more-btn">Read More</a>
            <div class="quick-actions">
                <div class="vote-count">
                    <button class="action-btn share-up" title="Share Up">
                        <i class="fa-solid fa-arrow-up"></i>
                    </button>
                    <p class="vote-number hidden"></p>
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
                    <p class="vote-number hidden"> </p>
                </div>
            </div>
        </div>

</div>
            
            <div class="step-actions">
                <button class="btn-outline" id="step5-back-btn">Back</button>
                <button class="btn-primary" id="step5-next">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 6: Campaign Rules -->
    <div id="step-6" class="step-content">
        
        <div class="step-header">
            <p class="step-indicator">Step 6 of 7</p>
            <p class="completion-text">85.71% complete</p>
        </div>
        
        <div class="progress-bar">
            <div class="progress-fill" style="width: 85.71%"></div>
        </div>
        
        <div class="step-body">
            <h1>Know the campaign rules.</h1>
            <p class="subtitle">FUNDar is a student-centric donation platform made to support your causes and ideas.</p>
            
            <div class="rules-container">
                <div class="rules-header">
                    <i class="fas fa-shield-alt"></i>
                    <h3>POLICY</h3>
                </div>
                
                <div class="rules-content">
                    <p class="rules-intro">To keep things safe and fair for everyone, users MUST:</p>
                    <ol class="rules-list">
                        <li>Share honest, updated with donors.</li>
                        <li>Link payments only to the verified PayPal or GCash listed on their profile.</li>
                        <li>Use funds only for the purposes described in their campaign.</li>
                        <li>Avoid organizing offensive, or unlawful fundraisers.</li>
                        <li>Close or update your campaign once your goal is reached.</li>
                    </ol>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="agree-terms" required>
                    <label for="agree-terms">
                        I have read and agree to the terms and conditions, privacy policy, and campaign guidelines. I confirm that all information provided is true/full and truthful.
                    </label>
                </div>
            </div>
            
            <div class="step-actions">
                <button class="btn-outline" id="step6-back-btn">Back</button>
                <button class="btn-primary" id="step6-submit" disabled>Submit</button>
            </div>
        </div>
    </div>

    <!-- Step 7: Success -->
    <!-- Step 7: Success -->
<div id="step-7" class="step-content">
    <div class="step-header">
        <p class="step-indicator">Step 7 of 7</p>
        <p class="completion-text">100% complete</p>
    </div>
    
    <div class="progress-bar">
        <div class="progress-fill" style="width: 100%"></div>
    </div>
    
    <div class="step-body success-body">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>You're all set!</h1>
        <p class="subtitle">We’ll give your campaign a quick review, then it’ll be ready to launch.</p>

        <!-- Campaign Card Small - Preview of submitted campaign -->
        <div class="campaign-card-sm">
            <!-- User Header -->
            <div class="campaign-card-sm-header">
                <div class="campaign-card-sm-avatar">
                    <img src="{{ asset('images/Andrea.png') }}" alt="User Avatar">
                    <i class="fi fi-ss-check-circle"></i>
                </div>
                <div class="campaign-card-sm-user-info">
                    <h3 class="campaign-card-sm-user-name">Andrea</h3>
                    <p class="campaign-card-sm-user-meta">3rd Year | BS Information Technology</p>
                </div>
            </div>

            <!-- Campaign Image with Progress Overlay -->
            <div class="campaign-card-sm-image">
                <img src="" alt="Campaign Image">
                <div class="campaign-card-sm-progress-overlay">
                    <p class="campaign-card-sm-raised">₱ 0 raised of ₱ 0</p>
                    <div class="campaign-card-sm-progress-bar">
                        <div class="campaign-card-sm-progress-fill" style="--percentWidth: 0%;"></div>
                    </div>
                </div>
            </div>

            <!-- Campaign Content -->
            <div class="campaign-card-sm-content">
                <div class="badge-funded-percent">
                    <div class="campaign-card-sm-funded">0% Funded</div>            
                    <div class="campaign-badge-detail">Category</div>
                </div>
                <p class="campaign-card-sm-title">Campaign Title</p>
                <p class="campaign-card-sm-description">Campaign description will appear here...</p>
            </div>
        </div>
        
        <p class="success-message">We'll notify you once your campaign is approved (typically 2-5 business days)!</p>
        
        <button class="btn-primary" id="return-home">Return to Home</button>
    </div>
</div>

<!-- QR Upload Modal -->
<div id="qr-modal" class="modal">
    <div class="modal-content">
        <h2>Upload your <span id="wallet-type">GCash</span> QR</h2>
        <p>Submit a clear image of your <span id="wallet-type-2">GCash</span> QR for donors to scan.</p>
        
        <div class="qr-upload-area" id="qr-upload-area">
            <button class="btn-photo">
                <i class="fas fa-plus"></i> 
            </button>
            <div class="qr-preview-container">
                <img id="qr-preview" alt="QR Preview" style="display: none;">
            </div>
        </div>
        <input type="file" id="qr-file-input" accept="image/*" hidden>
        
        <div class="modal-actions">
            <button class="btn-outline" id="qr-cancel">Cancel</button>
            <button class="btn-primary" id="qr-save">Save</button>
        </div>
    </div>
</div>
    </div>
<script src="{{ asset('js/campaign-creation.js') }}"></script>
</body>
</html>