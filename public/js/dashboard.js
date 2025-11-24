const userProfile = document.querySelector('.logged-in-user-profile');
const logout = document.querySelector('.logout');

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
