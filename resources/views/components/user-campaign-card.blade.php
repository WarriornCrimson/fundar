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
            <p class="campaign-card-sm-raised">₱ {{ number_format(30000, 0) }} raised of ₱ {{ number_format(50000, 0) }}</p>
            <div class="campaign-card-sm-progress-bar">
                <div class="campaign-card-sm-progress-fill" style="--percentWidth: {{ (30000 / 50000) * 100 }}%"></div>
            </div>
        </div>
    </div>

    <div class="campaign-card-sm-content">
        <div class="badge-funded-percent">
            <div class="campaign-card-sm-funded">
                {{ number_format((30000 / 50000) * 100 ) }}% Funded
            </div>            
            <div class="campaign-badge-detail"> 
                Learning Material
            </div>
        </div>
        <p class="campaign-card-sm-title">Code for a Cause</p>
        <p class="campaign-card-sm-description">{{ Str::limit("Lorem ipsum dolor sit ame", 120) }}</p>
        <div class="campaign-actions">
            <a href="{{ route('campaign.details', 1) }}" class="campaign-action-btn btn-visit" title="Visit Campaign">
                <i class="fa-solid fa-eye"></i>
                <span>Visit</span>
            </a>
            <button class="campaign-action-btn btn-requests" onclick="openDonationRequestsModal(1)" title="Donation Requests">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <span>Requests</span>
            </button>
            <button class="campaign-action-btn btn-transparency" onclick="openTransparencyModal(1)" title="Upload Transparency">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <span>Transparency</span>
            </button>
            <button class="campaign-action-btn btn-close" onclick="openCloseCampaignModal(1)" title="Close Campaign">
                <i class="fa-solid fa-lock"></i>
                <span>Close</span>
            </button>
        </div>
    </div>
</div>

<!-- Donation Requests Modal -->
<div class="modal-overlay" id="donationRequestsModal">
    <div class="modal-container donation-requests-modal">
        <div class="modal-header-with-close">
            <div>
                <h2 class="modal-title">Donation Requests</h2>
                <p class="modal-subtitle">Review and manage donation requests for your campaign</p>
            </div>
            <button class="modal-close-btn" onclick="closeDonationRequestsModal()">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Search and Filter -->
            <div class="requests-filter">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search donor name..." id="searchDonor">
                </div>
                <select id="filterStatus" class="filter-select">
                    <option value="all">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>

            <!-- Donation Requests Table -->
            <div class="requests-table-container">
                <table class="requests-table">
                    <thead>
                        <tr>
                            <th>Donor</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Mode</th>
                            <th>Receipt</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="donationRequestsBody">
                        <!-- Sample Row 1 -->
                        <tr data-status="pending">
                            <td>
                                <div class="donor-info">
                                    <img src="{{ asset('images/Andrea.png') }}" alt="Donor">
                                    <div>
                                        <p class="donor-name">John Doe</p>
                                        <p class="donor-email">john@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="amount">₱ 5,000</td>
                            <td>Nov 25, 2024</td>
                            <td>
                                <span class="mode-badge gcash">GCash</span>
                            </td>
                            <td>
                                <button class="btn-view-receipt" onclick="viewReceipt('receipt1.jpg')">
                                    <i class="fa-solid fa-image"></i>
                                    View
                                </button>
                            </td>
                            <td>
                                <span class="status-badge pending">Pending</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-accept" onclick="acceptDonation(1)" title="Accept">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                    <button class="btn-action btn-reject" onclick="rejectDonation(1)" title="Reject">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Sample Row 2 -->
                        <tr data-status="approved">
                            <td>
                                <div class="donor-info">
                                    <img src="{{ asset('images/Andrea.png') }}" alt="Donor">
                                    <div>
                                        <p class="donor-name">Jane Smith</p>
                                        <p class="donor-email">jane@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="amount">₱ 10,000</td>
                            <td>Nov 24, 2024</td>
                            <td>
                                <span class="mode-badge bank">Bank Transfer</span>
                            </td>
                            <td>
                                <button class="btn-view-receipt" onclick="viewReceipt('receipt2.jpg')">
                                    <i class="fa-solid fa-image"></i>
                                    View
                                </button>
                            </td>
                            <td>
                                <span class="status-badge approved">Approved</span>
                            </td>
                            <td>
                                <span class="action-done">
                                    <i class="fa-solid fa-check-circle"></i>
                                    Approved
                                </span>
                            </td>
                        </tr>
                        <!-- Sample Row 3 -->
                        <tr data-status="pending">
                            <td>
                                <div class="donor-info">
                                    <img src="{{ asset('images/Andrea.png') }}" alt="Donor">
                                    <div>
                                        <p class="donor-name">Mike Johnson</p>
                                        <p class="donor-email">mike@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="amount">₱ 3,500</td>
                            <td>Nov 26, 2024</td>
                            <td>
                                <span class="mode-badge paymaya">PayMaya</span>
                            </td>
                            <td>
                                <button class="btn-view-receipt" onclick="viewReceipt('receipt3.jpg')">
                                    <i class="fa-solid fa-image"></i>
                                    View
                                </button>
                            </td>
                            <td>
                                <span class="status-badge pending">Pending</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-accept" onclick="acceptDonation(3)" title="Accept">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                    <button class="btn-action btn-reject" onclick="rejectDonation(3)" title="Reject">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="empty-requests" style="display: none;">
                    <i class="fa-solid fa-inbox"></i>
                    <p>No donation requests found</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Receipt Modal -->
<div class="modal-overlay" id="viewReceiptModal">
    <div class="modal-container receipt-modal">
        <button class="modal-close-btn" onclick="closeReceiptModal()">
            <i class="fa-solid fa-times"></i>
        </button>
        <h2 class="modal-title">Donation Receipt</h2>
        <div class="receipt-image-container">
            <img id="receiptImage" src="" alt="Receipt">
        </div>
    </div>
</div>

<!-- Upload Transparency Modal -->
<div class="modal-overlay" id="transparencyModal">
    <div class="modal-container transparency-modal">
        <h2 class="modal-title">Upload Transparency Report</h2>
        <p class="modal-subtitle">Share how you've utilized the donations with your supporters</p>
        
        <div class="modal-body">
            <div class="photo-upload-section">
                <button class="btn-upload-photo" id="uploadTransparencyBtn">
                    <i class="fa-solid fa-plus"></i>
                    Add Photos/Documents (Max 5)
                </button>
                <input type="file" id="transparencyInput" accept="image/*" multiple style="display: none;">
                <div class="photo-preview-grid" id="transparencyPreviewGrid"></div>
            </div>

            <div class="form-group">
                <label>Report Title</label>
                <input type="text" id="transparencyTitle" placeholder="e.g., First Month Progress Report" maxlength="100">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea id="transparencyDescription" rows="6" maxlength="1000" placeholder="Describe how the funds were used, progress made, and any updates..."></textarea>
                <span class="char-counter"><span id="transparencyCount">0</span>/1000 characters</span>
            </div>

            <div class="form-group">
                <label>Report Date</label>
                <input type="date" id="transparencyDate">
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn-cancel" onclick="closeTransparencyModal()">Cancel</button>
            <button class="btn-submit" onclick="submitTransparency()">Upload Report</button>
        </div>
    </div>
</div>

<!-- Close Campaign Confirmation Modal -->
<div class="modal-overlay" id="closeCampaignModal">
    <div class="modal-container confirm-modal">
        <div class="modal-icon-warning">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <h2 class="modal-title">Close Campaign?</h2>
        <p class="modal-subtitle">Are you sure you want to close this campaign? This action cannot be undone. The campaign will be moved to your closed campaigns and no further donations will be accepted.</p>
        
        <div class="modal-footer">
            <button class="btn-cancel" onclick="closeCloseCampaignModal()">Cancel</button>
            <button class="btn-delete" onclick="confirmCloseCampaign()">
                <i class="fa-solid fa-lock"></i>
                Close Campaign
            </button>
        </div>
    </div>
</div>

<script src="{{ asset('js/user-campaign-card.js') }}"></script>