const studentRole = document.querySelector('.student-role')
const donorRole = document.querySelector('.donor-role');
let selectedRole = '';

const step1 = document.getElementById('step-1');
const step2 = document.getElementById('step-2');
const step2contents = document.querySelector('#step-2');
const controls = document.querySelector('.section-btns');
const progressBar = document.querySelector('.progress-fill');
const backBtn = document.querySelector('.step-2-back-btn');
const nextBtn = document.querySelector('.next');
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const pass = document.getElementById('password');
const cpass = document.getElementById('cpassword');
const school = document.querySelector('#school');
const studentID = document.querySelector('#studentid');
const yearLevel = document.querySelector('#yearlevel');
const program = document.querySelector('#program');
const step3 = document.querySelector('#step-3');
const controls2 = document.querySelector('.section-btns3');
const nextBtn2 = document.querySelector('.next3');
const backBtn2 = document.querySelector('.step-3-back-btn');
const donorBackBtn2 = document.querySelector('.donor-step-3-back-btn');
const donorNextBtn2 = document.querySelector('.donor-next3');
const step4 = document.querySelector('#step-4');
const nextBtn3 = document.querySelector('.next4');
const backBtn3 = document.querySelector('.step-4-back-btn');
const registrationCon = document.querySelector('.registration-container');
const reviewCon = document.querySelector('.review-registration');
const backBtn4 = document.querySelector('.step-5-back-btn');
const submit = document.querySelector('.next5');
const confirmation = document.querySelector('#confirm-submission');
const progressBarHolder = document.querySelector('.progress-bar');
const register = document.querySelector('.btn-link');

const occupation = document.querySelector('#occupation');
const country = document.querySelector('#country');
const gender = document.querySelector('#gender');
const phoneNum = document.querySelector('#phone');

const donorStep3 = document.querySelector('#step-3-donor');
const donorBackBtn5 = document.querySelector('.donor-step-5-back-btn');
const donorReview = document.querySelector('.donor-review-registration'); 
const donorSubmit = document.querySelector('.donor-next5');
 
studentRole.addEventListener('click', () => {
    selectedRole = 'Student';
    step2Flow();
});

function step2Flow() {
    step1.style.display = 'none';
    step2.style.display = 'block'; 
    controls.style.display = 'flex';
    progressBar.style.width = '50%';
}

backBtn.addEventListener('click', () => {
    selectedRole = ''; 
    step2BackBtn();
});

function step2BackBtn() {
    step1.style.display = 'block';
    step2.style.display = 'none';
    controls.style.display = 'none';
    progressBar.style.width = '25%';  
}

backBtn2.addEventListener('click', () => {
    step3BackBtn();
});

function step3BackBtn() {
    step2.style.display = 'block';
    progressBar.style.width = '50%';
    if (selectedRole == 'Student') {  
      step3.style.display = 'none';
    } else {
      donorStep3.style.display = 'none';
    }
}

backBtn3.addEventListener('click', () => {
    step4BackBtn();
});

function step4BackBtn() {
    if (selectedRole == 'Student') {step3.style.display = 'block';}
    else {donorStep3.style.display = 'block';}
    step4.style.display = 'none';
    progressBar.style.width = '75%';  
}

backBtn4.addEventListener('click', () => {
    step5BackBtn();
});

function step5BackBtn() {
    registrationCon.style.display = 'flex';
    reviewCon.style.display = 'none';
    progressBar.style.width = '100%';
    document.body.style.background = 'linear-gradient(135deg, #7C3AED 0%, #4C58DF 100%)';  
}

donorBackBtn2.addEventListener('click', () => {
    selectedRole = ''; 
    step3BackBtn();
});

donorBackBtn5.addEventListener('click', () => {
    step5BackBtn();
})

donorNextBtn2.addEventListener('click', () => {
    if (occupation.value.trim() != "" && /\d/.test(occupation.value)) { occupation.focus(); return; }
    if (phoneNum.value.trim() != "" && phoneNum.value.length < 10) { phoneNum.focus(); return; }
    if (gender.value.trim() != "" && /\d/.test(gender.value)) { gender.focus(); return; }
    if (country.value.trim() != "" && /\d/.test(country.value)) { country.focus(); return; }
    progressBar.style.width = '100%';
    donorStep3.style.display = 'none';
    step4.style.display = 'block';
});

nextBtn.addEventListener('click', () => {
  step2NextBtn();
});

function step2NextBtn() {
  if (firstname.value.trim() === "" || /\d/.test(firstname.value) ) { firstname.focus(); return; }
  if (lastname.value.trim() === "" || /\d/.test(lastname.value)) { lastname.focus(); return; }
  if (email.value.trim() === "") { email.focus(); return; }
  if (!email.checkValidity()) { email.reportValidity(); return; }
  if (pass.value.trim() === "") { pass.focus(); return; }

  const existingMessage = document.querySelector('.shortPass');
  if (pass.value.trim().length < 12) {
    if (!existingMessage) {
      const shortPass = document.createElement('p');
      shortPass.classList.add('shortPass');
      shortPass.style.color = '#EF4444';
      shortPass.style.fontSize = '14px';
      shortPass.style.position = 'absolute';
      shortPass.style.width = '80%';
      shortPass.style.textAlign = 'right';
      shortPass.style.right = '90px';
      shortPass.textContent = "Go for 12 characters or more.";
      pass.after(shortPass);
      pass.focus();
      return;
    }
  } else if (existingMessage) {
    existingMessage.remove();
  }

  if (cpass.value.trim() === "") { cpass.focus(); return; }

  if (pass.value.trim() !== cpass.value.trim()) {
    if (!document.querySelector('.mismatch')) {
      const mismatch = document.createElement('p');
      mismatch.classList.add('mismatch');
      mismatch.style.color = '#EF4444';
      mismatch.style.fontSize = '14px';
      mismatch.style.position = 'absolute';
      mismatch.style.width = '80%';
      mismatch.style.textAlign = 'right';
      mismatch.style.right = '90px';
      mismatch.textContent = "Passwords don't match!";
      cpass.after(mismatch);
      cpass.focus();
      return;
    }
  }

  if (pass.value.trim() === cpass.value.trim()) {
    progressBar.style.width = '75%';
    step2contents.style.display = 'none';

    if (selectedRole == 'Student'){
      step3.style.display = 'block';
    } else {
      donorStep3.style.display = 'block';
    }

    
  }
}

nextBtn2.addEventListener('click', () => {
  step3NextBtn();
});

function step3NextBtn() {
    // Check for validation errors
    if (document.querySelector('.firstname-error')) {
        firstname.focus();
        return;
    }
    if (document.querySelector('.lastname-error')) {
        lastname.focus();
        return;
    }
    if (document.querySelector('.studentid-error')) {
        studentID.focus();
        return;
    }
    if (document.querySelector('.yearlevel-error')) {
        yearLevel.focus();
        return;
    }

    if (school.value.trim() === '') {school.focus(); return;}
    if (studentID.value.trim() === '') {studentID.focus(); return; }
    if (yearLevel.value.trim() === '') {yearLevel.focus(); return; }
    if (program.value.trim() === '') {program.focus(); return; }

    progressBar.style.width = '100%';
    step3.style.display = 'none';
    step4.style.display = 'block';

}

nextBtn3.addEventListener('click', () => {
  if (selectedRole == "Student") { step4NextBtn(); }
  else { donorStep4NextBtn(); }
});

function step4NextBtn() {
    registrationCon.style.display = 'none';
    reviewCon.style.display = 'flex';
    document.body.style.background = '#fff';

    const fname = document.querySelector('#firstname-review');
    const lname = document.querySelector('#lastname-review');
    const emailRev = document.querySelector('#email-review');
    const studentidRev = document.querySelector('#studentid-review');
    const yearlevelRev = document.querySelector('#yearlevel-review');
    const schoolRev = document.querySelector('#school-review');
    const programRev = document.querySelector('#program-review');

    fname.value = firstname.value;
    lname.value = lastname.value;
    emailRev.value = email.value;
    studentidRev.value = studentID.value;
    yearlevelRev.value = yearLevel.value;
    schoolRev.value = school.value;
    programRev.value = program.value;
}

function donorStep4NextBtn() {
    registrationCon.style.display = 'none';
    donorReview.style.display = 'flex';
    document.body.style.background = '#fff';

    const fname = document.querySelector('#donor-firstname-review');
    const lname = document.querySelector('#donor-lastname-review');
    const emailRev = document.querySelector('#donor-email-review');
    const occupationRev = document.querySelector('#occupationRev');
    const phoneNumRev = document.querySelector('#phoneRev');
    const genderRev = document.querySelector('#genderRev');
    const countryRev = document.querySelector('#countryRev');

    fname.value = firstname.value;
    lname.value = lastname.value;
    emailRev.value = email.value;
    occupationRev.value = occupation.value;
    phoneNumRev.value = phoneNum.value;
    genderRev.value = gender.value;
    countryRev.value = country.value;
}

donorSubmit.addEventListener('click', () => {
    // Add loading state
    donorSubmit.classList.add('loading');
    donorSubmit.disabled = true;
    
    // Simulate API call or form submission
    setTimeout(() => {
        // Remove loading state after submission
        donorSubmit.classList.remove('loading');
        donorSubmit.disabled = false;

        // Your success logic here
        registrationCon.style.display = 'flex';
        donorReview.style.display = 'none';
        step4.style.display = 'none';
        progressBar.style.display = 'none';
        confirmation.style.display = 'flex';
        progressBarHolder.style.display = 'none';
        register.style.display = 'none';
        document.body.style.background = 'linear-gradient(135deg, #7C3AED 0%, #4C58DF 100%)';
        // Example: window.location.href = 'success.html';

    }, 2000); // Replace with actual API call
})

pass.addEventListener('blur', () => {
  const shortPass = document.querySelector('.shortPass');
  if (pass.value.trim().length >= 12 && shortPass) shortPass.remove();
});

cpass.addEventListener('blur', () => {
  const mismatch = document.querySelector('.mismatch');
  if (pass.value.trim() === cpass.value.trim() && mismatch) mismatch.remove();
});


// Profile Picture Upload Functionality
const fileInput = document.getElementById('fileInput');
const imagePreview = document.getElementById('imagePreview');
const placeholder = document.getElementById('placeholder');
const imageFrame = document.getElementById('imageFrame');

// Click frame to open file selector
imageFrame.addEventListener('click', function() {
    fileInput.click();
});

// Handle file selection
fileInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    
    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
            placeholder.style.display = 'none';
            imageFrame.classList.add('has-image');
        };
        
        reader.readAsDataURL(file);
        nextBtn3.textContent = "Next";
        nextBtn3.classList.replace('btn-secondary', 'btn-primary');
    }
});

submit.addEventListener('click', () => {
    // Add loading state
    submit.classList.add('loading');
    submit.disabled = true;
    
    // Simulate API call or form submission
    setTimeout(() => {
        // Remove loading state after submission
        submit.classList.remove('loading');
        submit.disabled = false;

        // Your success logic here
        registrationCon.style.display = 'flex';
        reviewCon.style.display = 'none';
        step4.style.display = 'none';
        progressBar.style.display = 'none';
        confirmation.style.display = 'flex';
        progressBarHolder.style.display = 'none';
        register.style.display = 'none';
        document.body.style.background = 'linear-gradient(135deg, #7C3AED 0%, #4C58DF 100%)';
        // Example: window.location.href = 'success.html';

    }, 2000); // Replace with actual API call
});


donorRole.addEventListener('click', () => {
  selectedRole = 'Donor';
  updateStepTitles("Donor");
  step2Flow();
});


function updateStepTitles(role) {
  document.querySelector('#step-2 h1').textContent = `${role} Details`;
  document.querySelector('#step-3 h1').textContent = `${role} Details`;
  document.querySelector('#step-4 h1').textContent = `${role} Details`;
}

school.addEventListener('input', function() {
    const existingError = document.querySelector('.school-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('school-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "School must not contain numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

school.addEventListener('blur', () => {
    const error = document.querySelector('.school-error');
    if (!/\d/.test(school.value) && error) error.remove();
});

// Validation for Student ID (only numbers, min length)
studentID.addEventListener('input', function() {
    const existingError = document.querySelector('.studentid-error');
    
    // Remove non-numeric characters
    this.value = this.value.replace(/[^0-9]/g, '');
    
    if (this.value.length > 0 && this.value.length < 8) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('studentid-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Student ID should be at least 8 digits.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

studentID.addEventListener('blur', () => {
    const error = document.querySelector('.studentid-error');
    if (studentID.value.length >= 8 && error) error.remove();
});

// Validation for Year Level (1-4 only)
yearLevel.addEventListener('input', function() {
    const existingError = document.querySelector('.yearlevel-error');
    
    // Remove non-numeric characters
    this.value = this.value.replace(/[^0-9]/g, '');
    
    const value = parseInt(this.value);
    
    if (this.value.length > 0 && (value < 1 || value > 4)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('yearlevel-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Invalid year level";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

yearLevel.addEventListener('blur', () => {
    const error = document.querySelector('.yearlevel-error');
    const value = parseInt(yearLevel.value);
    if (value >= 1 && value <= 4 && error) error.remove();
});

program.addEventListener('input', function() {
    const existingError = document.querySelector('.program-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('program-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Program must not contain numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

program.addEventListener('blur', () => {
    const error = document.querySelector('.program-error');
    if (!/\d/.test(program.value) && error) error.remove();
});


// Validation for First Name (no numbers)
firstname.addEventListener('input', function() {
    const existingError = document.querySelector('.firstname-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('firstname-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "First name cannot contain numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

firstname.addEventListener('blur', () => {
    const error = document.querySelector('.firstname-error');
    if (!/\d/.test(firstname.value) && error) error.remove();
});

// Validation for Last Name (no numbers)
lastname.addEventListener('input', function() {
    const existingError = document.querySelector('.lastname-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('lastname-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Last name cannot contain numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

lastname.addEventListener('blur', () => {
    const error = document.querySelector('.lastname-error');
    if (!/\d/.test(lastname.value) && error) error.remove();
});

// Validation for Last Name (no numbers)
occupation.addEventListener('input', function() {
    const existingError = document.querySelector('.occupation-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('occupation-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Occupation must not have numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

occupation.addEventListener('blur', () => {
    const error = document.querySelector('.occupation-error');
    if (!/\d/.test(occupation.value) && error) error.remove();
});

// Validation for Last Name (no numbers)
gender.addEventListener('input', function() {
    const existingError = document.querySelector('.gender-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('gender-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Invalid gender";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

gender.addEventListener('blur', () => {
    const error = document.querySelector('.gender-error');
    if (!/\d/.test(gender.value) && error) error.remove();
});

// Validation for Last Name (no numbers)
country.addEventListener('input', function() {
    const existingError = document.querySelector('.country-error');
    
    // Check if contains numbers
    if (/\d/.test(this.value)) {
        if (!existingError) {
            const error = document.createElement('p');
            error.classList.add('country-error');
            error.style.color = '#EF4444';
            error.style.fontSize = '14px';
            error.style.position = 'absolute';
            error.style.width = '80%';
            error.style.textAlign = 'left';
            error.textContent = "Country cannot contain numbers.";
            this.after(error);
        }
    } else if (existingError) {
        existingError.remove();
    }
});

country.addEventListener('blur', () => {
    const error = document.querySelector('.country-error');
    if (!/\d/.test(country.value) && error) error.remove();
});

// Phone number validation (for donor)
const phoneInput = document.querySelector('.phone-number');
if (phoneInput) {
    phoneInput.addEventListener('input', function() {
        const existingError = document.querySelector('.phone-error');
        
        // Remove non-numeric characters
        this.value = this.value.replace(/[^0-9]/g, '');
        
        if (this.value.length > 0 && this.value.length < 10) {
            if (!existingError) {
                const error = document.createElement('p');
                error.classList.add('phone-error');
                error.style.color = '#EF4444';
                error.style.fontSize = '14px';
                error.style.position = 'absolute';
                error.style.width = '80%';
                error.style.textAlign = 'left';
                error.textContent = "Phone number should be at least 10 digits.";
                this.parentElement.after(error);
            }
        } else if (existingError) {
            existingError.remove();
        }
    });

    phoneInput.addEventListener('blur', () => {
        const error = document.querySelector('.phone-error');
        if (phoneInput.value.length >= 10 && error) error.remove();
    });
}