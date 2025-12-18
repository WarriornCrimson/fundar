<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Verification | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/verification.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/campaign-details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>    
</head>
<body>
    <x-side-bar/>
    <div class="verification-container"> 
        <div class="page-header">
            <div class="back-navigation">
                <a href="{{ route('profile') }}" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back</span>
                </a>
            </div>
            <h1 class="page-title">Student Verification</h1>
        </div>

        <div class="form-container">
                <h3 class="section-heading">Educational Background</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="sub-heading">School <span class="required">*</span></label>
                        <input type="text" id="school" placeholder="University of Cebu">
                    </div>
                    <div class="form-group">
                        <label>Year Level <span class="required">*</span></label>
                        <input type="text" id="yearLevel" placeholder="3">
                    </div>
                </div>
 
                <div class="form-row">
                    <div class="form-group">
                        <label>Program <span class="required">*</span></label>
                        <input type="text" id="program" placeholder="Bachelor of Science in Information Technology">
                    </div>
                    <div class="form-group">
                        <label>Major (Optional)</label>
                        <input type="text" id="major" placeholder="Major">
                    </div>
                </div>

                <h3 class="section-heading documents">Documents <span class="required">*</span></h3>
                <p class="document-note">Submit your documents for admin verification to unlock campaign creation features.</p>

                <div class="form-group">
                    <p class="sub-heading">Student ID <span class="required">*</span></p>
                    <p class="label-subtitle">Upload a clear photo of your school ID (front and back)</p>
                    <div class="document-upload-box" id="studentIdUpload">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <input type="file" id="studentIdInput" accept="image/*" style="display: none;">
                </div>

                <div class="form-group coe">
                    <p class="sub-heading">Certificate of Enrollment <span class="required">*</span></p>
                    <p class="label-subtitle">Upload your current prospectus or curriculum guide</p>
                    <div class="document-upload-box" id="certificateUpload">
                        <i class="fa-solid fa-plus"></i>
                    </div> 
                    <input type="file" id="certificateInput" accept="image/*" style="display: none;">
                </div>

            <div class="modal-footer">
                <button class="btn-cancel" id="cancelVerification">Cancel</button>
                <button class="btn-submit" id="submitVerification">Submit</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/verification.js') }}"></script>
</body>
</html>