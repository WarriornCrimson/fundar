// Pending Campaign Card JavaScript
let currentCampaignId = null;
let editedCampaignImage = null;

// Category mapping for display
const categoryNames = {
    'tuition': 'Tuition Fee',
    'learning': 'Learning Material',
    'essentials': 'Living Essentials',
    'health': 'Health Assistance',
    'research': 'Research',
    'emergency': 'Emergency Fund',
    'activities': 'Extracurricular',
    'general': 'General Assistance'
};

// Open Edit Campaign Modal
function openEditCampaignModal(campaignId) {
    currentCampaignId = campaignId;
    const modal = document.getElementById('editCampaignModal');
    
    if (modal) {
        modal.classList.add('active');
        
        // Load current campaign data (would typically come from backend)
        loadCampaignData(campaignId);
        
        // Set up validation and character counters
        setupEditModalValidation();
    }
}

// Close Edit Campaign Modal
function closeEditCampaignModal() {
    const modal = document.getElementById('editCampaignModal');
    if (modal) {
        modal.classList.remove('active');
        currentCampaignId = null;
        editedCampaignImage = null;
    }
}

// Load Campaign Data for Editing
function loadCampaignData(campaignId) {
    const sampleData = {
        image: '{{ asset("images/AndreaCampaign.png") }}',
        category: 'learning',
        goalAmount: 50000,
        dateOfNeed: '2025-12-31',
        title: 'Code for a Cause', 
        description: 'Lorem ipsum dolor sit ame'
    };
    
    // Populate form fields
    const imagePreview = document.getElementById('editImagePreview');
    if (imagePreview) {
        imagePreview.src = sampleData.image;
    }
    
    const categorySelect = document.getElementById('editCategory');
    if (categorySelect) {
        categorySelect.value = sampleData.category;
    }
    
    const goalInput = document.getElementById('editGoalAmount');
    if (goalInput) {
        goalInput.value = sampleData.goalAmount;
    }
    
    const dateInput = document.getElementById('editDateOfNeed');
    if (dateInput) {
        dateInput.value = sampleData.dateOfNeed;
    }
    
    const titleInput = document.getElementById('editTitle');
    if (titleInput) {
        titleInput.value = sampleData.title;
        updateCharCounter('editTitle', 'editTitleCounter', 60);
    }
    
    const descriptionInput = document.getElementById('editDescription');
    if (descriptionInput) {
        descriptionInput.value = sampleData.description;
        updateCharCounter('editDescription', 'editDescriptionCounter', 5000);
    }
}

// Setup Edit Modal Validation
function setupEditModalValidation() {
    // Image Upload Handler
    const imageInput = document.getElementById('editCampaignImage');
    const imagePreview = document.getElementById('editImagePreview');
    
    if (imageInput && imagePreview) {
        imageInput.onchange = (e) => {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    editedCampaignImage = event.target.result;
                    imagePreview.src = editedCampaignImage;
                };
                reader.readAsDataURL(file);
            }
        };
    }
    
    // Goal Amount Validation
    const goalInput = document.getElementById('editGoalAmount');
    const goalError = document.getElementById('goalError');
    
    if (goalInput) {
        goalInput.addEventListener('input', () => {
            const value = parseInt(goalInput.value);
            
            if (value < 100 || value > 50000 || isNaN(value)) {
                goalInput.classList.add('invalid');
                goalInput.classList.remove('valid');
                if (goalError) goalError.style.display = 'block';
            } else {
                goalInput.classList.add('valid');
                goalInput.classList.remove('invalid');
                if (goalError) goalError.style.display = 'none';
            }
        });
        
        // Prevent typing more than 50000
        goalInput.addEventListener('keydown', (e) => {
            const value = parseInt(goalInput.value + e.key);
            if (value > 50000 && e.key >= '0' && e.key <= '9') {
                e.preventDefault();
            }
        });
    }
    
    // Date Validation
    const dateInput = document.getElementById('editDateOfNeed');
    const dateError = document.getElementById('dateError');
    
    if (dateInput) {
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
        
        dateInput.addEventListener('change', () => {
            const selectedDate = new Date(dateInput.value);
            const todayDate = new Date();
            todayDate.setHours(0, 0, 0, 0);
            
            if (selectedDate < todayDate) {
                dateInput.classList.add('invalid');
                dateInput.classList.remove('valid');
                if (dateError) dateError.style.display = 'block';
            } else {
                dateInput.classList.add('valid');
                dateInput.classList.remove('invalid');
                if (dateError) dateError.style.display = 'none';
            }
        });
    }
    
    // Title Character Counter and Validation
    const titleInput = document.getElementById('editTitle');
    const titleCounter = document.getElementById('editTitleCounter');
    
    if (titleInput && titleCounter) {
        titleInput.addEventListener('input', () => {
            updateCharCounter('editTitle', 'editTitleCounter', 60);
            
            if (titleInput.value.trim().length > 0) {
                titleInput.classList.add('valid');
                titleInput.classList.remove('invalid');
            } else {
                titleInput.classList.add('invalid');
                titleInput.classList.remove('valid');
            }
        });
    }
    
    // Description Character Counter and Validation
    const descriptionInput = document.getElementById('editDescription');
    const descriptionCounter = document.getElementById('editDescriptionCounter');
    
    if (descriptionInput && descriptionCounter) {
        descriptionInput.addEventListener('input', () => {
            updateCharCounter('editDescription', 'editDescriptionCounter', 5000);
            
            if (descriptionInput.value.trim().length > 0) {
                descriptionInput.classList.add('valid');
                descriptionInput.classList.remove('invalid');
            } else {
                descriptionInput.classList.add('invalid');
                descriptionInput.classList.remove('valid');
            }
        });
    }
    
    // Category Validation
    const categorySelect = document.getElementById('editCategory');
    
    if (categorySelect) {
        categorySelect.addEventListener('change', () => {
            if (categorySelect.value) {
                categorySelect.classList.add('valid');
                categorySelect.classList.remove('invalid');
            } else {
                categorySelect.classList.add('invalid');
                categorySelect.classList.remove('valid');
            }
        });
    }
}

// Update Character Counter
function updateCharCounter(inputId, counterId, maxLength) {
    const input = document.getElementById(inputId);
    const counter = document.getElementById(counterId);
    
    if (input && counter) {
        const currentLength = input.value.length;
        counter.textContent = currentLength;
        
        // Update counter styling based on length
        const counterParent = counter.parentElement;
        counterParent.classList.remove('warning', 'limit');
        
        if (currentLength >= maxLength) {
            counterParent.classList.add('limit');
        } else if (currentLength >= maxLength * 0.9) {
            counterParent.classList.add('warning');
        }
    }
}

// Save Edited Campaign
function saveEditedCampaign() {
    // Get all form values
    const category = document.getElementById('editCategory').value;
    const goalAmount = parseInt(document.getElementById('editGoalAmount').value);
    const dateOfNeed = document.getElementById('editDateOfNeed').value;
    const title = document.getElementById('editTitle').value.trim();
    const description = document.getElementById('editDescription').value.trim();
    
    // Validation
    let isValid = true;
    let errorMessage = '';
    
    if (!category) {
        errorMessage = 'Please select a category';
        isValid = false;
    } else if (isNaN(goalAmount) || goalAmount < 100 || goalAmount > 50000) {
        errorMessage = 'Goal amount must be between ₱100 and ₱50,000';
        isValid = false;
    } else if (!dateOfNeed) {
        errorMessage = 'Please select a date of need';
        isValid = false;
    } else {
        const selectedDate = new Date(dateOfNeed);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            errorMessage = 'Date of need must be in the future';
            isValid = false;
        }
    }
    
    if (!title || title.length === 0) {
        errorMessage = 'Please enter a campaign title';
        isValid = false;
    } else if (title.length > 60) {
        errorMessage = 'Title must be 60 characters or less';
        isValid = false;
    }
    
    if (!description || description.length === 0) {
        errorMessage = 'Please enter a campaign description';
        isValid = false;
    } else if (description.length > 5000) {
        errorMessage = 'Description must be 5000 characters or less';
        isValid = false;
    }
    
    if (!isValid) {
        alert(errorMessage);
        return;
    }
    
    // Prepare updated campaign data
    const updatedCampaign = {
        id: currentCampaignId,
        image: editedCampaignImage || document.getElementById('editImagePreview').src,
        category: category,
        categoryName: categoryNames[category],
        goalAmount: goalAmount,
        dateOfNeed: dateOfNeed,
        title: title,
        description: description,
        updatedAt: new Date().toISOString()
    };
    
    console.log('Saving edited campaign:', updatedCampaign);
    
    // Here you would send this to your backend via AJAX/fetch
    
    // Show success message
    alert('Campaign updated successfully! Your changes are pending approval.');
    
    // Close modal and optionally refresh the page
    closeEditCampaignModal();
    // window.location.reload(); // Uncomment to reload after save
}

// Open Cancel Campaign Modal
function openCancelCampaignModal(campaignId) {
    currentCampaignId = campaignId;
    const modal = document.getElementById('cancelCampaignModal');
    
    if (modal) {
        modal.classList.add('active');
    }
}

// Close Cancel Campaign Modal
function closeCancelCampaignModal() {
    const modal = document.getElementById('cancelCampaignModal');
    
    if (modal) {
        modal.classList.remove('active');
        currentCampaignId = null;
    }
}

// Confirm Cancel Campaign
function confirmCancelCampaign() {
    if (currentCampaignId) {
        console.log('Cancelling campaign:', currentCampaignId);
        
        // Here you would send request to backend to cancel campaign
        
        // Show success message
        alert('Campaign cancelled successfully! Your campaign has been removed from the review queue.');
        
        // Close modal and optionally redirect
        closeCancelCampaignModal();
        
        // Hide the campaign card or redirect
        // window.location.reload();
    }
}

// Close modals when clicking outside
document.addEventListener('DOMContentLoaded', () => {
    const modals = document.querySelectorAll('.modal-overlay');
    
    modals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
});