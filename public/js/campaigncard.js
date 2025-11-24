// Wrap everything per card to make each independent
document.querySelectorAll('.campaign-card').forEach((card) => {
    
    // Badge color corrector
    function toTitleCase(sentence) {
        return sentence
            .trim()
            .toLowerCase()
            .split(/\s+/)
            .map(word => word[0].toUpperCase() + word.slice(1))
            .join(" ");
    }

    const badge = card.querySelector('.campaign-badge');
    const badgeCategory = toTitleCase(badge.textContent);
    const lm = '#50B3FA'
    const tf = '#FFD966'
    const rf = '#6EC1E4'
    const ef = '#FFA94D'
    const ha = '#FFB3B3'
    const le = '#7ED184'
    const ec = '#A070C2'
    const ga = '#CFCFCF'

    switch(badgeCategory) {
        case 'Learning Material':
            badge.style.background = lm;
            break;
        case 'Tuition Fee':
            badge.style.background = tf;
            break;
        case 'Research':
            badge.style.background = rf;
            break;
        case 'Emergency Fund':
            badge.style.background = ef;
            break;
        case 'Health Assistance':
            badge.style.background = ha;
            break;
        case 'Living Essentials':
            badge.style.background = le;
            break;
        case 'Extracurricular':
            badge.style.background = ec;
            break;
        case 'General Assistance':
            badge.style.background = ga;
            break;
    }

    // Bookmark functionality
    const saveCampaign = card.querySelector('.bookmark-btn');
    const changeSaveIcon = card.querySelector('.bookmark-btn i');
    const displaySaveMessage = document.querySelector('.save-campaign');

    const checkMark = '<i class="fi fi-br-check"></i>';
    const exMark = '<i class="fi fi-br-x"></i>';

    if (saveCampaign) {
        saveCampaign.addEventListener('click', () => {
            if (changeSaveIcon.classList.contains('fa-regular')) {
                changeSaveIcon.classList.replace('fa-regular', 'fa-solid');
                if (displaySaveMessage) {
                    displaySaveMessage.innerHTML = checkMark + ' Campaign Saved';
                    displaySaveMessage.classList.add('show');
                    setTimeout(() => {
                        displaySaveMessage.classList.remove('show');
                    }, 2000);
                }
            } else {
                changeSaveIcon.classList.replace('fa-solid', 'fa-regular');
                if (displaySaveMessage) {
                    displaySaveMessage.innerHTML = exMark + ' Campaign Unsaved';
                    displaySaveMessage.classList.add('show');
                    setTimeout(() => {
                        displaySaveMessage.classList.remove('show');
                    }, 2000);
                }
            }
        });
    }

    // Voting functionality
    const upVote = card.querySelector('.share-up');
    const downVote = card.querySelector('.share-down');
    const copyLink = card.querySelector('.copy-link');
    const voteNum = card.querySelectorAll('.vote-number');

    let currentVoteCount = Number(voteNum[0].dataset.value);
    let currentCopyCount = Number(voteNum[1].dataset.value);

    const formatNumber = (num) => {
        return Intl.NumberFormat('en', {
            notation: 'compact',
            compactDisplay: 'short'
        }).format(num);
    };

    voteNum[0].textContent = formatNumber(currentVoteCount);
    voteNum[1].textContent = formatNumber(currentCopyCount);

    if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
    } 

    if (currentCopyCount > 0) {
        voteNum[1].classList.remove('hidden');
    }

    upVote.addEventListener('click', () => {
        if (downVote.classList.contains('downvoted')) {
            downVote.classList.remove('downvoted');
        }

        if (upVote.classList.contains('upvoted')) {
            upVote.classList.remove('upvoted');
            currentVoteCount -= 1;
        } else {
            upVote.classList.add('upvoted');
            currentVoteCount += 1;
        }

        if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
        } else {
            voteNum[0].classList.add('hidden');
        }

        voteNum[0].textContent = formatNumber(currentVoteCount);
    });

    downVote.addEventListener('click', () => {
        if (upVote.classList.contains('upvoted')) {
            upVote.classList.remove('upvoted');
            currentVoteCount -= 1;
            voteNum[0].textContent = formatNumber(currentVoteCount);
        }
        if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
        } else {
            voteNum[0].classList.add('hidden');
        }
        downVote.classList.toggle('downvoted');
    });

    const cardId = card.querySelector('.campaignId');

    copyLink.addEventListener('click', () => {
        if (copyLink.classList.contains('copied')) {
            copyLink.classList.remove('copied');
            currentCopyCount -= 1;
            navigator.clipboard.writeText(`http://127.0.0.1:8000/campaign/${cardId}`);

        } else {
            copyLink.classList.add('copied');
            currentCopyCount += 1;  
            displaySaveMessage.innerHTML = checkMark + ' Link Copied';
            displaySaveMessage.classList.add('show');
            setTimeout(() => {
                displaySaveMessage.classList.remove('show');
            }, 2000);                  
        }

        if (currentCopyCount > 0) {
        voteNum[1].classList.remove('hidden');
        } else { 
        voteNum[1].classList.add('hidden');  
        }

        voteNum[1].textContent = formatNumber(currentCopyCount);
    });

    // Donation functionality - scoped to THIS card
    const donationContainer = card.querySelector('.donation-popup-blur');
    const donateBtn = card.querySelector('.donate-btn');
    
    if (!donationContainer || !donateBtn) return;
    
    // Get all donation elements from THIS card's popup
    const donationStep1 = donationContainer.querySelector('.donation-options');
    const donationStep2 = donationContainer.querySelector('.donation-qr');
    const donationStep3 = donationContainer.querySelector('.upload-receipt');
    const donationConfirmation = donationContainer.querySelector('.confirmation-popup');
    
    const ewallets = donationContainer.querySelectorAll('.qr');
    const gcash = ewallets[0];
    const paypal = ewallets[1];
    const disabledBtn = donationContainer.querySelector('.proceed');
    
    let ewalletType;
    const gcashImgContainer = donationContainer.querySelector('.campaign-qr-gcash');
    const paypalImgContainer = donationContainer.querySelector('.campaign-qr-paypal');
    
    const proceeds = donationContainer.querySelectorAll('.proceed');
    const backs = donationContainer.querySelectorAll('.back');
    const cancelDonation = donationContainer.querySelector('.cancel');
    
    const fileInput = donationContainer.querySelector('.file-input');
    const imagePreview = donationContainer.querySelector('.image-preview');
    const placeholder = donationContainer.querySelector('.placeholder');
    const imageFrame = donationContainer.querySelector('.image-frame');
    
    let imageHolder;

    function checkActive() {
        return gcash.classList.contains('active') || paypal.classList.contains('active');
    }

    function updateDisableBtnState() {
        if (!gcash.classList.contains('active') && !paypal.classList.contains('active')) {
            disabledBtn.classList.add('disabled');
        } else {
            disabledBtn.classList.remove('disabled');
        } 
    }

    donateBtn.addEventListener('click', () => {
        // Reset all steps
        donationStep2.classList.add('hide');
        donationStep3.classList.add('hide');
        donationStep1.classList.remove('hide');
        
        // Reset e-wallet selection
        gcash.classList.remove('active');
        paypal.classList.remove('active');
        disabledBtn.classList.add('disabled');
        
        // Reset image upload
        imagePreview.src = '';
        imagePreview.style.display = 'none';
        placeholder.style.display = 'block';
        imageFrame.classList.remove('has-image');
        fileInput.value = '';
        imageHolder = null;
        
        // Reset third proceed button
        proceeds[2].classList.remove('loading');
        proceeds[2].classList.add('disabled');
        
        // Show donation container
        donationContainer.style.display = 'flex';
    });

    gcash.addEventListener('click', () => {
        if (gcash.classList.contains('active')) {
            gcash.classList.remove('active');
        } else {
            gcash.classList.add('active');
            if (paypal.classList.contains('active')) {
                paypal.classList.remove('active');
            }
            disabledBtn.classList.remove('disabled');
            ewalletType = "GCash";
        }
        updateDisableBtnState();
    });

    paypal.addEventListener('click', () => {
        if (paypal.classList.contains('active')) {
            paypal.classList.remove('active');
        } else {
            paypal.classList.add('active');
            if (gcash.classList.contains('active')) {
                gcash.classList.remove('active');
            }
            disabledBtn.classList.remove('disabled');
            ewalletType = "PayPal";
        }
        updateDisableBtnState();
    });

    cancelDonation.addEventListener('click', () => {
        donationContainer.style.display = 'none';
    });

    disabledBtn.addEventListener('click', () => {
        if (checkActive()) {
            donationStep1.classList.add('hide');
            donationStep2.classList.remove('hide');

            gcashImgContainer.classList.add('hide');
            paypalImgContainer.classList.add('hide');

            if (ewalletType === "GCash") {
                gcashImgContainer.classList.remove('hide');
            } else if (ewalletType === "PayPal") {
                paypalImgContainer.classList.remove('hide');
            }
        }
    });

    backs[0].addEventListener('click', () => {
        donationStep2.classList.add('hide');
        donationStep1.classList.remove('hide');
    });

    proceeds[1].addEventListener('click', () => {
        donationStep2.classList.add('hide');
        donationStep3.classList.remove('hide');
    });

    imageFrame.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imageHolder = e.target.result;
                imagePreview.style.display = 'block';
                placeholder.style.display = 'none';
                imageFrame.classList.add('has-image');
                proceeds[2].classList.remove('disabled');
            };
            
            reader.readAsDataURL(file);
        }
    });

    backs[1].addEventListener('click', () => {
        donationStep3.classList.add('hide');
        donationStep2.classList.remove('hide');
    });

    proceeds[2].addEventListener('click', () => {
        if (imageHolder) {
            proceeds[2].classList.add('loading');
            proceeds[2].classList.add('disabled');

            setTimeout(() => {
                donationStep3.classList.add('hide');
            }, 2000);

            setTimeout(() => {
                donationConfirmation.style.display = 'flex';
                setTimeout(() => {
                    donationConfirmation.style.display = 'none';
                    donationContainer.style.display = 'none';
                }, 2000);
            }, 2000);
        }
    });


}); // End of forEach