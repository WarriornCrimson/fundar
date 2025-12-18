document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tableRows = document.querySelectorAll('.data-table-wrapper tbody tr');

    // Functionality for switching tabs
    tabButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            // Remove 'active' class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            // Add 'active' class to the clicked button
            e.target.classList.add('active');
             
            // Get the role/status filter from the button text
            const filterText = e.target.textContent.toLowerCase();
            applyTableFilter(filterText);
        });
    });

    // Basic filtering logic (Placeholder: hides rows that don't match the active filter)
    function applyTableFilter(filter) {
        // If 'all users', show all rows
        if (filter === 'all users') {
            tableRows.forEach(row => row.style.display = '');
            return;
        }

        tableRows.forEach(row => {
            const roleTag = row.querySelector('.role-tag');
            const statusTag = row.querySelector('.status-tag');
            
            // Check if the row's role or status matches the filter
            let shouldDisplay = false;

            if (filter === 'students' && roleTag.classList.contains('student')) {
                shouldDisplay = true;
            } else if (filter === 'donors' && roleTag.classList.contains('donor')) {
                shouldDisplay = true;
            } else if (filter === 'admins' && roleTag.classList.contains('admin')) {
                shouldDisplay = true;
            } else if (filter === 'pending' && statusTag.textContent.toLowerCase() === 'pending') {
                shouldDisplay = true;
            }

            row.style.display = shouldDisplay ? '' : 'none';
        });
    }

    // Placeholder for search/dropdown functionality
    const searchInput = document.querySelector('.search-input-wrapper input');
    searchInput.addEventListener('input', (e) => {
        // Here you would implement row filtering based on name, email, or ID
        console.log(`Searching for: ${e.target.value}`);
    });
});