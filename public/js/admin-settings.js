document.addEventListener('DOMContentLoaded', function() {
    
    const tabButtons = document.querySelectorAll('.tab-navigation .tab-button');
    const tabContents = document.querySelectorAll('.tab-content-wrapper .tab-content');
    const editIcons = document.querySelectorAll('.edit-icon');

    // --- Tab Switching Logic (Client-Side) ---
    tabButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Stop the link from changing the route/reloading the page

            const targetId = this.getAttribute('data-tab');
            const targetContent = document.getElementById(targetId);

            // 1. Deactivate all buttons and hide all content
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('visible'));

            // 2. Activate the clicked button
            this.classList.add('active');

            // 3. Show the corresponding content
            if (targetContent) {
                targetContent.classList.add('visible');
            }
        });
    });

    // --- Logic for Edit Icons (Toggle Readonly/Save) ---
    editIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            const container = this.closest('.input-with-icon') || this.closest('.template-editor') || this.closest('.policy-editor');
            
            if (container) {
                const inputOrTextarea = container.querySelector('input, textarea');
                
                if (inputOrTextarea) {
                    if (inputOrTextarea.hasAttribute('readonly')) {
                        // Enter Edit Mode
                        inputOrTextarea.removeAttribute('readonly');
                        inputOrTextarea.focus();
                        this.classList.remove('fa-pencil');
                        this.classList.add('fa-save'); 
                        // In a real app, you might unblur the background or show a border here
                    } else {
                        // Exit Edit Mode / Save
                        inputOrTextarea.setAttribute('readonly', 'readonly');
                        this.classList.remove('fa-save');
                        this.classList.add('fa-pencil'); 
                        // In a real app, send the data to the server here (AJAX/Fetch)
                    }
                }
            }
        });
    });
}); 