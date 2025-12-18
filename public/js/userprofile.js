document.addEventListener('DOMContentLoaded', () => {
    // ===== LOAD PROFILE DATA =====
    function loadProfileData() {
        const savedData = localStorage.getItem('userProfileData');
        
        if (savedData) {
            const data = JSON.parse(savedData);
            
            // Update Profile Name
            const displayName = document.getElementById('displayName');
            if (displayName && data.fullName) {
                displayName.textContent = data.fullName;
            }
            
            // Update Profile Subtitle (Year Level | Course)
            const displaySubtitle = document.getElementById('displaySubtitle');
            if (displaySubtitle && data.subtitle) {
                displaySubtitle.textContent = data.subtitle;
            }
            
            // Update Email
            const displayEmail = document.getElementById('displayEmail');
            if (displayEmail && data.email) {
                displayEmail.textContent = data.email;
            }
            
            // Update Profile Picture
            const profilePicture = document.getElementById('profilePicture');
            if (profilePicture && data.profileImage) {
                profilePicture.src = data.profileImage;
            }
            
            // Update Address (if exists)
            const displayAddress = document.getElementById('displayAddress');
            if (displayAddress && data.address) {
                displayAddress.innerHTML = `<i class="fa-solid fa-location-dot"></i> <span>${data.address}</span>`;
                displayAddress.style.display = 'flex';
            } else if (displayAddress) {
                displayAddress.style.display = 'none';
            }
            
            // Update About Me / Bio (if exists)
            const displayBio = document.getElementById('displayBio');
            if (displayBio && data.aboutMe) {
                displayBio.textContent = data.aboutMe;
                displayBio.parentElement.style.display = 'block';
            } else if (displayBio) {
                displayBio.parentElement.style.display = 'none';
            }
            
            // Update Achievements
            const achievementsContainer = document.getElementById('displayAchievements');
            if (achievementsContainer && data.achievements && data.achievements.length > 0) {
                achievementsContainer.innerHTML = '';
                data.achievements.forEach(achievement => {
                    const badge = document.createElement('span');
                    badge.className = 'achievement-badge';
                    badge.textContent = achievement;
                    achievementsContainer.appendChild(badge);
                });
                achievementsContainer.parentElement.style.display = 'block';
            } else if (achievementsContainer) {
                achievementsContainer.parentElement.style.display = 'none';
            }
        }
    }
    
    // Load profile data on page load
    loadProfileData();

    // ===== MAIN TAB SWITCHING =====
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-tab');
            
            // Remove active class from all tabs and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            button.classList.add('active');
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });

    // ===== CAMPAIGN SUB-TABS SWITCHING =====
    const campaignSubTabButtons = document.querySelectorAll('.campaign-sub-tab-btn');
    const campaignSubContents = document.querySelectorAll('.campaign-sub-content');

    campaignSubTabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-campaign-tab');
            
            // Remove active class from all campaign sub-tabs and contents
            campaignSubTabButtons.forEach(btn => btn.classList.remove('active'));
            campaignSubContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            button.classList.add('active');
            const targetContent = document.getElementById(`${targetTab}-campaigns`);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });

    // ===== LOAD CAMPAIGNS =====
    function loadCampaigns() {
        // Handle empty states for live campaigns
        const liveContainer = document.querySelector('#live-campaigns .contains-campaigns');
        const liveEmpty = document.querySelector('#live-campaigns .empty-state');
        
        if (liveContainer && liveEmpty) {
            const liveCampaignCards = liveContainer.querySelectorAll(':scope > *:not(.empty-state)');
            if (liveCampaignCards.length === 0) {
                liveEmpty.style.display = 'block';
            } else {
                liveEmpty.style.display = 'none';
            }
        }
        
        // Handle empty states for pending campaigns
        const pendingContainer = document.querySelector('#pending-campaigns .contains-campaigns');
        const pendingEmpty = document.querySelector('#pending-campaigns .empty-state');
        
        if (pendingContainer && pendingEmpty) {
            const pendingCampaignCards = pendingContainer.querySelectorAll(':scope > *:not(.empty-state)');
            if (pendingCampaignCards.length === 0) {
                pendingEmpty.style.display = 'block';
            } else {
                pendingEmpty.style.display = 'none';
            }
        }
        
        // Handle empty states for closed campaigns
        const closedContainer = document.querySelector('#closed-campaigns .contains-campaigns');
        const closedEmpty = document.querySelector('#closed-campaigns .empty-state');
        
        if (closedContainer && closedEmpty) {
            const closedCampaignCards = closedContainer.querySelectorAll(':scope > *:not(.empty-state)');
            if (closedCampaignCards.length === 0) {
                closedEmpty.style.display = 'block';
            } else {
                closedEmpty.style.display = 'none';
            }
        }
    }

    // ===== MOVE CAMPAIGN TO CLOSED =====
    function moveCampaignToClosed(campaignId) {
        console.log('Moving campaign to closed:', campaignId);
        
        const campaignCard = document.querySelector(`[data-campaign-id="${campaignId}"]`);
        
        if (campaignCard) {
            campaignCard.remove();
            loadCampaigns();
            
            const closedCampaigns = JSON.parse(localStorage.getItem('closedCampaigns') || '[]');
            closedCampaigns.push(campaignId);
            localStorage.setItem('closedCampaigns', JSON.stringify(closedCampaigns));
        }
    }

    // ===== REMOVE CANCELLED CAMPAIGN =====
    function removeCancelledCampaign(campaignId) {
        console.log('Removing cancelled campaign:', campaignId);
        
        const campaignCard = document.querySelector(`[data-campaign-id="${campaignId}"]`);
        
        if (campaignCard) {
            campaignCard.remove();
            loadCampaigns();
            
            const pendingCampaigns = JSON.parse(localStorage.getItem('pendingCampaigns') || '[]');
            const updatedPending = pendingCampaigns.filter(id => id !== campaignId);
            localStorage.setItem('pendingCampaigns', JSON.stringify(updatedPending));
        }
    }

    // ===== SUBMIT GRADES MODAL =====
    const submitGradesBtn = document.getElementById('submitGradesBtn');
    const submitGradesModal = document.getElementById('submitGradesModal');
    const cancelGrades = document.getElementById('cancelGrades');
    const uploadGradesBtn = document.getElementById('uploadGradesBtn');
    const gradesPhotoInput = document.getElementById('gradesPhotoInput');
    const gradesPhotoPreview = document.getElementById('gradesPhotoPreview');
    const saveGrades = document.getElementById('saveGrades');
    let gradesPhoto = null;

    if (submitGradesBtn) {
        submitGradesBtn.addEventListener('click', () => {
            submitGradesModal.classList.add('active');
        });
    }

    if (cancelGrades) {
        cancelGrades.addEventListener('click', () => {
            submitGradesModal.classList.remove('active');
            gradesPhotoPreview.innerHTML = '';
            gradesPhoto = null;
        });
    }

    if (uploadGradesBtn && gradesPhotoInput) {
        uploadGradesBtn.addEventListener('click', () => {
            gradesPhotoInput.click();
        });

        gradesPhotoInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    gradesPhoto = event.target.result;
                    gradesPhotoPreview.innerHTML = `
                        <div class="preview-item">
                            <img src="${gradesPhoto}" alt="Grades">
                            <button class="btn-remove-photo" onclick="removeGradesPhoto()">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    window.removeGradesPhoto = () => {
        gradesPhotoPreview.innerHTML = '';
        gradesPhoto = null;
        gradesPhotoInput.value = '';
    };

    if (saveGrades) {
        saveGrades.addEventListener('click', () => {
            if (!gradesPhoto) {
                alert('Please upload a photo of your grades');
                return;
            }

            const grades = JSON.parse(localStorage.getItem('userGrades') || '[]');
            grades.push({
                id: Date.now(),
                photo: gradesPhoto,
                date: new Date().toISOString()
            });
            localStorage.setItem('userGrades', JSON.stringify(grades));

            submitGradesModal.classList.remove('active');
            gradesPhotoPreview.innerHTML = '';
            gradesPhoto = null;
            
            alert('Grades submitted successfully!');
            
            loadGrades();
        });
    }

    // ===== ADD EXPERIENCE MODAL =====
    const addExperienceBtn = document.getElementById('addExperienceBtn');
    const addExperienceModal = document.getElementById('addExperienceModal');
    const cancelExperience = document.getElementById('cancelExperience');
    const uploadPhotoBtn = document.getElementById('uploadPhotoBtn');
    const photoInput = document.getElementById('photoInput');
    const photoPreviewGrid = document.getElementById('photoPreviewGrid');
    const saveExperience = document.getElementById('saveExperience');
    const experienceCaption = document.getElementById('experienceCaption');
    const captionCount = document.getElementById('captionCount');
    
    let experiencePhotos = [];

    if (addExperienceBtn) {
        addExperienceBtn.addEventListener('click', () => {
            addExperienceModal.classList.add('active');
        });
    }

    if (cancelExperience) {
        cancelExperience.addEventListener('click', () => {
            addExperienceModal.classList.remove('active');
            resetExperienceForm();
        });
    }

    if (uploadPhotoBtn && photoInput) {
        uploadPhotoBtn.addEventListener('click', () => {
            if (experiencePhotos.length >= 3) {
                alert('Maximum 3 photos allowed');
                return;
            }
            photoInput.click();
        });

        photoInput.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            
            files.forEach(file => {
                if (experiencePhotos.length >= 3) {
                    alert('Maximum 3 photos allowed');
                    return;
                }
                
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        experiencePhotos.push(event.target.result);
                        renderPhotoPreview();
                    };
                    reader.readAsDataURL(file);
                }
            });
            
            photoInput.value = '';
        });
    }

    function renderPhotoPreview() {
        photoPreviewGrid.innerHTML = '';
        experiencePhotos.forEach((photo, index) => {
            const previewItem = document.createElement('div');
            previewItem.className = 'photo-preview-item';
            previewItem.innerHTML = `
                <img src="${photo}" alt="Preview ${index + 1}">
                <button class="btn-remove-photo" onclick="removeExperiencePhoto(${index})">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            `;
            photoPreviewGrid.appendChild(previewItem);
        });
    }

    window.removeExperiencePhoto = (index) => {
        experiencePhotos.splice(index, 1);
        renderPhotoPreview();
    };

    if (experienceCaption && captionCount) {
        experienceCaption.addEventListener('input', () => {
            captionCount.textContent = experienceCaption.value.length;
        });
    }

    if (saveExperience) {
        saveExperience.addEventListener('click', () => {
            const category = document.getElementById('experienceCategory').value;
            const caption = experienceCaption.value.trim();
            const date = document.getElementById('experienceDate').value;

            if (!category) {
                alert('Please select a category');
                return;
            }

            if (!caption) {
                alert('Please enter a caption');
                return;
            }

            if (!date) {
                alert('Please select a date');
                return;
            }

            const experiences = JSON.parse(localStorage.getItem('userExperiences') || '[]');
            experiences.push({
                id: Date.now(),
                category: category,
                caption: caption,
                date: date,
                photos: experiencePhotos,
                createdAt: new Date().toISOString()
            });
            localStorage.setItem('userExperiences', JSON.stringify(experiences));

            addExperienceModal.classList.remove('active');
            resetExperienceForm();
            
            alert('Experience added successfully!');
            
            loadExperiences();
        });
    }

    function resetExperienceForm() {
        document.getElementById('experienceCategory').value = '';
        experienceCaption.value = '';
        captionCount.textContent = '0';
        document.getElementById('experienceDate').value = '';
        experiencePhotos = [];
        photoPreviewGrid.innerHTML = '';
        photoInput.value = '';
    }

    // ===== LOAD EXPERIENCES =====
    function loadExperiences() {
        const experiences = JSON.parse(localStorage.getItem('userExperiences') || '[]');
        const experiencesList = document.getElementById('experiencesList');
        const emptyState = document.getElementById('experiencesEmptyState');

        if (experiences.length === 0) {
            emptyState.style.display = 'block';
            experiencesList.style.display = 'none';
        } else {
            emptyState.style.display = 'none';
            experiencesList.style.display = 'grid';
            experiencesList.innerHTML = '';

            experiences.reverse().forEach(exp => {
                const card = document.createElement('div');
                card.className = 'experience-card';
                
                const photosHtml = exp.photos && exp.photos.length > 0 
                    ? `<div class="experience-images">
                        <img src="${exp.photos[0]}" alt="Experience" class="experience-image">
                        ${exp.photos.length > 1 ? `<span class="photo-count"><i class="fa-solid fa-images"></i> ${exp.photos.length}</span>` : ''}
                       </div>`
                    : `<div class="experience-images">
                        <div class="experience-image-placeholder">
                            <i class="fa-solid fa-image"></i>
                        </div>
                       </div>`;
                
                card.innerHTML = `
                    ${photosHtml}
                    <div class="experience-content">
                        <span class="experience-category">${exp.category}</span>
                        <p class="experience-caption">${exp.caption}</p>
                        <div class="experience-date">
                            <i class="fa-regular fa-calendar"></i>
                            ${new Date(exp.date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}
                        </div>
                    </div>
                `;
                
                experiencesList.appendChild(card);
            });
        }
    }

    // ===== LOAD GRADES =====
    function loadGrades() {
        const grades = JSON.parse(localStorage.getItem('userGrades') || '[]');
        const gradesChartContainer = document.getElementById('gradesChartContainer');
        const emptyState = document.getElementById('gradesEmptyState');

        if (grades.length === 0) {
            emptyState.style.display = 'block';
            gradesChartContainer.style.display = 'none';
        } else {
            emptyState.style.display = 'none';
            gradesChartContainer.style.display = 'block';
            gradesChartContainer.innerHTML = '';

            grades.forEach(grade => {
                const gradeItem = document.createElement('div');
                gradeItem.className = 'grade-item';
                gradeItem.innerHTML = `
                    <img src="${grade.photo}" alt="Grades">
                    <span>${new Date(grade.date).toLocaleDateString()}</span>
                `;
                gradesChartContainer.appendChild(gradeItem);
            });
        }
    }

    // ===== LOAD ACHIEVEMENTS =====
    function loadAchievements() {
        const achievements = JSON.parse(localStorage.getItem('userAchievements') || '[]');
        const achievementsContainer = document.querySelector('#achievements .section-card');
        const emptyState = document.querySelector('#achievements .empty-state');

        if (achievements.length === 0) {
            if (emptyState) emptyState.style.display = 'block';
            const existingGrid = achievementsContainer.querySelector('.achievements-grid');
            if (existingGrid) existingGrid.remove();
        } else {
            if (emptyState) emptyState.style.display = 'none';
            
            let achievementsGrid = achievementsContainer.querySelector('.achievements-grid');
            if (!achievementsGrid) {
                achievementsGrid = document.createElement('div');
                achievementsGrid.className = 'achievements-grid';
                achievementsContainer.appendChild(achievementsGrid);
            }
            
            achievementsGrid.innerHTML = '';

            achievements.forEach(achievement => {
                const card = document.createElement('div');
                card.className = 'achievement-card';
                
                card.innerHTML = `
                    <div class="achievement-icon">
                        <img src="/images/First-Donor.png">
                    </div>
                    <div class="achievement-info">
                        <h3 class="achievement-name">${achievement.name}</h3>
                        <p class="achievement-description">${achievement.description || 'Achievement earned'}</p>
                        <div class="achievement-date">
                            <i class="fa-regular fa-calendar"></i>
                            <span>${new Date(achievement.earnedDate).toLocaleDateString('en-US', { 
                                year: 'numeric', 
                                month: 'long', 
                                day: 'numeric' 
                            })}</span>
                        </div>
                    </div>
                `;
                
                achievementsGrid.appendChild(card);
            });
        }
    }

    // ===== CLOSE MODALS WHEN CLICKING OUTSIDE =====
    const modals = document.querySelectorAll('.modal-overlay');
    modals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });

    // ===== INITIALIZE =====
    loadExperiences();
    loadGrades();
    loadCampaigns();
    loadAchievements();

    // Check if redirected from challenges page with hash
    if (window.location.hash === '#achievements') {
        // Switch to achievements tab
        const achievementsTab = document.querySelector('.tab-btn[data-tab="achievements"]');
        if (achievementsTab) {
            achievementsTab.click();
        }
        
        // Remove hash from URL
        history.replaceState(null, null, ' ');
    }

    // ===== DEMO: ADD SAMPLE ACHIEVEMENTS (REMOVE IN PRODUCTION) =====
    // Uncomment to test with sample data
    /*
    const sampleAchievements = [
        {
            name: 'First Donation',
            description: 'Made your first donation to help a fellow student',
            earnedDate: '2024-01-15'
        },
        {
            name: 'Generous Donor',
            description: 'Donated to 5 different campaigns',
            earnedDate: '2024-02-20'
        },
        {
            name: 'Campaign Creator',
            description: 'Created your first successful campaign',
            earnedDate: '2024-03-10'
        }
    ];
    localStorage.setItem('userAchievements', JSON.stringify(sampleAchievements));
    loadAchievements();
    */
});