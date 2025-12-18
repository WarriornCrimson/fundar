<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up | FUNDar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/pages/registration.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="registration-container">
        <!-- Left Section -->
        <div class="left-section">
            <a class="back-btn" href="{{ route('/') }}">
                <i class="fas fa-arrow-left"></i>
            </a>
            
            <div class="welcome-text">
                <p>Glad you’re here!</p>
                <h1>Join Us Today</h1>
            </div>
            
            <div class="illustration-box">
                <img src="{{ asset('images/Login.png') }}">
            </div>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="header">
                <div class="logo">
                    <img src="{{ asset('images/favicon.png') }}">
                </div>
                <div class="header-btns">
                    <a class="btn-outline" href="{{ asset('login') }}">Login</a>
                    <a class="btn-link" href="{{ asset('registration') }}">Register</a>
                </div>
            </div>

            <div class="registration-form">
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>

                <div class="registration-header">
                    
                    <section id="step-1">
                        <h1>Set up your account</h1>
                        <p>Choose a role to begin your journey with us.</p>
                        <div class="input-fields">
                            <div class="role student-role">
                                <img src="{{ asset('images/StudentCharacter.png') }}">
                                <h1>Student</h1>
                            </div>
                            <div class="role donor-role">
                                <img src="{{ asset('images/DonorCharacter.png') }}">
                                <h1>Donor</h1>
                            </div>
                        </div>  
                    </section> 

                    <!--Student Flow-->
                    <section id="step-2">
                        <h1>Student Details</h1>
                        <p>Kindly provide your details accurately.</p>
                        <div class="input-fields">
                            <form>
                            <div class="form-group name-inputs">
                                <div>
                                <label for="firstname">First Name<span class="required">*</span></label>
                                <input type="text" id="firstname" name="firstname" required>
                                </div>
                                <div>
                                <label for="lastname">Last Name<span class="required">*</span></label>
                                <input type="text" id="lastname" name="lastname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email<span class="required">*</span></label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password<span class="required">*</span></label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="c-password">Confirm Password<span class="required">*</span></label>
                                <input type="password" id="cpassword" name="cpassword" required>
                            </div>
                            </form>    
                        </div>

                        <div class="section-btns">
                            <button class="step-2-back-btn">
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <button class="btn-primary next">Next</button>
                        </div>                                             
                    </section>

                    <section id="step-3">
                        <h1>Student Details</h1>
                        <p>Kindly provide your details accurately.</p>
                        <div class="input-fields">
                            <form>
                            <div class="form-group">
                                <label for="school">School<span class="required">*</span></label>
                                <input list="schools-bohol-cebu" id="school" name="school" required>
                                <datalist id="schools-bohol-cebu">
                                    <option value="Bohol Island State University">
                                    <option value="Holy Name University">
                                    <option value="University of Bohol">
                                    <option value="University of San Carlos">
                                    <option value="Cebu Technological University">
                                    <option value="Asian College of Technology">
                                    <option value="University of San Jose – Recoletos">
                                    <option value="Southwestern University – PHINMA">
                                    <option value="Cebu Normal University">
                                    <option value="University of Cebu">
                                </datalist>

                            </div>
                            <div class="form-group year-inputs">
                                <div>
                                <label for="studentid">Student ID<span class="required">*</span></label>
                                <input type="number" id="studentid" name="studentid" required>
                                </div>
                                <div>
                                <label for="yearlevel">Year Level<span class="required">*</span></label>
                                <input type="number" id="yearlevel" name="yearlevel" min="1" max="4" required>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="program">Program<span class="required">*</span></label>
                                <input list="programs" id="program" name="program" required>
                                <datalist id="programs">
                                    <option value="BS Information Technology">
                                    <option value="BS Computer Science">
                                    <option value="BS Computer Engineering">
                                    <option value="BS Information Systems">

                                    <option value="BS Nursing">
                                    <option value="BS Medical Technology">
                                    <option value="BS Pharmacy">
                                    <option value="BS Physical Therapy">

                                    <option value="BS Business Administration">
                                    <option value="BS Accountancy">
                                    <option value="BS Management Accounting">
                                    <option value="BS Entrepreneurship">
                                    <option value="BS Marketing Management">
                                    <option value="BS Human Resource Management">

                                    <option value="BS Psychology">
                                    <option value="AB Psychology">
                                    <option value="AB Sociology">
                                    <option value="AB Political Science">

                                    <option value="Bachelor of Secondary Education">
                                    <option value="Bachelor of Elementary Education">
                                    <option value="BSE Major in English">
                                    <option value="BSE Major in Math">

                                    <option value="BS Hospitality Management">
                                    <option value="BS Tourism Management">
                                    <option value="BS Hotel and Restaurant Management">

                                    <option value="BS Civil Engineering">
                                    <option value="BS Mechanical Engineering">
                                    <option value="BS Electrical Engineering">
                                    <option value="BS Electronics Engineering">
                                    <option value="BS Industrial Engineering">

                                    <option value="BS Criminology">
                                    <option value="BS Social Work">

                                    <option value="BS Biology">
                                    <option value="BS Chemistry">
                                    <option value="BS Environmental Science">

                                </datalist>
                            </div>
                            </form>   
                        </div>
                        
                        <div class="section-btns3">
                            <button class="step-3-back-btn">
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <button class="btn-primary next3">Next</button>
                        </div> 

                    </section>                    

                    <section id="step-4">
                        <h1>Student Details</h1>
                        <p>Set up your profile picture.</p>
                        <div class="input-fields">                        
                            <div class="upload-container">
                                <label for="imageFrame">Profile Picture (Optional)</label>
                                <div class="image-frame" id="imageFrame">
                                    <div class="placeholder" id="placeholder">
                                        <div class="placeholder-icon">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <img id="imagePreview" alt="Preview">
                                </div>
                                
                                <input type="file" id="fileInput" accept="image/*" name="profilePicture">
                            </div>                      
                        </div>
                        
                        <div class="section-btns3">
                            <button class="step-4-back-btn">
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <button class="btn-secondary next4">Skip</button>
                        </div> 

                    </section>

                    <!--Donor Flow-->
                    
                    <section id="step-3-donor">
                        <h1>Donor Details</h1>
                        <p>Kindly provide your details accurately.</p>
                        <div class="input-fields">
                            <form>
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input list="occupations" id="occupation" name="occupation">
                                <datalist id="occupations">
                                    <option value="Accountant">
                                    <option value="Architect">
                                    <option value="Artist">
                                    <option value="Bank Teller">
                                    <option value="Barista">
                                    <option value="Bartender">
                                    <option value="Carpenter">
                                    <option value="Chef">
                                    <option value="Civil Engineer">
                                    <option value="Clerk">
                                    <option value="Construction Worker">
                                    <option value="Customer Service Representative">
                                    <option value="Data Analyst">
                                    <option value="Delivery Rider">
                                    <option value="Dentist">
                                    <option value="Doctor">
                                    <option value="Driver">
                                    <option value="Electrician">
                                    <option value="Engineer">
                                    <option value="Factory Worker">
                                    <option value="Farmer">
                                    <option value="Firefighter">
                                    <option value="Fisherman">
                                    <option value="Graphic Designer">
                                    <option value="Hairdresser">
                                    <option value="IT Specialist">
                                    <option value="Janitor">
                                    <option value="Lawyer">
                                    <option value="Librarian">
                                    <option value="Machine Operator">
                                    <option value="Mechanical Engineer">
                                    <option value="Medical Technologist">
                                    <option value="Nurse">
                                    <option value="Office Assistant">
                                    <option value="Pharmacist">
                                    <option value="Photographer">
                                    <option value="Pilot">
                                    <option value="Plumber">
                                    <option value="Police Officer">
                                    <option value="Programmer">
                                    <option value="Receptionist">
                                    <option value="Sales Associate">
                                    <option value="Security Guard">
                                    <option value="Software Developer">
                                    <option value="Teacher">
                                    <option value="Technician">
                                    <option value="Waiter">
                                    <option value="Web Developer">
                                    <option value="Welder">

                                </datalist>
                            </div>
                            <div class="form-group year-inputs">
                                <div>
                                    <label for="phone">Phone Number</label>
                                        <div class="phone-input-container">
                                            <select class="country-code" id="countryCode">
                                                <option value="+63">+63</option>
                                                <option value="+1">+1</option>
                                                <option value="+44">+44</option>
                                                <option value="+81">+81</option>
                                                <option value="+82">+82</option>
                                                <option value="+86">+86</option>
                                                <option value="+91">+91</option>
                                            </select>
                                            <input type="tel" class="phone-number" id="phone" name="phone" placeholder="9XX XXX XXXX" required>
                                        </div>
                                </div>
                                <div>
                                <label for="gender">Gender</label>
                                <input id="gender" name="gender">
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input list="countries" id="country" name="country">
                                <datalist id="countries">
                                    <!-- Asia -->
                                    <option value="Afghanistan">
                                    <option value="Bangladesh">
                                    <option value="Brunei">
                                    <option value="Cambodia">
                                    <option value="China">
                                    <option value="India">
                                    <option value="Indonesia">
                                    <option value="Japan">
                                    <option value="Malaysia">
                                    <option value="Myanmar">
                                    <option value="Nepal">
                                    <option value="Pakistan">
                                    <option value="Philippines">
                                    <option value="Singapore">
                                    <option value="South Korea">
                                    <option value="Sri Lanka">
                                    <option value="Taiwan">
                                    <option value="Thailand">
                                    <option value="Vietnam">
                                    
                                    <!-- North America -->
                                    <option value="Canada">
                                    <option value="Mexico">
                                    <option value="United States">
                                    
                                    <!-- Europe -->
                                    <option value="Austria">
                                    <option value="Belgium">
                                    <option value="Denmark">
                                    <option value="Finland">
                                    <option value="France">
                                    <option value="Germany">
                                    <option value="Greece">
                                    <option value="Ireland">
                                    <option value="Italy">
                                    <option value="Netherlands">
                                    <option value="Norway">
                                    <option value="Poland">
                                    <option value="Portugal">
                                    <option value="Spain">
                                    <option value="Sweden">
                                    <option value="Switzerland">
                                    <option value="United Kingdom">
                                    
                                    <!-- Oceania -->
                                    <option value="Australia">
                                    <option value="New Zealand">
                                    
                                    <!-- Middle East -->
                                    <option value="Saudi Arabia">
                                    <option value="United Arab Emirates">
                                    <option value="Qatar">
                                    <option value="Kuwait">
                                    
                                    <!-- Africa -->
                                    <option value="Egypt">
                                    <option value="Nigeria">
                                    <option value="South Africa">
                                </datalist>
                            </div>
                            </form>   
                        </div>
                        
                        <div class="section-btns3">
                            <a class="donor-step-3-back-btn">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                            <button class="btn-primary donor-next3">Next</button>
                        </div> 
                    </section>

                    
                    <section id="confirm-submission">
                        <i class="fa-solid fa-circle-check fa-2xl large-checkmark"></i>
                        <h1>Registration Successful!</h1>
                        <p>Log in to start exploring and make the most of every opportunity that awaits you.</p>
                    </section>
                </div>
            </div>

        </div>
    </div>

    <div class="review-registration">
        <div class="logo">
            <img src="{{ asset('images/favicon.png') }}">
        </div>
        <h1>Review Registration Details</h1>
        <hr>
        <div class="review-contents">
            <div class="profile-review">
                <div class="img-container">
                    <div class="img-container-profile">
                    <img src="{{ asset('images/Default-Profile.png') }}">
                    <button class="profile-options">
                        <i class="fas fa-camera"></i>
                    </button>
                    </div>
                </div>

                <div class="input-fields">
                    <form>
                    <div class="form-group name-inputs">
                        <div>
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname-review" name="firstname" disabled>
                        </div>
                        <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname-review" name="lastname" disabled>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <div class="profile-details">
                <div class="input-fields">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email-review" name="email" disabled>
                        </div>
                        <div class="form-group year-inputs">
                            <div>
                            <label for="studentid">Student ID</label>
                            <input type="number" id="studentid-review" name="studentid" disabled>
                            </div>
                            <div>
                            <label for="yearlevel">Year Level</label>
                            <input type="number" id="yearlevel-review" name="yearlevel" disabled>
                            </div>
                        </div>                         
                        <div class="form-group">
                            <label for="school">School</label>
                            <input list="schools-bohol-cebu" id="school-review" name="school" disabled>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input list="programs" id="program-review" name="program" disabled>                           
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
        <div class="section-btns5">
            <a class="step-5-back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="cancel-submit">
                <div class="btn-secondary">Cancel</div>
                <button class="btn-primary next5">Submit</button>
            </div>
        </div>         
    </div>

    <div class="donor-review-registration">
        <div class="logo">
            <img src="{{ asset('images/favicon.png') }}">
        </div>
        <h1>Review Registration Details</h1>
        <hr>
        <div class="review-contents">
            <div class="profile-review">
                <div class="img-container">
                    <div class="img-container-profile">
                    <img src="{{ asset('images/Default-Profile.png') }}">
                    <button class="profile-options">
                        <i class="fas fa-camera"></i>
                    </button>
                    </div>
                </div>

                <div class="input-fields">
                    <form>
                    <div class="form-group name-inputs">
                        <div>
                        <label for="firstname">First Name</label>
                        <input type="text" id="donor-firstname-review" name="firstname" disabled>
                        </div>
                        <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="donor-lastname-review" name="lastname" disabled>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <div class="profile-details">
                <div class="input-fields">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="donor-email-review" name="email" disabled>
                        </div>
                            <div class="form-group year-inputs">
                                <div>
                                    <label for="phone">Phone Number</label>
                                    <div class="phone-input-container">
                                        <input type="tel" class="phone-number" id="phoneRev" name="phone" placeholder="9XX XXX XXXX" disabled>
                                    </div>
                                </div>
                                <div>
                                <label for="gender">Gender</label>
                                <input id="genderRev" name="gender" disabled>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="occupationRev">Occupation</label>
                                <input id="occupationRev" name="country" disabled>
                            </div>                            
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input id="countryRev" name="country" disabled>
                            </div>                                            
                    </form>
                </div>
            </div>
        </div>
        <div class="section-btns5">
            <a class="donor-step-5-back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="cancel-submit">
                <div class="btn-secondary">Cancel</div>
                <button class="btn-primary donor-next5">Submit</button>
            </div>
        </div>         
    </div>

    <script src="{{ asset('js/registrationscript.js') }}"></script>
</body>
</html>