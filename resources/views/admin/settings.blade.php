<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-settings.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <x-admin-sidebar/>

    <div class="admin-accounts">
        <div class="admin-settings-container">
            <div class="tab-navigation">
                {{-- Tabs linked by data-tab attribute, no longer changing routes --}}
                <a href="#profile" class="tab-button active" data-tab="profile">Admin Profile</a>
                <a href="#emails" class="tab-button" data-tab="emails">Email Templates</a>
                <a href="#policy" class="tab-button" data-tab="policy">Policy</a>
            </div>

            <div class="tab-content-wrapper">
                {{-- Admin Profile Tab Content (Default visible) --}}
                <div class="tab-content visible" id="profile">
                    <h2>Admin Profile</h2>
                    <div class="profile-header">
                        <img src="{{ asset('images/Christo Rey.png') }}" alt="Admin Profile Picture" class="profile-pic-large">
                        <button class="btn-secondary">Change Photo</button>
                    </div>
                    <form class="profile-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <div class="input-with-icon">
                                    <input type="text" id="firstName" value="Christo Rey">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <div class="input-with-icon">
                                    <input type="text" id="lastName" value="Espina">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="username">Username *</label>
                                <div class="input-with-icon">
                                    <input type="text" id="username" value="admin1">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <div class="input-with-icon">
                                    <input type="password" id="password" value="********">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number *</label>
                                <div class="input-with-icon">
                                    <input type="text" id="phoneNumber" value="+63 917 123 4567">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-with-icon">
                                    <input type="email" id="email" value="christoreyespina@gmail.com">
                                    <i class="fa-solid fa-pencil edit-icon"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Email Templates Tab Content --}}
                <div class="tab-content" id="emails">
                    <h2>Email Templates</h2>

                    <div class="template-card">
                        <h3 class="template-title">Welcome Email - New User</h3>
                        <div class="template-editor">
                            <textarea readonly>"Hi @{{first_name}},

                            Welcome to FUNdar! We're excited to have you join our community.

                            To get started, please verify your email address by clicking the link below:
                            @{{verification_link}}

                            Best regards,
                            The FUNdar Team"</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                   </div>

                    <div class="template-card">
                        <h3 class="template-title">Campaign Approved Email</h3>
                        <div class="template-editor">
                            <textarea readonly>Hi @{{first_name}},

                            Congratulations! Your campaign "@{{campaign_title}}" has been approved and is now live.

                            View your campaign: @{{campaign_link}}

                            Best regards,
                            The FUNdar Team</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                    </div>

                    <div class="template-card">
                        <h3 class="template-title">Donation Received Email</h3>
                        <div class="template-editor">
                            <textarea readonly>Hi @{{first_name}},

                            Thank you for your donation of ₱@{{amount}} to "@{{campaign_title}}"!
                            Your support makes a real difference.

                            Transaction ID: @{{transaction_id}}

                            Best regards,
                            The FUNdar Team</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                    </div>
                </div> 

                {{-- Policy Tab Content --}}
                <div class="tab-content" id="policy">
                    <h2>Terms & Policies</h2>

                    <div class="policy-card">
                        <h3 class="policy-title">Terms of Service</h3>
                        <div class="policy-editor">
                            <textarea readonly>By using FUNDar, you agree to these terms:
1. Account Registration- Users must provide accurate information
2. Campaign Guidelines- Campaigns must be for legitimate educational needs; All information must be truthful and verifiable
3. Donations- All donations are final as we only oversee all the donations</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                    </div>

                    <div class="policy-card">
                        <h3 class="policy-title">Privacy Policy</h3>
                        <div class="policy-editor">
                            <textarea readonly>FUNDar Privacy Policy:
1. We collect and process personal information to:
    - Provide our services
    - Account creation and management
    - Campaign hosting
    - Transaction processing
2. Data We Collect: Personal identification information, Payment information, Usage data
3. Data Protection: We use industry-standard encryption; Data is stored securely
4. We never share data without consent</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                    </div>

                    <div class="policy-card">
                        <h3 class="policy-title">Community Guidelines</h3>
                        <div class="policy-editor">
                            <textarea readonly>Community Guidelines:
1. Respect and Kindness- Treat all users with respect; No harassment or bullying
2. Authenticity- Campaign information must be truthful; Provide verifiable documentation when requested
3. Prohibited Content- No fraudulent campaigns; No offensive or inappropriate content; No spam or promotional content unrelated to education</textarea>
                            <i class="fa-solid fa-pencil edit-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin-settings.js') }}"></script>
</body>
</html>