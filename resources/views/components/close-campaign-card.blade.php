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
            <p class="campaign-card-sm-raised">₱ {{ number_format(50000, 0) }} raised of ₱ {{ number_format(50000, 0) }}</p>
            <div class="campaign-card-sm-progress-bar">
                <div class="campaign-card-sm-progress-fill" style="--percentWidth: 100%"></div>
            </div>
        </div>
    </div>

    <div class="campaign-card-sm-content">
        <div class="badge-funded-percent">
            <div class="campaign-card-sm-closed">
                <i class="fa-solid fa-lock"></i>
                Closed
            </div>            
            <div class="campaign-badge-detail"> 
                Learning Material
            </div>
        </div>
        <p class="campaign-card-sm-title">Code for a Cause</p>
        <p class="campaign-card-sm-description">{{ Str::limit("Lorem ipsum dolor sit ame", 120) }}</p>
        
        <!-- Campaign Stats -->
        <div class="campaign-closed-stats">
            <div class="stat-item">
                <i class="fa-solid fa-calendar-check"></i>
                <div class="stat-details">
                    <span class="stat-label">Closed On</span>
                    <span class="stat-value">Nov 30, 2024</span>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <div class="stat-details">
                    <span class="stat-label">Total Donors</span>
                    <span class="stat-value">45</span>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-chart-line"></i>
                <div class="stat-details">
                    <span class="stat-label">Goal Reached</span>
                    <span class="stat-value">100%</span>
                </div>
            </div>
        </div>

        <div class="campaign-actions">
            <a href="{{ route('campaign.details', 1) }}" class="campaign-action-btn btn-view-closed" title="View Campaign">
                <i class="fa-solid fa-eye"></i>
                <span>View Campaign</span>
            </a>
            <button class="campaign-action-btn btn-transparency-closed" onclick="openClosedTransparencyModal(1)" title="View Transparency Reports">
                <i class="fa-solid fa-file-lines"></i>
                <span>Transparency</span>
            </button>
        </div>
    </div>
</div>

<!-- View Transparency Reports Modal -->
<div class="modal-overlay" id="closedTransparencyModal">
    <div class="modal-container transparency-reports-modal">
        <div class="modal-header-with-close">
            <div>
                <h2 class="modal-title">Transparency Reports</h2>
                <p class="modal-subtitle">View all transparency reports for this campaign</p>
            </div>
            <button class="modal-close-btn" onclick="closeClosedTransparencyModal()">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Campaign Summary -->
            <div class="transparency-summary">
                <div class="summary-header">
                    <h3>Code for a Cause</h3>
                    <span class="summary-status completed">
                        <i class="fa-solid fa-check-circle"></i>
                        Completed
                    </span>
                </div>
                <div class="summary-stats">
                    <div class="summary-stat">
                        <span class="summary-label">Total Raised</span>
                        <span class="summary-value">₱ 50,000</span>
                    </div>
                    <div class="summary-stat">
                        <span class="summary-label">Total Donors</span>
                        <span class="summary-value">45 people</span>
                    </div>
                    <div class="summary-stat">
                        <span class="summary-label">Reports Submitted</span>
                        <span class="summary-value">3 reports</span>
                    </div>
                </div>
            </div>

            <!-- Reports Timeline -->
            <div class="reports-timeline">
                <!-- Report 1 -->
                <div class="report-card">
                    <div class="report-header">
                        <div class="report-date">
                            <i class="fa-solid fa-calendar"></i>
                            <span>December 15, 2024</span>
                        </div>
                        <button class="btn-expand-report" onclick="toggleReport(1)">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>
                    <h3 class="report-title">First Month Progress Report</h3>
                    <p class="report-summary">Initial purchase of learning materials completed successfully.</p>
                    
                    <div class="report-content" id="report-1">
                        <div class="report-description">
                            <p>I'm happy to share that I've successfully purchased all the necessary textbooks and reference materials for this semester. The funds were used to buy 5 programming books, a scientific calculator, and online course subscriptions. Everything arrived on time and I'm already using them for my studies.</p>
                        </div>
                        
                        <div class="report-images">
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report1.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report2.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report3.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="report-meta">
                            <span class="report-receipts">
                                <i class="fa-solid fa-receipt"></i>
                                3 receipts attached
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Report 2 -->
                <div class="report-card">
                    <div class="report-header">
                        <div class="report-date">
                            <i class="fa-solid fa-calendar"></i>
                            <span>January 10, 2025</span>
                        </div>
                        <button class="btn-expand-report" onclick="toggleReport(2)">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>
                    <h3 class="report-title">Mid-Term Update</h3>
                    <p class="report-summary">Additional supplies purchased and enrolled in certification courses.</p>
                    
                    <div class="report-content" id="report-2">
                        <div class="report-description">
                            <p>With the remaining funds, I was able to purchase a new laptop charger and enroll in two professional certification courses that will help me advance my career in IT. I'm making great progress in both courses and expect to complete them by next month.</p>
                        </div>
                        
                        <div class="report-images">
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report4.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report5.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="report-meta">
                            <span class="report-receipts">
                                <i class="fa-solid fa-receipt"></i>
                                2 receipts attached
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Report 3 - Final Report -->
                <div class="report-card final-report">
                    <div class="report-header">
                        <div class="report-date">
                            <i class="fa-solid fa-calendar"></i>
                            <span>November 25, 2024</span>
                        </div>
                        <button class="btn-expand-report" onclick="toggleReport(3)">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="final-badge">
                        <i class="fa-solid fa-flag-checkered"></i>
                        Final Report
                    </div>
                    <h3 class="report-title">Campaign Completion & Thank You</h3>
                    <p class="report-summary">Final summary of all purchases and heartfelt gratitude to donors.</p>
                    
                    <div class="report-content" id="report-3">
                        <div class="report-description">
                            <p>I'm incredibly grateful to all 45 donors who made this campaign successful! Thanks to your generosity, I was able to purchase all necessary learning materials, enroll in certification courses, and complete my semester with excellent grades. Your support has not only helped me academically but also motivated me to work harder and give back to the community in the future.</p>
                            
                            <div class="final-stats">
                                <div class="final-stat">
                                    <i class="fa-solid fa-book"></i>
                                    <div>
                                        <strong>8 Textbooks</strong>
                                        <span>Purchased</span>
                                    </div>
                                </div>
                                <div class="final-stat">
                                    <i class="fa-solid fa-laptop"></i>
                                    <div>
                                        <strong>2 Online Courses</strong>
                                        <span>Completed</span>
                                    </div>
                                </div>
                                <div class="final-stat">
                                    <i class="fa-solid fa-certificate"></i>
                                    <div>
                                        <strong>1 Certification</strong>
                                        <span>Earned</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="report-images">
                            <div class="report-image-item" onclick="viewReportImage(`{{ asset('images/report6.jpg') }}`)">
                                <img src="{{ asset('images/Andrea.png') }}" alt="Report Image">
                                <div class="image-overlay">
                                    <i class="fa-solid fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="thank-you-section">
                            <i class="fa-solid fa-heart"></i>
                            <p>Thank you for believing in me and my education. Your kindness has made a lasting impact!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="empty-reports" style="display: none;">
                <i class="fa-solid fa-file-circle-exclamation"></i>
                <p>No transparency reports have been submitted for this campaign yet.</p>
            </div>
        </div>
    </div>
</div>

<!-- View Report Image Modal -->
<div class="modal-overlay" id="viewReportImageModal">
    <div class="modal-container report-image-modal">
        <button class="modal-close-btn" onclick="closeReportImageModal()">
            <i class="fa-solid fa-times"></i>
        </button>
        <div class="report-image-container">
            <img id="reportImagePreview" src="" alt="Report Image">
        </div>
    </div>
</div>

<script src="{{ asset('js/closecampaigncard.js') }}"></script>