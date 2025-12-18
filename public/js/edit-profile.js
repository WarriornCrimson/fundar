document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const changePictureBtn = document.getElementById('changePictureBtn');
    const profilePictureInput = document.getElementById('profilePictureInput');
    const profilePicture = document.getElementById('profilePicture');
    const achievementInput = document.getElementById('achievementInput');
    const addAchievementBtn = document.getElementById('addAchievementBtn');
    const achievementsContainer = document.getElementById('achievementsContainer');
    const aboutMeTextarea = document.getElementById('aboutMe');
    const aboutMeCount = document.getElementById('aboutMeCount');
    const editProfileForm = document.getElementById('editProfileForm');
    const deleteProfile = document.querySelector('.delete-account');
    const deleteConfirmation = document.querySelector('.modal-overlay');
    const cancelDelete = document.getElementById('cancelDelete');
    const proceedDelete = document.getElementById('confirmDelete');

    // State
    let achievements = ['Dean\'s Lister'];
    let profileImageData = null;
    let hasProfileImageChanged = false; // Track if profile image was actually changed

    // --- Delete Account Modal Logic ---
    if (deleteProfile && deleteConfirmation && cancelDelete && proceedDelete) {
        deleteProfile.addEventListener('click', () => {
            deleteConfirmation.classList.add('active');
        });

        cancelDelete.addEventListener('click', () => {
            deleteConfirmation.classList.remove('active');
        });

        proceedDelete.addEventListener('click', () => {
            window.location.href = "/landing-page";
        });
    }

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

    // --- Helper for showing focus error messages ---
    function handleError(inputElement, message) {
        showFlashMessage(message, 'error');
        if (inputElement) {
            inputElement.focus();
        }
    }

    // ===== VALIDATION FUNCTIONS =====

    function validateName(name, fieldName) {
        if (!name || name.trim() === '') {
            return `${fieldName} is required.`;
        }
        
        const cleanName = name.trim();

        if (cleanName.length < 2) {
            return `${fieldName} must be at least 2 characters.`;
        }
        
        const nameRegex = /^[a-zA-Z\s'-.]+$/; 
        
        if (!nameRegex.test(cleanName)) {
            return `${fieldName} contains invalid characters. Only letters, spaces, hyphens, apostrophes, and periods are allowed.`;
        }
        
        if (/[\s'-.]{2,}/.test(cleanName)) {
            return `${fieldName} cannot contain multiple consecutive special characters or spaces.`;
        }
        
        return null;
    }

    function validateEmail(email) {
        if (!email || email.trim() === '') {
            return 'Email is required.';
        }
        
        const cleanEmail = email.trim();

        if (cleanEmail.length > 254) {
            return 'Email is too long.';
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/; 
        if (!emailRegex.test(cleanEmail)) {
            return 'Please enter a valid email address.';
        }
        
        return null;
    }

    function validateGeneralText(value, fieldName, minLength = 2, maxLength = 100) {
        if (value.trim() === '') {
            return null;
        }

        const cleanValue = value.trim();

        if (cleanValue.length < minLength) {
            return `${fieldName} must be at least ${minLength} characters.`;
        }
        
        if (cleanValue.length > maxLength) {
            return `${fieldName} must be less than ${maxLength} characters.`;
        }

        const textRegex = /^[a-zA-Z0-9\s.,'#/-]+$/; 
        if (!textRegex.test(cleanValue)) {
            return `${fieldName} contains invalid characters.`;
        }
        
        return null;
    }

    function validateZipCode(zipCode) {
        if (zipCode.trim() === '') {
            return null;
        }

        const cleanZip = zipCode.trim();

        const zipRegex = /^\d{4,9}$/;
        if (!zipRegex.test(cleanZip)) {
            return 'Please enter a valid Zip Code (4-9 digits).';
        }

        return null;
    }

    // ===== PROFILE PICTURE =====
    if (changePictureBtn && profilePictureInput) {
        changePictureBtn.addEventListener('click', () => { 
            profilePictureInput.click();
        });

        profilePictureInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            
            if (file) {
                // Validate specific file types (PNG, JPG, JPEG only)
                const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
                if (!allowedTypes.includes(file.type)) {
                    showFlashMessage('Only PNG, JPG, and JPEG files are allowed.', 'error');
                    e.target.value = '';
                    return;
                }
                
                // Validate file size (max 5MB)
                const MAX_SIZE = 5 * 1024 * 1024;
                if (file.size > MAX_SIZE) {
                    showFlashMessage('Image size must be less than 5MB.', 'error');
                    e.target.value = '';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (event) => {
                    profileImageData = event.target.result;
                    profilePicture.src = profileImageData;
                    hasProfileImageChanged = true; // Mark that image was changed
                    showFlashMessage('Profile picture updated.', 'success');
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // ===== CHARACTER COUNTER & LIVE VALIDATION FOR ABOUT ME =====
    const MAX_ABOUT_ME_LENGTH = 500;
    if (aboutMeTextarea && aboutMeCount) {
        aboutMeTextarea.addEventListener('input', () => {
            const length = aboutMeTextarea.value.length;
            aboutMeCount.textContent = length;
            
            if (length > MAX_ABOUT_ME_LENGTH) {
                aboutMeTextarea.value = aboutMeTextarea.value.substring(0, MAX_ABOUT_ME_LENGTH);
                aboutMeCount.textContent = MAX_ABOUT_ME_LENGTH;
                showFlashMessage(`Maximum ${MAX_ABOUT_ME_LENGTH} characters allowed for About Me.`, 'error');
            }
        });
    }

    // ===== REAL-TIME NAME INPUT SANITIZATION =====
    const firstNameInput = document.getElementById('firstName');
    const lastNameInput = document.getElementById('lastName');

    const nameSanitizer = function() {
        const sanitizedValue = this.value.replace(/[^a-zA-Z\s'.-]/g, '');
        this.value = sanitizedValue.replace(/[\s'-.]{2,}/g, (match) => match.charAt(0));
    };

    if (firstNameInput) {
        firstNameInput.addEventListener('input', nameSanitizer);
    }

    if (lastNameInput) {
        lastNameInput.addEventListener('input', nameSanitizer);
    }

    // ===== ACHIEVEMENTS LOGIC =====
    function renderAchievements() {
        if (!achievementsContainer) return;

        achievementsContainer.innerHTML = '';
        
        achievements.forEach((achievement, index) => {
            const badge = document.createElement('div');
            badge.className = 'achievement-badge';
            badge.innerHTML = `
                <span>${achievement}</span>
                <button type="button" class="btn-remove-achievement" data-index="${index}">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            `;
            achievementsContainer.appendChild(badge);
        });

        document.querySelectorAll('.btn-remove-achievement').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const index = parseInt(e.currentTarget.getAttribute('data-index'));
                removeAchievement(index);
            });
        });
    }

    const MAX_ACHIEVEMENTS = 10;
    const MIN_ACHIEVEMENT_LENGTH = 3;
    const MAX_ACHIEVEMENT_LENGTH = 50;

    function addAchievement() {
        if (!achievementInput) return;

        const value = achievementInput.value.trim();
        
        if (value === '') {
            handleError(achievementInput, 'Please enter an achievement.');
            return;
        }

        if (value.length < MIN_ACHIEVEMENT_LENGTH) {
            handleError(achievementInput, `Achievement must be at least ${MIN_ACHIEVEMENT_LENGTH} characters.`);
            return;
        }

        if (value.length > MAX_ACHIEVEMENT_LENGTH) {
            handleError(achievementInput, `Achievement cannot exceed ${MAX_ACHIEVEMENT_LENGTH} characters.`);
            return;
        }

        if (achievements.map(a => a.toLowerCase()).includes(value.toLowerCase())) {
            handleError(achievementInput, 'This achievement already exists.');
            return;
        }

        if (achievements.length >= MAX_ACHIEVEMENTS) {
            handleError(achievementInput, `Maximum of ${MAX_ACHIEVEMENTS} achievements allowed.`);
            return;
        }

        achievements.push(value);
        achievementInput.value = '';
        renderAchievements();
        showFlashMessage('Achievement added.', 'success');
    }

    function removeAchievement(index) {
        if (index < 0 || index >= achievements.length) {
            showFlashMessage('Error: Could not find achievement to remove.', 'error');
            return;
        }
        
        achievements.splice(index, 1);
        renderAchievements();
        showFlashMessage('Achievement removed.', 'success');
    }

    if (addAchievementBtn) {
        addAchievementBtn.addEventListener('click', addAchievement);
    }

    if (achievementInput) {
        achievementInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                addAchievement();
            }
        });
    }

    // ===== FORM SUBMISSION =====
    if (editProfileForm) {
        editProfileForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const firstNameElement = document.getElementById('firstName');
            const lastNameElement = document.getElementById('lastName');
            const emailElement = document.getElementById('email');
            const provinceElement = document.getElementById('province');
            const cityElement = document.getElementById('city');
            const zipCodeElement = document.getElementById('zipCode');
            const barangayElement = document.getElementById('barangay');
            const streetElement = document.getElementById('street');
            const aboutMeElement = document.getElementById('aboutMe');

            const firstName = firstNameElement?.value.trim() || '';
            const lastName = lastNameElement?.value.trim() || '';
            const email = emailElement?.value.trim() || '';
            const province = provinceElement?.value.trim() || '';
            const city = cityElement?.value.trim() || '';
            const zipCode = zipCodeElement?.value.trim() || '';
            const barangay = barangayElement?.value.trim() || '';
            const street = streetElement?.value.trim() || '';
            const aboutMe = aboutMeElement?.value.trim() || '';
            
            let hasError = false;

            const firstNameError = validateName(firstName, 'First name');
            if (firstNameError) {
                handleError(firstNameElement, firstNameError);
                hasError = true;
                return;
            }

            const lastNameError = validateName(lastName, 'Last name');
            if (lastNameError) {
                handleError(lastNameElement, lastNameError);
                hasError = true;
                return;
            }

            const emailError = validateEmail(email);
            if (emailError) {
                handleError(emailElement, emailError);
                hasError = true;
                return;
            }

            const provinceError = validateGeneralText(province, 'Province');
            if (provinceError) {
                handleError(provinceElement, provinceError);
                hasError = true;
                return;
            }
            
            const cityError = validateGeneralText(city, 'City/Municipality');
            if (cityError) {
                handleError(cityElement, cityError);
                hasError = true;
                return;
            }
            
            const barangayError = validateGeneralText(barangay, 'Barangay');
            if (barangayError) {
                handleError(barangayElement, barangayError);
                hasError = true;
                return;
            }

            const streetError = validateGeneralText(street, 'Street/House No.');
            if (streetError) {
                handleError(streetElement, streetError);
                hasError = true;
                return;
            }

            const zipCodeError = validateZipCode(zipCode);
            if (zipCodeError) {
                handleError(zipCodeElement, zipCodeError);
                hasError = true;
                return;
            }
            
            if (aboutMe.length > MAX_ABOUT_ME_LENGTH) {
                 handleError(aboutMeElement, `About Me exceeds the maximum limit of ${MAX_ABOUT_ME_LENGTH} characters.`);
                 hasError = true;
                 return;
            }

            if (hasError) {
                return;
            }

            // Create form data object
            const formData = {
                firstName: firstName,
                lastName: lastName,
                email: email,
                province: province,
                city: city,
                zipCode: zipCode,
                barangay: barangay,
                street: street,
                aboutMe: aboutMe,
                achievements: achievements,
                profileImage: profileImageData
            };

            console.log('Form Data:', formData);

            const submitBtn = editProfileForm.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Saving...';
            }

            setTimeout(() => {
                // Form data saved successfully (no localStorage)

                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Save Changes';
                }

                showFlashMessage('Profile updated successfully!', 'success');

                setTimeout(() => {
                    window.location.href = '/profile';
                }, 1000);
            }, 1000);
        });
    }

    // ===== INITIALIZE =====
    renderAchievements();

    const savedData = localStorage.getItem('profileData');
    if (savedData) {
        const data = JSON.parse(savedData);
        
        if (data.firstName && document.getElementById('firstName')) document.getElementById('firstName').value = data.firstName;
        if (data.lastName && document.getElementById('lastName')) document.getElementById('lastName').value = data.lastName;
        if (data.email && document.getElementById('email')) document.getElementById('email').value = data.email;
        if (data.province && document.getElementById('province')) document.getElementById('province').value = data.province;
        if (data.city && document.getElementById('city')) document.getElementById('city').value = data.city;
        if (data.zipCode && document.getElementById('zipCode')) document.getElementById('zipCode').value = data.zipCode;
        if (data.barangay && document.getElementById('barangay')) document.getElementById('barangay').value = data.barangay;
        if (data.street && document.getElementById('street')) document.getElementById('street').value = data.street;
        
        if (data.aboutMe && aboutMeTextarea) {
            aboutMeTextarea.value = data.aboutMe;
            if (aboutMeCount) aboutMeCount.textContent = data.aboutMe.length;
        }

        if (data.achievements) {
            achievements = data.achievements;
            renderAchievements();
        }
         
        if (data.profileImage && profilePicture) {
            profilePicture.src = data.profileImage;
            profileImageData = data.profileImage;
        }
    }
});