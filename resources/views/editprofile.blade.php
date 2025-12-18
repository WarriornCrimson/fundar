<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings| FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/edit-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/campaign-details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head> 
<body>
    <x-side-bar/>

    <div class="modal-overlay">
        <div class="modal-container confirm-modal">
            <h2 class="modal-title">Are you sure you want to delete your account?</h2>
            <p class="modal-subtitle">This will permanently delete your account on FUNDar.</p>
            <div class="modal-footer">
                <button class="btn-canceldelete" id="cancelDelete">Cancel</button>
                <button class="btn-delete" id="confirmDelete">Delete</button>
            </div>
        </div>
    </div>
     
    <div class="edit-profile-container">
        <!-- Back Button and Title -->
        <div class="page-header">
            <div class="back-navigation">
                <a href="{{ route('profile') }}" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back</span>
                </a>
            </div>
            <h1 class="page-title">Account Settings</h1>
        </div> 

        <!-- Form Container -->
        <div class="form-container">
            <form id="editProfileForm">
                <!-- Profile Picture Section -->
                <div class="profile-picture-section">
                    <div class="profile-picture-wrapper">
                        <img src="{{ asset('images/Andrea.png') }}" alt="Profile" class="profile-picture" id="profilePicture">
                    </div>
                    <div class="account-settings">
                        <button class="btn-change-picture" id="changePictureBtn">
                            Change Profile
                        </button>
                        <button class="btn-delete delete-account">Delete Account</button>
                    </div>
                    <input type="file" id="profilePictureInput" accept="image/*" style="display: none;">
                </div>
                <!-- Personal Background -->
                <div class="form-section">
                    <h2 class="section-heading">Personal Background</h2>
                    
                    <div class="form-row-2">
                        <div class="form-field">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" id="firstName" value="Andrea" placeholder="Andrea" required>
                        </div>
                        <div class="form-field">
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" id="lastName" value="Torreon" placeholder="Torreon" required>
                        </div>
                    </div>

                    <div class="form-field">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" id="email" value="andreatorreon01@gmail.com" placeholder="andreatorreon01@gmail.com" required>
                    </div>
                </div>

                <!-- Address -->
                <div class="form-section">
                    <h2 class="section-heading">Address</h2>
                    
                    <div class="form-row-3">
                        <div class="form-field">
                            <label>Province</label>
                            <input type="text" id="province" placeholder="Province">
                        </div>
                        <div class="form-field">
                            <label>City/Municipality</label>
                            <input type="text" id="city" placeholder="City/Municipality">
                        </div>
                        <div class="form-field">
                            <label>Zip Code (Optional)</label>
                            <input type="text" id="zipCode" placeholder="Zip Code">
                        </div>
                    </div>

                    <div class="form-row-2">
                        <div class="form-field">
                            <label>Barangay</label>
                            <input type="text" id="barangay" placeholder="Barangay">
                        </div>
                        <div class="form-field">
                            <label>Street/House (Optional)</label>
                            <input type="text" id="street" placeholder="Street/House">
                        </div>
                    </div>
                </div>

                <!-- About Me -->
                <div class="form-section">
                    <h2 class="section-heading">About Me</h2>
                    <div class="form-field">
                        <textarea id="aboutMe" rows="5" maxlength="500" placeholder="Tell us about yourself and what you aspire to be..."></textarea>
                        <div class="char-counter">
                            <span id="aboutMeCount">0</span>/500 characters
                        </div>
                    </div>
                </div>

                <!-- Achievements -->
                <div class="form-section">
                    <h2 class="section-heading">Achievements</h2>
                    <div class="achievement-input-wrapper">
                        <input 
                            type="text" 
                            id="achievementInput" 
                            class="achievement-input" 
                            placeholder="Add new achievement..."
                        >
                        <button type="button" class="btn-add-achievement" id="addAchievementBtn">
                            <i class="fa-solid fa-plus"></i>
                            Add
                        </button>
                    </div>

                    <div class="achievements-container" id="achievementsContainer">
                        <!-- Achievement badges will appear here -->
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="form-actions">
                    <a href="{{ route('profile') }}" class="btn-cancel">Cancel</a>
                    <button type="submit" class="btn-submit">Save Changes</button>
                </div> 
            </form>
        </div>
        
    </div>
 
    <script src="{{ asset('js/edit-profile.js') }}"></script>
</body>
</html>