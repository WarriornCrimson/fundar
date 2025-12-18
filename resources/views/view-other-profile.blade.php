<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('css/pages/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/viewotherprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
 
    <x-side-bar/>
    
    <div class="profile-container"> 
        <!-- Profile Header Card --> 
        <div class="profile-header-card">
            <div class="profile-info">
                <div class="profile">
                    <img src="{{ asset('images/Andrea.png') }}" alt="Andrea Torreon" class="profile-picture" id="profilePicture">
                </div>
                <div class="profile-details">
                    <h1 class="profile-name" id="displayName">Andrea Torreon</h1>
                    <p class="profile-subtitle" id="displaySubtitle">3rd Year | BS in Information Technology</p>
                    <div class="profile-email">
                        <i class="fa-regular fa-envelope"></i>
                        <span id="displayEmail">andreatorreon01@gmail.com</span>
                    </div>
                </div>
                <a href="{{ route('messages') }}" class="send-message btn-primary btn-message" id="sendMessageBtn">
                    <i class="fa-solid fa-paper-plane"></i>
                    Send Message
                </a>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="profile-tabs">
            <button class="tab-btn active" data-tab="portfolio">Portfolio</button>
            <button class="tab-btn" data-tab="campaigns">Campaigns</button>
            <button class="tab-btn" data-tab="contributions">Contributions</button>
            <button class="tab-btn" data-tab="achievements">Achievements</button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content active" id="portfolio">
            <!-- Academic Growth Analytics -->
            <div class="section-card">
                <div class="section-header">
                    <div class="section-title-group">
                        <h2 class="section-title">Academic Growth Analytics</h2>
                        <p class="section-subtitle">Track GWA performance over time.</p>
                    </div>
                </div>
                <div class="empty-state" id="gradesEmptyState">
                    <p>No academic analytics to show.</p>
                </div>
                <div class="grades-chart-container" id="gradesChartContainer" style="display: none;">
                </div>
            </div>

            <!-- Experiences & Activities -->
            <div class="section-card">
                <div class="section-header">
                    <div class="section-title-group">
                        <h2 class="section-title">Experiences & Activities</h2>
                        <p class="section-subtitle">Things I've Been Part Of</p>
                    </div>
                </div>
                <div class="empty-state" id="experiencesEmptyState">
                    <p>No experiences & activities to display.</p>
                </div>
                <div class="experiences-list" id="experiencesList"></div>
            </div>
        </div>

        <div class="tab-content" id="campaigns">
            <div class="section-card">
                <div class="section-title-group">
                    <h2 class="section-title">My Campaigns</h2>
                    <p class="section-subtitle">Campaigns I've made</p>
                </div>                           
                <div class="empty-state">
                    <p>No campaigns to display.</p>
                </div>
            </div>
        </div>

        <div class="tab-content" id="contributions">
            <div class="section-card">
                <div class="section-title-group">
                    <h2 class="section-title">My Contributions</h2>
                    <p class="section-subtitle">Donations I've made so far</p>
                </div>     
                <div class="my-donation-stats">
                    <div class="stat-card sc-1">
                        <div class="stat-card-header">
                            <p>Donations Made</p>
                            <i></i>
                        </div>
                        <div class="stat-card-data">
                            <h1>0</h1>
                        </div>
                    </div>
                    <div class="stat-card sc-2">
                        <div class="stat-card-header">
                            <p>Total Amount</p>
                            <i></i>
                        </div>
                        <div class="stat-card-data">
                            <h1>₱ 0.00</h1>
                        </div>
                    </div>
                    <div class="stat-card sc-3">
                        <div class="stat-card-header">
                            <p>Campaigns Helped</p>
                            <i></i>
                        </div>
                        <div class="stat-card-data">
                            <h1>0</h1>
                        </div>
                    </div>
                    <div class="stat-card sc-4">
                        <div class="stat-card-header">
                            <p>Students Helped</p>
                            <i></i>
                        </div>
                        <div class="stat-card-data">
                            <h1>0</h1>
                        </div>
                    </div>                                                            
                </div>           
                <div class="empty-state">
                    <p>No contributions to display.</p>
                </div> 
            </div>
        </div>

        <div class="tab-content" id="achievements">
            <div class="section-card">
                <div class="section-title-group">
                    <h2 class="section-title">FUNDar Achievements</h2>
                    <p class="section-subtitle">Badges I've earned from my support.</p>
                </div>
                <div class="empty-state">
                    <p>No achievements to display.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Experience Modal -->
    <div class="modal-overlay" id="addExperienceModal">
        <div class="modal-container add-experience-modal">
            <h2 class="modal-title">Add Experience</h2>
            <p class="modal-subtitle">Share a new experience or achievement with potential donors</p>
            
            <div class="modal-body">
                <div class="photo-upload-section">
                    <button class="btn-upload-photo" id="uploadPhotoBtn">
                        <i class="fa-solid fa-plus"></i>
                        Add Photos (Max 3)
                    </button>
                    <input type="file" id="photoInput" accept="image/*" multiple style="display: none;">
                    <div class="photo-preview-grid" id="photoPreviewGrid"></div>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select id="experienceCategory">
                        <option value="">Select a category</option>
                        <option value="Volunteer Work">Volunteer Work</option>
                        <option value="Leadership">Leadership</option>
                        <option value="Academic">Academic</option>
                        <option value="Community Service">Community Service</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Caption</label>
                    <textarea id="experienceCaption" rows="4" maxlength="500" placeholder="Describe your experience..."></textarea>
                    <span class="char-counter"><span id="captionCount">0</span>/500 characters</span>
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" id="experienceDate">
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn-cancel" id="cancelExperience">Cancel</button>
                <button class="btn-submit" id="saveExperience">Save</button>
            </div>
        </div>
    </div>

    <!-- Submit Grades Modal -->
    <div class="modal-overlay" id="submitGradesModal">
        <div class="modal-container submit-grades-modal">
            <h2 class="modal-title">Grades Form</h2>
            <p class="modal-subtitle">Submit a clear copy of your grades for your student profile.</p>
            
            <div class="modal-body">
                <div class="photo-upload-section">
                    <button class="btn-upload-photo" id="uploadGradesBtn">
                        <i class="fa-solid fa-plus"></i>
                        Upload Photo
                    </button>
                    <input type="file" id="gradesPhotoInput" accept="image/*" style="display: none;">
                    <div class="grades-photo-preview" id="gradesPhotoPreview"></div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn-cancel" id="cancelGrades">Cancel</button>
                <button class="btn-submit" id="saveGrades">Save</button>
            </div>
        </div>
    </div>

    <!-- View Experience Modal -->
    <div class="modal-overlay" id="viewExperienceModal">
        <div class="modal-container view-experience-modal">
            <button class="modal-close-btn" id="closeViewModal">
                <i class="fa-solid fa-times"></i>
            </button>
            <div id="viewExperienceContent"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/userprofile.js') }}"></script>
</body>
</html>