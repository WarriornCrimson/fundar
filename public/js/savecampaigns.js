const unsaveCampaign = document.querySelector('.small-campaign-save ');
const savedCampaignCon = document.querySelector('.campaign-card-sm');

unsaveCampaign.addEventListener('click', () => {
    savedCampaignCon.classList.add('hide');
})