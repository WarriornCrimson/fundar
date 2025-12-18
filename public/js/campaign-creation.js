// Campaign Creation Form JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize variables
    let currentStep = 1;
    let selectedCategory = null;
    let selectedWallet = null;
    
    // Individual variables for each user input
    let userCategory = '';
    let userGoalAmount = '';
    let userDateOfNeed = '';
    let userPaymentMethod = '';
    let userQrImage = null;
    let userCampaignImage = null;
    let userCampaignTitle = '';
    let userCampaignStory = '';
    
    // Consolidated campaign data object
    let campaignData = {
        category: '',
        goalAmount: '',
        dateOfNeed: '',
        paymentMethod: '',
        qrImage: null,
        campaignImage: null,
        title: '',
        story: ''
    };

    // ===== FLASH MESSAGE SYSTEM =====
    function showFlashMessage(message, type = 'success') {
        const existingFlash = document.querySelector('.flash-message');
        if (existingFlash) {
            existingFlash.remove();
        }

        const flashMessage = document.createElement('div');
        flashMessage.className = `flash-message flash-${type}`;
        flashMessage.innerHTML = `
            <div class="flash-content">
                <i class="fa-solid ${type === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(flashMessage);
        setTimeout(() => flashMessage.classList.add('show'), 10);
        
        setTimeout(() => {
            flashMessage.classList.remove('show');
            setTimeout(() => flashMessage.remove(), 300);
        }, 4000);
    }

    // ===== WORD COUNTER UTILITY =====
    function countWords(text) {
        return text.trim().split(/\s+/).filter(word => word.length > 0).length;
    }

    // Step navigation
    const steps = {
        1: document.getElementById('step-1'),
        2: document.getElementById('step-2'),
        3: document.getElementById('step-3'),
        4: document.getElementById('step-4'),
        5: document.getElementById('step-5'),
        6: document.getElementById('step-6'),
        7: document.getElementById('step-7')
    };

    function showStep(stepNumber) {
        Object.values(steps).forEach(step => {
            if (step) step.classList.remove('active');
        });
        
        if (steps[stepNumber]) {
            steps[stepNumber].classList.add('active');
            currentStep = stepNumber;
            window.scrollTo(0, 0);
        }
    }

    const gotoprev = document.querySelector('.go-to-prev');

    function resetQrModalUI() {
        qrPreview.style.display = 'none';
        qrPreview.src = '';
        btnPhoto.style.display = 'block';
        qrFileInput.value = '';
    }

    // STEP 1: Category Selection
    const categoryCards = document.querySelectorAll('.category-card');
    const step1NextBtn = document.getElementById('step1-next');

    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            categoryCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedCategory = this.getAttribute('data-category');
            
            userCategory = this.querySelector('h3').textContent;
            campaignData.category = userCategory;
            
            console.log('Category selected:', userCategory);
        });
    });

    step1NextBtn.addEventListener('click', function() {
        if (selectedCategory) {
            gotoprev.classList.add('hide');
            showStep(2);
        } else {
            showFlashMessage('Please select a category to continue', 'error');
        }
    });

    // STEP 2: Goal Amount & Payment Method
    const goalAmountInput = document.getElementById('goal-amount');
    const dateOfNeedInput = document.getElementById('date-of-need');
    const paymentCards = document.querySelectorAll('.payment-card');
    const step2NextBtn = document.getElementById('step2-next');
    const step2BackBtn = document.getElementById('step2-back-btn');
    
    // Modal Elements
    const modal = document.getElementById('qr-modal');
    const qrWalletType = document.getElementById('wallet-type');
    const qrWalletType2 = document.getElementById('wallet-type-2');
    const qrFileInput = document.getElementById('qr-file-input');
    const qrPreview = document.getElementById('qr-preview');
    const btnPhoto = document.querySelector('.btn-photo');
    const qrCancel = document.getElementById('qr-cancel');
    const qrSave = document.getElementById('qr-save');

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    dateOfNeedInput.setAttribute('min', today);

    // Goal Amount Validation
    goalAmountInput.addEventListener('input', function() {
        let value = parseInt(this.value);
        
        if (value < 0) {
            this.value = '';
        }
        
        if (value > 50000) {
            this.value = 50000;
            showFlashMessage('Maximum goal amount is ₱50,000', 'error');
        }
    });

    paymentCards.forEach(card => {
        card.addEventListener('click', function() {
            const wallet = this.getAttribute('data-wallet');
            selectedWallet = wallet;
            
            resetQrModalUI();

            if (campaignData.paymentMethod === wallet && campaignData.qrImage) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    qrPreview.src = event.target.result;
                    qrPreview.style.display = 'block';
                    btnPhoto.style.display = 'none';
                };
                reader.readAsDataURL(campaignData.qrImage);
            }

            modal.classList.add('active');
            qrWalletType.textContent = wallet === 'gcash' ? 'GCash' : 'PayPal';
            qrWalletType2.textContent = wallet === 'gcash' ? 'GCash' : 'PayPal';
        });
    });

    btnPhoto.addEventListener('click', function() {
        qrFileInput.click();
    });

    qrPreview.addEventListener('click', function() {
        if (this.style.display === 'block') {
            qrFileInput.click();
        }
    });
    
    qrFileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file type
            if (!file.type.startsWith('image/')) {
                showFlashMessage('Please upload a valid image file', 'error');
                return;
            }
            
            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                showFlashMessage('Image size must be less than 5MB', 'error');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(event) {
                qrPreview.src = event.target.result;
                qrPreview.style.display = 'block';
                btnPhoto.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    });

    qrCancel.addEventListener('click', function() {
        modal.classList.remove('active');
        selectedWallet = null;
        
        if (campaignData.qrImage && campaignData.paymentMethod) {
            // Keep card selected
        } else {
            paymentCards.forEach(card => card.classList.remove('selected'));
        }
        
        resetQrModalUI();
    });

    qrSave.addEventListener('click', function() {
        let fileToSave = qrFileInput.files[0];

        if (!fileToSave && campaignData.paymentMethod === selectedWallet && campaignData.qrImage) {
            fileToSave = campaignData.qrImage;
        } 
        
        if (!fileToSave) {
            showFlashMessage('Please upload a QR code image', 'error');
            return;
        }

        userQrImage = fileToSave;
        userPaymentMethod = selectedWallet;
        campaignData.qrImage = userQrImage;
        campaignData.paymentMethod = userPaymentMethod;
        
        paymentCards.forEach(card => card.classList.remove('selected'));
        document.querySelector(`[data-wallet="${selectedWallet}"]`).classList.add('selected');
        
        modal.classList.remove('active');
        qrFileInput.value = '';
        selectedWallet = null;
        
        showFlashMessage('QR code uploaded successfully', 'success');
    });

    step2NextBtn.addEventListener('click', function() {
        const goalAmount = parseInt(goalAmountInput.value);
        const dateOfNeed = dateOfNeedInput.value;
        
        // Validate goal amount
        if (!goalAmount) {
            showFlashMessage('Please enter a goal amount', 'error');
            return;
        }
        
        if (goalAmount < 100) {
            showFlashMessage('Minimum goal amount is ₱100', 'error');
            return;
        }
        
        if (goalAmount > 50000) {
            showFlashMessage('Maximum goal amount is ₱50,000', 'error');
            return;
        }
        
        // Validate date
        if (!dateOfNeed) {
            showFlashMessage('Please select a date of need', 'error');
            return;
        }
        
        const selectedDate = new Date(dateOfNeed);
        const todayDate = new Date(today);
        
        if (selectedDate <= todayDate) {
            showFlashMessage('Date of need must be in the future', 'error');
            return;
        }
        
        // Validate payment method
        if (!campaignData.paymentMethod || !campaignData.qrImage) {
            showFlashMessage('Please select a payment method and upload your QR code', 'error');
            return;
        }
        
        userGoalAmount = goalAmount;
        userDateOfNeed = dateOfNeed;
        campaignData.goalAmount = userGoalAmount;
        campaignData.dateOfNeed = userDateOfNeed;
        
        showStep(3);
    });

    step2BackBtn.addEventListener('click', function() {
        gotoprev.classList.remove('hide');
        showStep(1);
    });

    // STEP 3: Campaign Picture Upload
    const campaignImageFrame = document.getElementById('campaign-image-frame');
    const campaignImageInput = document.getElementById('campaign-image-input');
    const campaignPreview = document.getElementById('campaign-preview');
    const campaignPlaceholder = document.getElementById('campaign-placeholder');
    const step3NextBtn = document.getElementById('step3-next');
    const step3BackBtn = document.getElementById('step3-back-btn');

    campaignImageFrame.addEventListener('click', function() {
        campaignImageInput.click();
    });

    campaignImageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file type
            if (!file.type.startsWith('image/')) {
                showFlashMessage('Please upload a valid image file', 'error');
                return;
            }
            
            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                showFlashMessage('Image size must be less than 5MB', 'error');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(event) {
                campaignPreview.src = event.target.result;
                campaignPreview.classList.add('active');
                campaignPlaceholder.style.display = 'none';
                campaignImageFrame.classList.add('has-image');
                
                userCampaignImage = event.target.result;
                campaignData.campaignImage = userCampaignImage;
                
                showFlashMessage('Campaign image uploaded successfully', 'success');
            };
            reader.readAsDataURL(file);
        }
    });

    step3NextBtn.addEventListener('click', function() {
        if (!campaignData.campaignImage) {
            showFlashMessage('Please upload a campaign picture to continue', 'error');
            return;
        }
        showStep(4);
    });

    step3BackBtn.addEventListener('click', function() {
        showStep(2);
    });

    // STEP 4: Campaign Title & Story
    const campaignTitleInput = document.getElementById('campaign-title');
    const campaignStoryInput = document.getElementById('campaign-story');
    const titleCounter = document.getElementById('title-counter');
    const storyCounter = document.getElementById('story-counter');
    const step4NextBtn = document.getElementById('step4-next');
    const step4BackBtn = document.getElementById('step4-back-btn');
    const titleRefineBtn = document.querySelectorAll('.refine-btn')[0];
    const storyRefineBtn = document.querySelectorAll('.refine-btn')[1];

    // Title input handler with word limit (12 words max)
    campaignTitleInput.addEventListener('input', function() {
        const words = this.value.trim().split(/\s+/).filter(word => word.length > 0);
        const wordCount = words.length;
        const charCount = this.value.length;
        
        // Update character counter
        titleCounter.textContent = charCount;
        
        // Limit to 12 words
        if (wordCount > 12) {
            this.value = words.slice(0, 12).join(' ');
            showFlashMessage('Maximum of 12 words allowed for title', 'error');
        }
        
        // Show/hide refine button based on word count (min 4 words)
        if (wordCount >= 4) {
            titleRefineBtn.style.display = 'flex';
        } else {
            titleRefineBtn.style.display = 'none';
        }
    });

    // Story input handler with word limit (500 words max)
    campaignStoryInput.addEventListener('input', function() {
        const words = this.value.trim().split(/\s+/).filter(word => word.length > 0);
        const wordCount = words.length;
        const charCount = this.value.length;
        
        // Update character counter
        storyCounter.textContent = charCount;
        
        // Limit to 500 words
        if (wordCount > 500) {
            this.value = words.slice(0, 500).join(' ');
            showFlashMessage('Maximum of 500 words allowed for story', 'error');
        }
        
        // Show/hide refine button based on word count (min 30 words)
        if (wordCount >= 30) {
            storyRefineBtn.style.display = 'flex';
        } else {
            storyRefineBtn.style.display = 'none';
        }
    });

    step4NextBtn.addEventListener('click', function() {
        const title = campaignTitleInput.value.trim();
        const story = campaignStoryInput.value.trim();
        
        // Validate title
        if (!title) {
            showFlashMessage('Please enter a campaign title', 'error');
            return;
        }
        
        const titleWords = countWords(title);
        if (titleWords < 4) {
            showFlashMessage('Title must be at least 4 words', 'error');
            return;
        }
        
        if (titleWords > 12) {
            showFlashMessage('Title must not exceed 12 words', 'error');
            return;
        }
        
        // Validate story
        if (!story) {
            showFlashMessage('Please share your campaign story', 'error');
            return;
        }
        
        const storyWords = countWords(story);
        if (storyWords < 30) {
            showFlashMessage('Story must be at least 30 words', 'error');
            return;
        }
        
        if (storyWords > 500) {
            showFlashMessage('Story must not exceed 500 words', 'error');
            return;
        }
        
        userCampaignTitle = title;
        userCampaignStory = story;
        campaignData.title = userCampaignTitle;
        campaignData.story = userCampaignStory;
        
        updatePreview();
        showStep(5);
    });

    step4BackBtn.addEventListener('click', function() {
        showStep(3);
    });

    // STEP 5: Campaign Preview
    const step5NextBtn = document.getElementById('step5-next');
    const step5BackBtn = document.getElementById('step5-back-btn');

    function updatePreview() {
        const previewCard = document.querySelector('#step-5 .campaign-card');
        
        if (!previewCard) {
            console.error('Campaign card component not found');
            return;
        }
        
        const campaignImage = previewCard.querySelector('.campaign-image img');
        if (campaignImage && userCampaignImage) {
            campaignImage.src = userCampaignImage;
            campaignImage.alt = userCampaignTitle;
        }
        
        const categoryBadge = previewCard.querySelector('.campaign-badge');
        if (categoryBadge) {
            categoryBadge.textContent = userCategory;
            
            const lm = '#50B3FA';
            const tf = '#FFD966';
            const rf = '#6EC1E4';
            const ef = '#FFA94D';
            const ha = '#FFB3B3';
            const le = '#7ED184';
            const ec = '#A070C2';
            const ga = '#CFCFCF';

            switch(userCategory) {
                case 'Learning Material':
                    categoryBadge.style.background = lm;
                    break;
                case 'Tuition Fee':
                    categoryBadge.style.background = tf;
                    break;
                case 'Research':
                    categoryBadge.style.background = rf;
                    break;
                case 'Emergency Fund':
                    categoryBadge.style.background = ef;
                    break;
                case 'Health Assistance':
                    categoryBadge.style.background = ha;
                    break;
                case 'Living Essentials':
                    categoryBadge.style.background = le;
                    break;
                case 'Extracurricular':
                    categoryBadge.style.background = ec;
                    break;
                case 'General Assistance':
                    categoryBadge.style.background = ga;
                    break;
                default:
                    categoryBadge.style.background = '#4C58DF';
            }
        }
        
        const campaignTitle = previewCard.querySelector('.campaign-title');
        if (campaignTitle) {
            campaignTitle.textContent = userCampaignTitle;
        }
        
        const campaignDescription = previewCard.querySelector('.campaign-description');
        if (campaignDescription) {
            const truncatedStory = userCampaignStory.length > 150 
                ? userCampaignStory.substring(0, 150) + '...' 
                : userCampaignStory;
            campaignDescription.textContent = truncatedStory;
        }
        
        const progressAmount = previewCard.querySelector('.progress-amount');
        if (progressAmount) {
            progressAmount.innerHTML = `
                <i class="fa-solid fa-arrow-trend-up"></i>
                ₱ 0 raised of ₱ ${parseInt(userGoalAmount).toLocaleString()}
            `;
        }
        
        const progressPercentage = previewCard.querySelector('.progress-percentage');
        if (progressPercentage) {
            progressPercentage.textContent = '0% Funded';
        }
        
        const progressFillGreen = previewCard.querySelector('.progress-fill-green');
        if (progressFillGreen) {
            progressFillGreen.style.width = '0%';
        }
        
        const voteNumbers = previewCard.querySelectorAll('.vote-number');
        voteNumbers.forEach(voteNum => {
            voteNum.textContent = '0';
            voteNum.setAttribute('data-value', '0');
        });
        
        updateSuccessPreview();
        
        console.log('=== Campaign Preview Updated ===');
        console.log('Category:', userCategory);
        console.log('Goal Amount:', userGoalAmount);
        console.log('Title Words:', countWords(userCampaignTitle));
        console.log('Story Words:', countWords(userCampaignStory));
    }

    function updateSuccessPreview() {
        const cardSmImage = document.querySelector('.campaign-card-sm-image img');
        if (cardSmImage && userCampaignImage) {
            cardSmImage.src = userCampaignImage;
            cardSmImage.alt = userCampaignTitle;
        }
        
        const cardSmRaised = document.querySelector('.campaign-card-sm-raised');
        if (cardSmRaised) {
            cardSmRaised.textContent = `₱ 0 raised of ₱ ${parseInt(userGoalAmount).toLocaleString()}`;
        }
        
        const cardSmFunded = document.querySelector('.campaign-card-sm-funded');
        if (cardSmFunded) {
            cardSmFunded.textContent = '0% Funded';
        }
        
        const cardSmBadge = document.querySelector('.campaign-badge-detail');
        if (cardSmBadge) {
            cardSmBadge.textContent = userCategory;
            
            const lm = '#50B3FA';
            const tf = '#FFD966';
            const rf = '#6EC1E4';
            const ef = '#FFA94D';
            const ha = '#FFB3B3';
            const le = '#7ED184';
            const ec = '#A070C2';
            const ga = '#CFCFCF';

            switch(userCategory) {
                case 'Learning Material':
                    cardSmBadge.style.background = lm;
                    break;
                case 'Tuition Fee':
                    cardSmBadge.style.background = tf;
                    break;
                case 'Research':
                    cardSmBadge.style.background = rf;
                    break;
                case 'Emergency Fund':
                    cardSmBadge.style.background = ef;
                    break;
                case 'Health Assistance':
                    cardSmBadge.style.background = ha;
                    break;
                case 'Living Essentials':
                    cardSmBadge.style.background = le;
                    break;
                case 'Extracurricular':
                    cardSmBadge.style.background = ec;
                    break;
                case 'General Assistance':
                    cardSmBadge.style.background = ga;
                    break;
                default:
                    cardSmBadge.style.background = '#4C58DF';
            }
        }
        
        const cardSmTitle = document.querySelector('.campaign-card-sm-title');
        if (cardSmTitle) {
            cardSmTitle.textContent = userCampaignTitle;
        }
        
        const cardSmDescription = document.querySelector('.campaign-card-sm-description');
        if (cardSmDescription) {
            const truncatedDescription = userCampaignStory.length > 100 
                ? userCampaignStory.substring(0, 100) + '...' 
                : userCampaignStory;
            cardSmDescription.textContent = truncatedDescription;
        }
        
        const cardSmProgressFill = document.querySelector('.campaign-card-sm-progress-fill');
        if (cardSmProgressFill) {
            cardSmProgressFill.style.setProperty('--percentWidth', '0%');
        }
    }

    step5NextBtn.addEventListener('click', function() {
        showStep(6);
    });

    step5BackBtn.addEventListener('click', function() {
        showStep(4);
    });

    // STEP 6: Campaign Rules
    const agreeTermsCheckbox = document.getElementById('agree-terms');
    const step6SubmitBtn = document.getElementById('step6-submit');
    const step6BackBtn = document.getElementById('step6-back-btn');

    agreeTermsCheckbox.addEventListener('change', function() {
        step6SubmitBtn.disabled = !this.checked;
    });

    step6SubmitBtn.addEventListener('click', function() {
        if (!agreeTermsCheckbox.checked) {
            showFlashMessage('Please agree to the terms and conditions to submit', 'error');
            return;
        }
        
        step6SubmitBtn.classList.add('loading');
        step6SubmitBtn.textContent = '';
        
        setTimeout(function() {
            step6SubmitBtn.classList.remove('loading');
            step6SubmitBtn.textContent = 'Submit';
            
            submitCampaign();
            showFlashMessage('Campaign submitted successfully!', 'success');
            showStep(7);
        }, 2000);
    });

    step6BackBtn.addEventListener('click', function() {
        showStep(5);
    });

    // STEP 7: Success
    const returnHomeBtn = document.getElementById('return-home');

    returnHomeBtn.addEventListener('click', function() {
        window.location.href = '/home';
    });

    function submitCampaign() {
        console.log('=== Submitting Campaign Data ===');
        console.log('userCategory:', userCategory);
        console.log('userGoalAmount:', userGoalAmount);
        console.log('userDateOfNeed:', userDateOfNeed);
        console.log('userPaymentMethod:', userPaymentMethod);
        console.log('userCampaignTitle:', userCampaignTitle);
        console.log('userCampaignStory:', userCampaignStory);
        
        return {
            category: userCategory,
            goalAmount: userGoalAmount,
            dateOfNeed: userDateOfNeed,
            paymentMethod: userPaymentMethod,
            title: userCampaignTitle,
            story: userCampaignStory,
            campaignImage: userCampaignImage,
            qrImage: userQrImage
        };
    }

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('active');
            selectedWallet = null;
            
            if (!campaignData.qrImage) {
                paymentCards.forEach(card => card.classList.remove('selected'));
            }
            
            resetQrModalUI();
        }
    });

    // Initialize - hide refine buttons initially
    if (titleRefineBtn) titleRefineBtn.style.display = 'none';
    if (storyRefineBtn) storyRefineBtn.style.display = 'none';

    // Initialize first step
    showStep(1);
});