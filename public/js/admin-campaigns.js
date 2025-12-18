document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.campaign-tabs .tab-button');
    const campaignCards = document.querySelectorAll('.campaign-grid .campaign-card');
    const searchInput = document.getElementById('campaign-search');

    // --- Filter Function ---
    function filterCampaigns(filter) {
        campaignCards.forEach(card => {
            const status = card.getAttribute('data-status');
            const name = card.getAttribute('data-name').toLowerCase();
            const searchTerm = searchInput.value.toLowerCase();
            
            let matchesFilter = (filter === 'all' || status === filter);
            let matchesSearch = (name.includes(searchTerm));

            if (matchesFilter && matchesSearch) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    // --- Tab Click Handler ---
    tabButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            // Update active state
            tabButtons.forEach(btn => btn.classList.remove('active'));
            e.target.classList.add('active');
            
            // Get filter value (all, live, pending)
            const filterValue = e.target.getAttribute('data-filter');
            filterCampaigns(filterValue);
        });
    });

    // --- Search Input Handler ---
    searchInput.addEventListener('input', () => {
        // Get the currently active tab's filter
        const activeFilter = document.querySelector('.campaign-tabs .tab-button.active').getAttribute('data-filter');
        filterCampaigns(activeFilter);
    });
 
    // Initial load: apply 'all' filter
    filterCampaigns('all');
});