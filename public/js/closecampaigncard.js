// Closed Campaign Card JavaScript
let currentClosedCampaignId = null;

// Open Closed Transparency Modal
function openClosedTransparencyModal(campaignId) {
    currentClosedCampaignId = campaignId;
    const modal = document.getElementById('closedTransparencyModal');
    
    if (modal) {
        modal.classList.add('active');
        
        // Load transparency reports for this campaign
        loadTransparencyReports(campaignId);
    }
}

// Close Closed Transparency Modal
function closeClosedTransparencyModal() {
    const modal = document.getElementById('closedTransparencyModal');
    
    if (modal) {
        modal.classList.remove('active');
        currentClosedCampaignId = null;
        
        // Collapse all expanded reports
        const allReports = document.querySelectorAll('.report-content');
        const allButtons = document.querySelectorAll('.btn-expand-report');
        
        allReports.forEach(report => report.classList.remove('active'));
        allButtons.forEach(button => button.classList.remove('active'));
    }
}

// Load Transparency Reports
function loadTransparencyReports(campaignId) {
    // This would typically fetch from your backend
    console.log('Loading transparency reports for campaign:', campaignId);
    
    // Check if there are any reports
    const reportsTimeline = document.querySelector('.reports-timeline');
    const emptyState = document.querySelector('.empty-reports');
    
    if (reportsTimeline && reportsTimeline.children.length === 0) {
        if (emptyState) emptyState.style.display = 'flex';
        if (reportsTimeline) reportsTimeline.style.display = 'none';
    } else {
        if (emptyState) emptyState.style.display = 'none';
        if (reportsTimeline) reportsTimeline.style.display = 'flex';
    }
}

// Toggle Report Expansion
function toggleReport(reportId) {
    const reportContent = document.getElementById(`report-${reportId}`);
    const button = event.currentTarget;
    
    if (reportContent && button) {
        // Toggle the clicked report
        const isActive = reportContent.classList.contains('active');
        
        if (isActive) {
            // Collapse
            reportContent.classList.remove('active');
            button.classList.remove('active');
        } else {
            // Expand
            reportContent.classList.add('active');
            button.classList.add('active');
        }
    }
}

// View Report Image in Modal
function viewReportImage(imageUrl) {
    const modal = document.getElementById('viewReportImageModal');
    const imagePreview = document.getElementById('reportImagePreview');
    
    if (modal && imagePreview) {
        imagePreview.src = imageUrl;
        modal.classList.add('active');
    }
}

// Close Report Image Modal
function closeReportImageModal() {
    const modal = document.getElementById('viewReportImageModal');
    
    if (modal) {
        modal.classList.remove('active');
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    // Close modals when clicking outside
    const modals = document.querySelectorAll('.modal-overlay');
    
    modals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
    
    // Add keyboard navigation for modals
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            // Close any open modals
            const activeModals = document.querySelectorAll('.modal-overlay.active');
            activeModals.forEach(modal => {
                modal.classList.remove('active');
            });
        }
    });
    
    // Smooth scrolling for report timeline
    const reportsTimeline = document.querySelector('.reports-timeline');
    if (reportsTimeline) {
        // Add animation when reports come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.6s ease';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        const reportCards = document.querySelectorAll('.report-card');
        reportCards.forEach(card => observer.observe(card));
    }
    
    // Add loading states for images
    const reportImages = document.querySelectorAll('.report-image-item img');
    reportImages.forEach(img => {
        img.addEventListener('load', () => {
            img.parentElement.classList.add('loaded');
        });
        
        img.addEventListener('error', () => {
            img.parentElement.classList.add('error');
        });
    });
});

// Export Campaign Report (Optional Feature)
function exportCampaignReport(campaignId) {
    console.log('Exporting campaign report for campaign:', campaignId);
    
    // This would generate a PDF or downloadable report
    // You can implement this feature if needed
    
    alert('Campaign report export feature coming soon!');
}

// Share Transparency Report (Optional Feature)
function shareTransparencyReport(reportId) {
    console.log('Sharing transparency report:', reportId);
    
    // This would generate a shareable link
    // You can implement this feature if needed
    
    const shareUrl = `${window.location.origin}/transparency/${reportId}`;
    
    // Copy to clipboard
    if (navigator.clipboard) {
        navigator.clipboard.writeText(shareUrl).then(() => {
            alert('Transparency report link copied to clipboard!');
        }).catch(err => {
            console.error('Failed to copy link:', err);
        });
    }
}

// Print Report (Optional Feature)
function printReport(reportId) {
    console.log('Printing report:', reportId);
    
    // Create a print-friendly version
    const reportContent = document.getElementById(`report-${reportId}`);
    
    if (reportContent) {
        const printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Transparency Report</title>');
        printWindow.document.write('<style>body{font-family:Arial,sans-serif;padding:20px;} img{max-width:100%;} h3{color:#707AF2;}</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(reportContent.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
}

// Calculate Campaign Impact Stats (Optional)
function calculateCampaignImpact(campaignId) {
    // This could calculate various metrics like:
    // - Average donation amount
    // - Most generous donor
    // - Campaign duration
    // - Funds utilization breakdown
    
    console.log('Calculating impact stats for campaign:', campaignId);
    
    // You can display these in a separate modal or section
}

// Validate Transparency Report (For admin/review purposes)
function validateTransparencyReport(reportId) {
    console.log('Validating transparency report:', reportId);
    
    // This could be used by admins to verify reports
    // Check for:
    // - Receipt authenticity
    // - Proper fund utilization
    // - Complete documentation
    
    return {
        isValid: true,
        score: 95,
        issues: []
    };
}