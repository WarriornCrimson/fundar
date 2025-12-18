// Static credentials
const VALID_USERNAME = "andreatorreon@gmail.com";
const VALID_PASSWORD = "andrea123";

// Get form elements
const loginForm = document.querySelector('.login-form form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const loginBtn = document.querySelector('.login');

// Create general login error message
const loginError = document.createElement('p');
loginError.className = 'login-error-text';
loginError.style.display = 'none';
loginError.style.color = '#EF4444';
loginError.style.fontSize = '16px';
loginError.style.textAlign = 'center';
loginError.style.width = '100%';
loginError.style.position = 'absolute';
loginError.style.top = '58%';
loginError.style.marginBottom = '15px';

// Insert error message before login button
loginBtn.parentElement.insertBefore(loginError, loginBtn);

// Login button click handler
loginBtn.addEventListener('click', (e) => {
    e.preventDefault();
    
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();
    
    // Hide previous error
    loginError.style.display = 'none';
    
    // Validate username
    if (username === '') {
        loginError.textContent = 'Please enter your username.';
        loginError.style.display = 'block';
        usernameInput.focus();
        return;
    }

    // Validate password
    if (password === '') {
        loginError.textContent = 'Please enter your password.';
        loginError.style.display = 'block';
        passwordInput.focus();
        return;
    }

    // Check credentials
    if (username === VALID_USERNAME && password === VALID_PASSWORD) {
        // Success
        loginBtn.textContent = 'Logging in';
        loginBtn.disabled = true;
        loginBtn.style.opacity = '0.7';
        loginBtn.style.textAlign = 'center';
        
        setTimeout(() => {
            window.location = "/home";
        }, 2000);
    } 
    else if (username == 'admin' && password == 'itsmehi') {
        loginBtn.textContent = 'Logging in';
        loginBtn.disabled = true;
        loginBtn.style.opacity = '0.7';
        loginBtn.style.textAlign = 'center';
        
        setTimeout(() => {
            window.location = "/admin/dashboard";
        }, 2000);
    }
    else {
        // Failed login
        loginError.textContent = 'Incorrect username or password. Please try again.';
        loginError.style.display = 'block';
        passwordInput.value = '';
        return;
    }
});

const openPopup = document.querySelector('.forgot-pass-provoke');
const closePopup = document.querySelectorAll('.remove-popup');
const popup = document.querySelector('.pop-bg');
const popupForm = document.querySelector('.forgot-pass-container');
const popupForm2 = document.querySelector('.forgot-pass-container-2');
const forgotPassBtn1 = document.querySelector('.fp-confirm-1');
const emailInput = document.querySelector('#email');
const forgotPassBtn2 = document.querySelector('.fp-confirm-2');
const confirmationPopup = document.querySelector('.forgot-pass-container-3');
const newPass = document.getElementById('new_pass');
const confirmPass = document.getElementById('confirm_pass');
const validationError = document.querySelector('.validation-error');
const validationText = document.querySelector('.validation-text');
const loadingSpinner = document.querySelector('.loading-spinner');

// Open popup
openPopup.addEventListener('click', () => {
    popup.style.display = 'flex';
    popupForm.style.display = 'flex';
    popupForm2.style.display = 'none';
});

// Close popup
closePopup.forEach(btn => {
    btn.addEventListener('click', () => {
        popup.style.display = 'none';
    });
});

// Continue button (check email)
forgotPassBtn1.addEventListener('click', () => {
    if (!emailInput.checkValidity()) {
        emailInput.reportValidity();
        return;
    }
    popupForm.style.display = 'none';
    popupForm2.style.display = 'flex';
});

// Password validation
forgotPassBtn2.addEventListener('click', (e) => {
    e.preventDefault();

    validationText.textContent = "";
    validationError.style.backgroundColor = "transparent";
    validationError.style.color = "#000";
    loadingSpinner.style.display = "none";

    if (newPass.value.trim() === "") {
        validationText.textContent = "Please enter a new password.";
        validationError.style.backgroundColor = "rgba(223, 78, 76, 0.2)";
        return;
    }

    if (newPass.value.length < 12) {
        validationText.textContent = "Go for 12 characters or more.";
        validationError.style.backgroundColor = "rgba(223, 78, 76, 0.2)";
        return;        
    }

    if (confirmPass.value.trim() === "") {
        validationText.textContent = "Please confirm your password.";
        validationError.style.backgroundColor = "rgba(223, 78, 76, 0.2)";
        return;
    }

    if (newPass.value !== confirmPass.value) {
        validationText.textContent = "Passwords don't match!";
        validationError.style.backgroundColor = "rgba(223, 78, 76, 0.2)";
        return;
    }

    // ✅ Validation processing
    validationText.textContent = "Validating";
    validationError.style.backgroundColor = "rgba(112, 122, 242, 0.1)";
    validationError.style.color = "#707af2";
    loadingSpinner.style.display = "flex";

    setTimeout(() => {
        loadingSpinner.style.display = "none";
        popupForm2.style.display = 'none'; 
        confirmationPopup.style.display = 'flex';
    }, 3000);
});

// Close popup when clicking outside
popup.addEventListener('click', (e) => {
    if (!popupForm.contains(e.target) && !popupForm2.contains(e.target)) {
        popup.style.display = 'none';
        location.reload();
    }
});

// Continue with google
const continueGoogle = document.querySelector('.btn-google');
const googleContainer = document.querySelector('.continue-google-popup');
const googleBox = document.querySelector('.google-form');
const closeGooglePopup = document.querySelector('.remove-google-popup');
const continueEmail = document.querySelector('.google-confirm-1');

closeGooglePopup.addEventListener('click', () => {
    googleContainer.style.display = 'none';
});

continueGoogle.addEventListener('click', () => {
    googleContainer.style.display = 'flex';
});

googleContainer.addEventListener('click', (e) => {
    if (!googleBox.contains(e.target)) {
        googleContainer.style.display = 'none';
        location.reload();
    }
});

const googleEmail = document.querySelector('#googleEmail');

continueEmail.addEventListener('click', () => {
    if (!googleEmail.checkValidity() || googleEmail.value.trim() === '') {
        googleEmail.reportValidity();
        return;
    }

    continueEmail.classList.add('loading');
    continueEmail.disabled = true;
    continueEmail.style.opacity = '0.7';
    
    setTimeout(() => {
        window.location = '/home';
    }, 2000);

    setTimeout(() => {
        googleEmail.value = '';
    }, 2000);
});