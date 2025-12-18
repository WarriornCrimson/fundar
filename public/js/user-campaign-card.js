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

// Donation Requests Modal Functions
let transparencyPhotos = [];

function openDonationRequestsModal(campaignId) {
    const modal = document.getElementById('donationRequestsModal');
    if (modal) {
        modal.classList.add('active');
        // Load donation requests for this campaign
        loadDonationRequests(campaignId);
    }
}

function closeDonationRequestsModal() {
    const modal = document.getElementById('donationRequestsModal');
    if (modal) {
        modal.classList.remove('active');
    }
}

function loadDonationRequests(campaignId) {
    // This would typically fetch from your backend
    // For now, the sample data is already in the HTML
    console.log('Loading donation requests for campaign:', campaignId);
    
    // Check if table is empty
    const tbody = document.getElementById('donationRequestsBody');
    const emptyState = document.querySelector('.empty-requests');
    
    if (tbody && tbody.children.length === 0) {
        emptyState.style.display = 'flex';
    } else if (emptyState) {
        emptyState.style.display = 'none';
    }
}

// Search and Filter Functionality
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchDonor');
    const filterSelect = document.getElementById('filterStatus');
    
    if (searchInput) {
        searchInput.addEventListener('input', filterDonations);
    }
    
    if (filterSelect) {
        filterSelect.addEventListener('change', filterDonations);
    }
});


function filterDonations() {
    const searchTerm = document.getElementById('searchDonor')?.value.toLowerCase() || '';
    const statusFilter = document.getElementById('filterStatus')?.value || 'all';
    const rows = document.querySelectorAll('#donationRequestsBody tr');
    
    let visibleCount = 0;
    
    rows.forEach(row => {
        const donorName = row.querySelector('.donor-name')?.textContent.toLowerCase() || '';
        const donorEmail = row.querySelector('.donor-email')?.textContent.toLowerCase() || '';
        const status = row.getAttribute('data-status') || '';
        
        const matchesSearch = donorName.includes(searchTerm) || donorEmail.includes(searchTerm);
        const matchesStatus = statusFilter === 'all' || status === statusFilter;
        
        if (matchesSearch && matchesStatus) {
            row.style.display = '';
            visibleCount++;
        } else {
            row.style.display = 'none';
        }
    });
    
    // Show/hide empty state
    const emptyState = document.querySelector('.empty-requests');
    if (emptyState) {
        emptyState.style.display = visibleCount === 0 ? 'flex' : 'none';
    }
}

// View Receipt Modal
function viewReceipt(receiptUrl) {
    const modal = document.getElementById('viewReceiptModal');
    const receiptImage = document.getElementById('receiptImage');
    
    if (modal && receiptImage) {
        receiptImage.src = receiptUrl;
        modal.classList.add('active');
    }
}

function closeReceiptModal() {
    const modal = document.getElementById('viewReceiptModal');
    if (modal) {
        modal.classList.remove('active');
    }
}

// Accept Donation
function acceptDonation(donationId) {
    if (confirm('Are you sure you want to accept this donation?')) {
        // Send request to backend to accept donation
        console.log('Accepting donation:', donationId);
        
        // Update UI
        const row = document.querySelector(`tr:has(button[onclick*="${donationId}"])`);
        if (row) {
            row.setAttribute('data-status', 'approved');
            
            const statusBadge = row.querySelector('.status-badge');
            if (statusBadge) {
                statusBadge.className = 'status-badge approved';
                statusBadge.textContent = 'Approved';
            }
            
            const actionsCell = row.querySelector('.action-buttons').parentElement;
            if (actionsCell) {
                actionsCell.innerHTML = `
                    <span class="action-done">
                        <i class="fa-solid fa-check-circle"></i>
                        Approved
                    </span>
                `;
            }
        }
        
        alert('Donation accepted successfully!');
    }
}

// Reject Donation
function rejectDonation(donationId) {
    const reason = prompt('Please provide a reason for rejecting this donation:');
    
    if (reason) {
        // Send request to backend to reject donation
        console.log('Rejecting donation:', donationId, 'Reason:', reason);
        
        // Update UI
        const row = document.querySelector(`tr:has(button[onclick*="${donationId}"])`);
        if (row) {
            row.setAttribute('data-status', 'rejected');
            
            const statusBadge = row.querySelector('.status-badge');
            if (statusBadge) {
                statusBadge.className = 'status-badge rejected';
                statusBadge.textContent = 'Rejected';
            }
            
            const actionsCell = row.querySelector('.action-buttons').parentElement;
            if (actionsCell) {
                actionsCell.innerHTML = `
                    <span class="action-done" style="color: #DC2626;">
                        <i class="fa-solid fa-times-circle"></i>
                        Rejected
                    </span>
                `;
            }
        }
        
        alert('Donation rejected!');
    }
}

// Upload Transparency Modal
function openTransparencyModal(campaignId) {
    const modal = document.getElementById('transparencyModal');
    if (modal) {
        modal.classList.add('active');
        transparencyPhotos = [];
        document.getElementById('transparencyPreviewGrid').innerHTML = '';
        
        // Set up file upload
        const uploadBtn = document.getElementById('uploadTransparencyBtn');
        const fileInput = document.getElementById('transparencyInput');
        
        if (uploadBtn && fileInput) {
            uploadBtn.onclick = () => {
                if (transparencyPhotos.length >= 5) {
                    alert('Maximum 5 photos allowed');
                    return;
                }
                fileInput.click();
            };
            
            fileInput.onchange = (e) => {
                const files = Array.from(e.target.files);
                
                files.forEach(file => {
                    if (transparencyPhotos.length >= 5) {
                        alert('Maximum 5 photos allowed');
                        return;
                    }
                    
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            transparencyPhotos.push(event.target.result);
                            renderTransparencyPreview();
                        };
                        reader.readAsDataURL(file);
                    }
                });
                
                fileInput.value = '';
            };
        }
        
        // Character counter
        const descriptionInput = document.getElementById('transparencyDescription');
        const charCounter = document.getElementById('transparencyCount');
        
        if (descriptionInput && charCounter) {
            descriptionInput.addEventListener('input', () => {
                charCounter.textContent = descriptionInput.value.length;
            });
        }
        
        // Set today's date as default
        const dateInput = document.getElementById('transparencyDate');
        if (dateInput) {
            dateInput.value = new Date().toISOString().split('T')[0];
        }
    }
}

function renderTransparencyPreview() {
    const grid = document.getElementById('transparencyPreviewGrid');
    if (!grid) return;
    
    grid.innerHTML = '';
    transparencyPhotos.forEach((photo, index) => {
        const previewItem = document.createElement('div');
        previewItem.className = 'photo-preview-item';
        previewItem.innerHTML = `
            <img src="${photo}" alt="Preview ${index + 1}">
            <button class="btn-remove-photo" onclick="removeTransparencyPhoto(${index})">
                <i class="fa-solid fa-xmark"></i>
            </button>
        `;
        grid.appendChild(previewItem);
    });
}

function removeTransparencyPhoto(index) {
    transparencyPhotos.splice(index, 1);
    renderTransparencyPreview();
}

function closeTransparencyModal() {
    const modal = document.getElementById('transparencyModal');
    if (modal) {
        modal.classList.remove('active');
        // Reset form
        document.getElementById('transparencyTitle').value = '';
        document.getElementById('transparencyDescription').value = '';
        document.getElementById('transparencyCount').textContent = '0';
        document.getElementById('transparencyDate').value = '';
        transparencyPhotos = [];
        document.getElementById('transparencyPreviewGrid').innerHTML = '';
    }
}

function submitTransparency() {
    const title = document.getElementById('transparencyTitle').value.trim();
    const description = document.getElementById('transparencyDescription').value.trim();
    const date = document.getElementById('transparencyDate').value;
    
    if (!title) {
        alert('Please enter a report title');
        return;
    }
    
    if (!description) {
        alert('Please enter a description');
        return;
    }
    
    if (!date) {
        alert('Please select a date');
        return;
    }
    
    if (transparencyPhotos.length === 0) {
        alert('Please upload at least one photo or document');
        return;
    }
    
    // Save transparency report
    const report = {
        title: title,
        description: description,
        date: date,
        photos: transparencyPhotos,
        createdAt: new Date().toISOString()
    };
    
    console.log('Submitting transparency report:', report);
    
    // Here you would send this to your backend
    alert('Transparency report uploaded successfully!');
    closeTransparencyModal();
}

// Close Campaign Modal
function openCloseCampaignModal(campaignId) {
    const modal = document.getElementById('closeCampaignModal');
    if (modal) {
        modal.classList.add('active');
        // Store campaign ID for confirmation
        modal.setAttribute('data-campaign-id', campaignId);
    }
}

function closeCloseCampaignModal() {
    const modal = document.getElementById('closeCampaignModal');
    if (modal) {
        modal.classList.remove('active');
        modal.removeAttribute('data-campaign-id');
    }
}

function confirmCloseCampaign() {
    const modal = document.getElementById('closeCampaignModal');
    const campaignId = modal?.getAttribute('data-campaign-id');
    
    if (campaignId) {
        console.log('Closing campaign:', campaignId);
        
        // Here you would send request to backend to close campaign
        // After successful closure, redirect or update UI
        
        alert('Campaign closed successfully! It has been moved to your closed campaigns.');
        closeCloseCampaignModal();
        
        // Optionally reload the page or update UI
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
    