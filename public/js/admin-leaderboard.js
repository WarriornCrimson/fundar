// Selectors for the toggle buttons and the content containers
const donorBtn = document.querySelector('.donor');
const campaignBtn = document.querySelector('.campaigns');
const donorLeaderboard = document.querySelector('.donor-leaderboard-con');
const campaignsLeaderboard = document.querySelector('.campaigns-leaderboard-con');

campaignBtn.addEventListener('click', () => {
    campaignsLeaderboard.classList.remove('hidden');
    donorLeaderboard.classList.add('hidden');
    campaignBtn.classList.add('active');
    donorBtn.classList.remove('active');
}); 

donorBtn.addEventListener('click', () => {
    campaignsLeaderboard.classList.add('hidden');
    donorLeaderboard.classList.remove('hidden');
    donorBtn.classList.add('active');
    campaignBtn.classList.remove('active');
});