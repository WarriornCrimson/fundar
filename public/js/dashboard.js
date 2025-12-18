const userProfile = document.querySelector('.logged-in-user-profile');
const logout = document.querySelector('.logout');
const logoutConfirmation = document.querySelector('.modal-overlay');
const logoutButton = document.querySelector('.logout-text');
const confirmLogout = document.querySelector('.btn-confirm');
const cancelLogout = document.querySelector('.btn-cancel');

userProfile.addEventListener('click', () => {
    logout.classList.toggle('hide');
});

document.addEventListener('click', (e) => {
    if (!logout.contains(e.target) && !userProfile.contains(e.target)) {
        logout.classList.add('hide');
    }
})

window.addEventListener('scroll', () => {
logout.classList.add('hide');
});

logoutButton.addEventListener('click', () => {
    logoutConfirmation.classList.add('active');
});
 
confirmLogout.addEventListener('click', () => {
    window.location.href = window.logoutRedirect;
});

cancelLogout.addEventListener('click', () => {
    logoutConfirmation.classList.remove('active');
});