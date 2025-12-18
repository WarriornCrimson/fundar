document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const cancelVerification = document.getElementById('cancelVerification');
    const submitVerification = document.getElementById('submitVerification');
    const studentIdUpload = document.getElementById('studentIdUpload');
    const certificateUpload = document.getElementById('certificateUpload');
    const studentIdInput = document.getElementById('studentIdInput');
    const certificateInput = document.getElementById('certificateInput');
    const schoolInput = document.getElementById('school');
    const yearLevelInput = document.getElementById('yearLevel');
    const programInput = document.getElementById('program');
    const majorInput = document.getElementById('major');

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

    // ===== VALIDATION FUNCTIONS =====
    function validateTextField(value, fieldName, allowNumbers = false) {
        if (!value || value.trim() === '') {
            return `${fieldName} is required`;
        }
        
        if (value.trim().length < 3) {
            return `${fieldName} must be at least 3 characters`;
        }
        
        // Check for numbers if not allowed
        if (!allowNumbers && /\d/.test(value)) {
            return `${fieldName} cannot contain numbers`;
        }
        
        return null;
    }

    function validateYearLevel(yearLevel) {
        if (!yearLevel || yearLevel.trim() === '') {
            return 'Year level is required';
        }
        
        const validYearLevels = [
            '1st year', '2nd year', '3rd year', '4th year', '5th year',
            'grade 1', 'grade 2', 'grade 3', 'grade 4', 'grade 5', 'grade 6',
            'grade 7', 'grade 8', 'grade 9', 'grade 10', 'grade 11', 'grade 12',
            'kindergarten', 'pre-school', 'nursery'
        ];
        
        const yearLowerCase = yearLevel.toLowerCase().trim();
        const isValid = validYearLevels.some(level => yearLowerCase.includes(level));
        
        if (!isValid) {
            return 'Please enter a valid year level (e.g., 1st Year, Grade 7, etc.)';
        }
        
        return null;
    }

    function validateDocument(uploadBox, documentName) {
        if (!uploadBox.classList.contains('has-image')) {
            return `Please upload your ${documentName}`;
        }
        return null;
    }

    // ===== DOCUMENT UPLOAD HANDLERS =====
    function handleDocumentUpload(event, uploadBox, documentName) {
        const file = event.target.files[0];
        
        if (!file) {
            return;
        }
        
        // Validate file type
        const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'application/pdf'];
        if (!validTypes.includes(file.type)) {
            showFlashMessage('Please upload an image or PDF file', 'error');
            event.target.value = '';
            return;
        }
        
        // Validate file size (max 5MB)
        if (file.size > 5 * 1024 * 1024) {
            showFlashMessage('File size must be less than 5MB', 'error');
            event.target.value = '';
            return;
        }
        
        const reader = new FileReader();
        reader.onload = (e) => {
            if (file.type === 'application/pdf') {
                // For PDF files, show a PDF icon instead of preview
                uploadBox.innerHTML = `
                    <div class="pdf-preview">
                        <i class="fa-solid fa-file-pdf" style="font-size: 48px; color: #EF4444;"></i>
                        <p style="margin-top: 8px; font-size: 12px;">${file.name}</p>
                    </div>
                `;
            } else {
                // For images, show preview
                uploadBox.innerHTML = `<img src="${e.target.result}" alt="Document">`;
            }
            uploadBox.classList.add('has-image');
            showFlashMessage(`${documentName} uploaded successfully`, 'success');
        };
        
        if (file.type === 'application/pdf') {
            reader.readAsDataURL(file);
        } else {
            reader.readAsDataURL(file);
        }
    }

    // Student ID upload box click
    if (studentIdUpload) {
        studentIdUpload.addEventListener('click', () => {
            studentIdInput.click();
        });
    }

    // Certificate of Enrollment upload box click
    if (certificateUpload) {
        certificateUpload.addEventListener('click', () => {
            certificateInput.click();
        });
    }

    // Student ID file input change
    if (studentIdInput) {
        studentIdInput.addEventListener('change', (e) => {
            handleDocumentUpload(e, studentIdUpload, 'Student ID');
        });
    }

    // Certificate of Enrollment file input change
    if (certificateInput) {
        certificateInput.addEventListener('change', (e) => {
            handleDocumentUpload(e, certificateUpload, 'Certificate of Enrollment');
        });
    }

    // ===== REAL-TIME VALIDATION FOR TEXT FIELDS =====
    
    // Remove numbers from school name
    if (schoolInput) {
        schoolInput.addEventListener('input', function() {
            this.value = this.value.replace(/[0-9]/g, '');
        });
    }

    // Remove numbers from program
    if (programInput) {
        programInput.addEventListener('input', function() {
            this.value = this.value.replace(/[0-9]/g, '');
        });
    }

    if (cancelVerification) {
        cancelVerification.addEventListener('click', () => {
            showCustomPopup({
                title: "Discard Verification?",
                message: "All your entered information and uploaded documents will be cleared. This action cannot be undone.",
                confirmText: "Discard",
                cancelText: "Keep Editing",
                confirmClass: "btn-delete",
                icon: "fa-trash",
                type: "warning",
                onConfirm: () => {
                    // Clear input fields
                    if (schoolInput) schoolInput.value = '';
                    if (yearLevelInput) yearLevelInput.value = '';
                    if (programInput) programInput.value = '';
                    if (majorInput) majorInput.value = '';

                    // Clear document previews
                    const clearUploadBox = (uploadBox, input) => {
                        if (uploadBox) {
                            uploadBox.innerHTML = '<i class="fa-solid fa-plus"></i>';
                            uploadBox.classList.remove('has-image');
                        }
                        if (input) input.value = '';
                    };

                    clearUploadBox(studentIdUpload, studentIdInput);
                    clearUploadBox(certificateUpload, certificateInput);
                    
                    showFlashMessage('Form cleared', 'success');
                }
            });
        });
    }

    // ===== SUBMIT HANDLER =====
    if (submitVerification) {
        submitVerification.addEventListener('click', () => {
            // Get form values
            const school = schoolInput ? schoolInput.value.trim() : '';
            const yearLevel = yearLevelInput ? yearLevelInput.value.trim() : '';
            const program = programInput ? programInput.value.trim() : '';
            const major = majorInput ? majorInput.value.trim() : '';

            // Validate School
            const schoolError = validateTextField(school, 'School name', false);
            if (schoolError) {
                showFlashMessage(schoolError, 'error');
                schoolInput.focus();
                return;
            }

            // Validate Year Level
            const yearLevelError = validateYearLevel(yearLevel);
            if (yearLevelError) {
                showFlashMessage(yearLevelError, 'error');
                yearLevelInput.focus();
                return;
            }

            // Validate Program
            const programError = validateTextField(program, 'Program', false);
            if (programError) {
                showFlashMessage(programError, 'error');
                programInput.focus();
                return;
            }

            // Major is optional (no validation needed)

            // Validate Student ID document
            const studentIdError = validateDocument(studentIdUpload, 'Student ID');
            if (studentIdError) {
                showFlashMessage(studentIdError, 'error');
                return;
            }

            // Validate Certificate of Enrollment
            const certificateError = validateDocument(certificateUpload, 'Certificate of Enrollment');
            if (certificateError) {
                showFlashMessage(certificateError, 'error');
                return;
            }

            // All validations passed - Show confirmation popup
            showCustomPopup({
                title: "Submit Verification?",
                message: "Your documents will be reviewed by our admin team. Make sure all information is correct before submitting.",
                confirmText: "Submit",
                cancelText: "Review Again",
                confirmClass: "btn-success",
                icon: "fa-paper-plane",
                type: "info",
                onConfirm: () => {
                    // Show loading state
                    submitVerification.disabled = true;
                    submitVerification.textContent = 'Submitting...';

                    // Prepare form data
                    const formData = {
                        school: school,
                        yearLevel: yearLevel,
                        program: program,
                        major: major,
                        studentId: studentIdInput.files[0],
                        certificate: certificateInput.files[0]
                    };

                    console.log('Verification Data:', formData);

                    // Simulate submission (replace with actual API call)
                    setTimeout(() => {
                        submitVerification.disabled = false;
                        submitVerification.textContent = 'Submit';
                        
                        showFlashMessage('Verification submitted successfully! Your documents will be reviewed by our admin team.', 'success');
                        
                        // Redirect after 2 seconds
                        setTimeout(() => {
                            window.location.href = '/profile';
                        }, 2000);
                    }, 1500);

                }
            });
        });
    }

    // ===== CUSTOMIZABLE POPUP SYSTEM (needed for cancel/submit confirmations) =====
    function showCustomPopup(options) {
        const {
            title = "Confirm Action",
            message = "Are you sure you want to proceed?",
            confirmText = "Confirm",
            cancelText = "Cancel",
            confirmClass = "btn-delete",
            onConfirm = () => {},
            onCancel = () => {},
            type = "danger"
        } = options;

        const existingPopup = document.querySelector('.custom-popup-overlay');
        if (existingPopup) {
            existingPopup.remove();
        }

        const popupOverlay = document.createElement('div');
        popupOverlay.className = 'custom-popup-overlay modal-overlay active';
        
        
        popupOverlay.innerHTML = `
            <div class="modal-container custom-popup-modal confirm-modal">
                <h2 class="modal-title">${title}</h2>
                <p class="modal-subtitle">${message}</p>
                <div class="modal-footer">
                    <button class="btn-cancel custom-popup-cancel">${cancelText}</button>
                    <button class="${confirmClass} btn-primary custom-popup-confirm">${confirmText}</button>
                </div>
            </div>
        `;
        
        document.body.appendChild(popupOverlay);
        document.body.style.overflow = 'hidden';
        
        const cancelBtn = popupOverlay.querySelector('.custom-popup-cancel');
        const confirmBtn = popupOverlay.querySelector('.custom-popup-confirm');
        
        const closePopup = () => {
            popupOverlay.remove();
            document.body.style.overflow = 'auto';
        };
        
        cancelBtn.addEventListener('click', () => {
            closePopup();
            onCancel();
        });
        
        confirmBtn.addEventListener('click', () => {
            closePopup();
            onConfirm();
        });
        
        popupOverlay.addEventListener('click', (e) => {
            if (e.target === popupOverlay) {
                closePopup();
                onCancel();
            }
        });
    }
});