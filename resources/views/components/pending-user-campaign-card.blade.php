<div class="campaign-card-sm">

    <div class="campaign-card-sm-header">
        <div class="campaign-card-sm-avatar">
            <img src="{{ asset('images/Andrea.png') }}">
            <i class="fi fi-ss-check-circle"></i>
        </div>
        <div class="campaign-card-sm-user-info">
            <h3 class="campaign-card-sm-user-name">Andrea</h3>
            <p class="campaign-card-sm-user-meta">3rd Year | BS Information Technology</p>
        </div>
    </div>

    <div class="campaign-card-sm-image">
        <img src="{{ asset('images/Maria.png') }}">
        <div class="campaign-card-sm-progress-overlay">
            <p class="campaign-card-sm-raised">₱ {{ number_format(30000, 0) }} raised of ₱ {{ number_format(50000, 0) }}</p>
            <div class="campaign-card-sm-progress-bar">
                <div class="campaign-card-sm-progress-fill" style="--percentWidth: {{ (30000 / 50000) * 100 }}%"></div>
            </div>
        </div>
    </div>

    <div class="campaign-card-sm-content">
        <div class="badge-funded-percent">
            <div class="campaign-card-sm-pending">
                Pending
            </div>            
            <div class="campaign-badge-detail"> 
                Learning Material
            </div>
        </div>
        <p class="campaign-card-sm-title">Code for a Cause</p>
        <p class="campaign-card-sm-description">{{ Str::limit("Lorem ipsum dolor sit ame", 120) }}</p>
        <div class="campaign-actions">
            <button class="campaign-action-btn btn-disabled" disabled title="Campaign not yet approved">
                <i class="fa-solid fa-eye-slash"></i>
                <span>Not Available</span>
            </button>
            <button class="campaign-action-btn btn-edit-pending" onclick="openEditCampaignModal(1)" title="Edit Campaign">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Edit</span>
            </button>
            <button class="campaign-action-btn btn-cancel-pending" onclick="openCancelCampaignModal(1)" title="Cancel Campaign">
                <i class="fa-solid fa-ban"></i>
                <span>Cancel</span>
            </button>
        </div>
    </div>
</div>

<!-- Edit Campaign Modal -->
<div class="modal-overlay" id="editCampaignModal">
    <div class="modal-container edit-campaign-modal">
        <div class="modal-header-with-close">
            <div>
                <h2 class="modal-title">Edit Campaign</h2>
                <p class="modal-subtitle">Update your campaign details before approval</p>
            </div>
            <button class="modal-close-btn" onclick="closeEditCampaignModal()">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Campaign Image Upload -->
            <div class="form-group">
                <label>Campaign Image</label>
                <div class="edit-image-container" onclick="document.getElementById('editCampaignImage').click()">
                    <img id="editImagePreview" src="{{ asset('images/Maria.png') }}" alt="Campaign Image">
                    <div class="edit-image-overlay">
                        <i class="fa-solid fa-camera"></i>
                        <span>Change Image</span>
                    </div>
                </div>
                <input type="file" id="editCampaignImage" accept="image/*" style="display: none;">
            </div>

            <!-- Category Selection -->
            <div class="form-group">
                <label>Category <span class="required">*</span></label>
                <select id="editCategory" class="form-select">
                    <option value="">Select a category</option>
                    <option value="tuition">Tuition Fee</option>
                    <option value="learning" selected>Learning Material</option>
                    <option value="essentials">Living Essentials</option>
                    <option value="health">Health Assistance</option>
                    <option value="research">Research</option>
                    <option value="emergency">Emergency Fund</option>
                    <option value="activities">Extracurricular</option>
                    <option value="general">General Assistance</option>
                </select>
            </div>

            <!-- Goal Amount -->
            <div class="form-group">
                <label>Goal Amount (₱) <span class="required">*</span></label>
                <input 
                    type="number" 
                    id="editGoalAmount" 
                    placeholder="₱ 50,000 max" 
                    min="100" 
                    max="50000" 
                    value="50000"
                    required>
                <small class="form-hint">Maximum goal amount is ₱50,000</small>
                <small class="error-message" id="goalError" style="display: none; color: #EF4444; font-weight: 600;">
                    Goal amount must be between ₱100 and ₱50,000
                </small>
            </div>

            <!-- Date of Need -->
            <div class="form-group">
                <label>Date of Need <span class="required">*</span></label>
                <input type="date" id="editDateOfNeed" required>
                <small class="form-hint">When do you need the funds by?</small>
                <small class="error-message" id="dateError" style="display: none; color: #EF4444; font-weight: 600;">
                    Date must be in the future
                </small>
            </div>

            <!-- Campaign Title -->
            <div class="form-group">
                <label>Campaign Title <span class="required">*</span></label>
                <input 
                    type="text" 
                    id="editTitle" 
                    placeholder="e.g., Help Me Pay My Med Tuition" 
                    maxlength="60"
                    value="Code for a Cause"
                    required>
                <div class="char-counter">
                    <span id="editTitleCounter">17</span>/60 characters
                </div>
            </div>

            <!-- Campaign Description -->
            <div class="form-group">
                <label>Campaign Description <span class="required">*</span></label>
                <textarea 
                    id="editDescription" 
                    rows="6" 
                    maxlength="5000" 
                    placeholder="Share your story, background, and goals..."
                    required>Lorem ipsum dolor sit ame</textarea>
                <div class="char-counter">
                    <span id="editDescriptionCounter">26</span>/5000 characters
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn-cancel" onclick="closeEditCampaignModal()">Cancel</button>
            <button class="btn-submit" onclick="saveEditedCampaign()">Save Changes</button>
        </div>
    </div>
</div>

<!-- Cancel Campaign Confirmation Modal -->
<div class="modal-overlay" id="cancelCampaignModal">
    <div class="modal-container confirm-modal">
        <div class="modal-icon-warning">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <h2 class="modal-title">Cancel Campaign?</h2>
        <p class="modal-subtitle">Are you sure you want to cancel this pending campaign? This action cannot be undone. Your campaign will be permanently deleted and removed from the review queue.</p>
        
        <div class="modal-footer">
            <button class="btn-cancel" onclick="closeCancelCampaignModal()">Go Back</button>
            <button class="btn-delete" onclick="confirmCancelCampaign()">
                <i class="fa-solid fa-ban"></i>
                Cancel Campaign
            </button>
        </div>
    </div>
</div>

<script src="{{ asset('js/pendingcampaigncard.js') }}"></script>