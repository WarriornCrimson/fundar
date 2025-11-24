const badges = document.querySelectorAll('.campaign-badge-detail');
    
    badges.forEach(badge => {
    const badgeCategory = badge.textContent.trim();

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
            break
        case 'Extracurricular':
            badge.style.background = ec;
            break;
        case 'General Assistance':
            badge.style.background = ga;
            break;
    }
    });
    


// Tab switching
const tabBtns = document.querySelectorAll('.tab-btn');
const tabPanels = document.querySelectorAll('.tab-panel');

tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const tabName = btn.dataset.tab;
        
        // Remove active class from all tabs and panels
        tabBtns.forEach(b => b.classList.remove('active'));
        tabPanels.forEach(p => p.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding panel
        btn.classList.add('active');
        document.getElementById(`${tabName}-panel`).classList.add('active');
    });
});

// Bookmark functionality
const saveCampaign = document.querySelector('.bookmark-btn-detail');
const changeSaveIcon = document.querySelector('.bookmark-btn-detail i');
const displaySaveMessage = document.querySelector('.save-campaign');

const checkMark = '<i class="fi fi-br-check"></i>';
const exMark = '<i class="fi fi-br-x"></i>';


    saveCampaign.addEventListener('click', () => {
        if (changeSaveIcon.classList.contains('fa-regular')) {
            changeSaveIcon.classList.replace('fa-regular', 'fa-solid');
                displaySaveMessage.innerHTML = checkMark + ' Campaign Saved';
                displaySaveMessage.classList.add('show');
                setTimeout(() => {
                    displaySaveMessage.classList.remove('show');
                }, 2000);
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

const voteNum = document.querySelectorAll('.vote-number');

let currentVoteCount = Number(voteNum[0].textContent);
let currentCopyCount = Number(voteNum[1].textContent);

const formatNumber = (num) => {
    return Intl.NumberFormat('en', {
        notation: 'compact',
        compactDisplay: 'short'
    }).format(num);
};

 if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
    }

if (currentCopyCount > 0) {
        voteNum[1].classList.remove('hidden');
 }


// Action buttons
const shareUpBtn = document.querySelector('.share-up-detail'); 
const shareDownBtn = document.querySelector('.share-down-detail');
const copyLinkBtn = document.querySelector('.copy-link-detail');

shareUpBtn.addEventListener('click', () => {
        if (shareDownBtn.classList.contains('downvoted')) {
            shareDownBtn.classList.remove('downvoted');
        }

        if (shareUpBtn.classList.contains('upvoted')) {
            shareUpBtn.classList.remove('upvoted');
            currentVoteCount -= 1;
        } else {
            shareUpBtn.classList.add('upvoted');
            currentVoteCount += 1;
        }

        if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
        } else {
            voteNum[0].classList.add('hidden');
        }

        voteNum[0].textContent = formatNumber(currentVoteCount);
});

shareDownBtn.addEventListener('click', () => {
    if (shareUpBtn.classList.contains('upvoted')) {
        shareUpBtn.classList.remove('upvoted');
    }

    if (currentVoteCount > 0) {
        voteNum[0].classList.remove('hidden');
        } else {
            voteNum[0].classList.add('hidden');
        }
    shareDownBtn.classList.toggle('downvoted');
});

copyLinkBtn.addEventListener('click', () => {
if (copyLinkBtn.classList.contains('copied')) {
            copyLinkBtn.classList.remove('copied');
            currentCopyCount -= 1;
            navigator.clipboard.writeText(window.location.href);

        } else {
            copyLinkBtn.classList.add('copied');
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
    const donationContainer = document.querySelector('.donation-popup-blur');
    const donateBtn = document.querySelector('.donate-btn-detail');
    
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

    const commentInput = document.querySelector('.write-comment-area');
    const commentCharsCount = document.querySelector('#count');
    const commentLimiter = document.querySelector('.comment-limit');
    const postComment = document.querySelector('.post-comment');
    const andreaComment = document.querySelector('.user-comment');
    const andreaContent = document.querySelector('.comment-content');
    let len;
    let previousComment;

    commentInput.addEventListener('input', () => {

        len = commentInput.value.replace(/\s+/g, "").length;
        commentCharsCount.textContent = len;

        if(commentInput.value.trim().length >= 500) {
            commentCharsCount.classList.add('reached');
        } else {
            commentCharsCount.classList.remove('reached');
        }      

        if(commentInput.value.trim().length > 0 && andreaComment.classList.contains('hide')) {
            postComment.classList.remove('disabled');
        } else {
            postComment.classList.add('disabled');
        }

        if(previousComment == commentInput.value.trim()) {postComment.classList.add('disabled')}
    });

    const commentEllipis = document.querySelector('.comment-ellipsis');
    const deleteComment = document.querySelector('.delete-comment');
    const editComment = document.querySelector('.edit-comment');
    const commentSettings = document.querySelector('.comment-settings');
    const cancelEdit = document.querySelector('.cancel-edit');
    const displayPostTime = document.querySelector('.postTime');
    let timestamp;
    let isEdited = false;
    const totalComment = document.querySelector('.comment-story-header h2');
    let commentCount = Number(totalComment.textContent.match(/\d+/)[0]); 

    postComment.addEventListener('click', () => {

        if(previousComment == commentInput.value.trim()) {return;}
        else {postComment.classList.remove('disabled');}

        if(!cancelEdit.classList.contains('hide')) {
            cancelEdit.classList.add('hide');
        }

        if(andreaComment.classList.contains('hide')) {
            andreaContent.textContent = commentInput.value;
            previousComment = andreaContent.textContent;
        }

        if (len != 0 && andreaComment.classList.contains('hide')) {
            andreaComment.classList.remove('hide');

            if(!isEdited) {
            commentCount += 1;
            totalComment.textContent = `Comments (${commentCount})`; }
        }

        timestamp = new Date();

        if(isEdited) {
            displayPostTime.textContent = `edited • ${timeAgo(timestamp)}`;
            isEdited = false;
        }

        else {
            displayPostTime.textContent = timeAgo(timestamp);
        }
        len = 0;
        postComment.classList.add('disabled');
        commentInput.value = "";
        commentCharsCount.textContent = "0";
    });

    setInterval(() => {
        if (timestamp) { 
            displayPostTime.textContent = timeAgo(timestamp);
        }
    }, 60000);


    function timeAgo(timestamp) {
    const now = new Date();
    const posted = new Date(timestamp);
    const seconds = Math.floor((now - posted) / 1000);

    // under 1 minute
    if (seconds < 60) return `${seconds}s ago`;

    const minutes = Math.floor(seconds / 60);
    if (minutes < 60) return `${minutes}m ago`;

    const hours = Math.floor(minutes / 60);
    if (hours < 24) return `${hours}h ago`;

    const days = Math.floor(hours / 24);
    if (days < 7) return `${days}d ago`;

    // 7 days or more → show actual date
    return posted.toLocaleDateString("en-US", {
        month: "short",
        day: "numeric",
        year: "numeric"
    });
    }

    deleteComment.addEventListener('click', () => {
        andreaComment.classList.add('hide');
        previousComment = "";
        commentCount -= 1;
        totalComment.textContent =  `Comments (${commentCount})`;
    })

    editComment.addEventListener('click', () => {
        commentInput.value = andreaContent.textContent.trim();
        andreaComment.classList.add('hide');
        isEdited = true;
        commentCharsCount.textContent = commentInput.value.length;
        cancelEdit.classList.remove('hide');
    });

    cancelEdit.addEventListener('click', () => {
        commentCharsCount.textContent = "0";
        isEdited = false;
        andreaComment.classList.remove('hide');
        cancelEdit.classList.add('hide');
        commentInput.value = "";
    })

    commentEllipis.addEventListener('click', (e) => {
        e.stopPropagation();
        commentSettings.classList.toggle('hide');
    });

    document.addEventListener('click', (e) => {
    if (!commentSettings.contains(e.target) && !commentEllipis.contains(e.target)) {
        commentSettings.classList.add('hide');
    }
    });

    window.addEventListener('scroll', () => {
    commentSettings.classList.add('hide');
    });

    const hearts = document.querySelectorAll('.heart');

    hearts.forEach(heart => {
        const icon = heart.querySelector('.heart-count-con i'); 
        
        const countEl = heart.querySelector('.heart-count'); 

        if (!countEl) {
            console.error("Missing .heart-count element in a heart container.");
            return;
        }

        let count = Number(countEl.textContent.trim()); 

        heart.addEventListener('click', () => {
            const isLiked = heart.classList.toggle('liked');

            if (isLiked) {
                icon.className = "fi fi-sr-heart";
                count++;
            } else {
                icon.className = "fi fi-rr-heart";
                count--;
            }

            
            if(count == 0) {
                countEl.classList.add('hide');
            } else {
                countEl.classList.remove('hide');
            }
            countEl.textContent = count;
        });
    });

    


