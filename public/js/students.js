document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.user-tabs .tab-button');
    const tableBody = document.getElementById('userTableBody');
    const searchInput = document.getElementById('userSearchInput');
    const allRows = Array.from(tableBody.querySelectorAll('tr'));

    // --- Tab Switching Logic ---
    tabButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            // Remove 'active' from all tabs
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // Add 'active' to the clicked tab
            e.target.classList.add('active');

            // Trigger filtering based on the selected tab
            filterTable(e.target.dataset.tab, searchInput.value);
        });
    });

    // --- Search Input Logic (Debounced for performance) ---
    let searchTimeout;
    searchInput.addEventListener('input', (e) => {
        clearTimeout(searchTimeout);
        const activeTab = document.querySelector('.user-tabs .tab-button.active').dataset.tab;

        searchTimeout = setTimeout(() => {
            filterTable(activeTab, e.target.value.toLowerCase());
        }, 300); // 300ms debounce
    });

    // --- Main Filtering Function ---
    function filterTable(selectedTab, searchTerm) {
        // Normalize 'all' tab to look for all roles/statuses
        const isAll = selectedTab === 'all';

        allRows.forEach(row => {
            const role = row.dataset.role;
            const status = row.dataset.status;

            // 1. Tab/Role Filtering
            const roleMatches = isAll || (selectedTab === 'pending' ? status === 'pending' : role === selectedTab);

            // 2. Search Filtering (Check if any cell contains the search term)
            let searchMatches = true;
            if (searchTerm) {
                // Check content of all visible cells (excluding actions)
                const cells = row.querySelectorAll('td');
                searchMatches = false;

                // Check text content of ID, Name, Role, Email
                for (let i = 0; i < cells.length - 1; i++) { // Stop before 'Actions' column
                    if (cells[i].textContent.toLowerCase().includes(searchTerm)) {
                        searchMatches = true;
                        break;
                    }
                }
            }

            // Combine filters
            if (roleMatches && searchMatches) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        });
    }

    // Initialize: Ensure the table is filtered based on the default 'All users' tab
    filterTable('all', '');
}); 