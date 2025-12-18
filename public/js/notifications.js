document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const notificationToggle = document.getElementById('notificationToggle');
    const notificationContainer = document.getElementById('notificationContainer');
    const notificationOverlay = document.getElementById('notificationOverlay');
    const notificationList = document.getElementById('notificationList');
    const tabAll = document.getElementById('tabAll');
    const tabUnread = document.getElementById('tabUnread');
    const notificationBadge = document.querySelector('.notification-badge');

    let currentFilter = 'all'; // 'all' or 'unread'

    /**
     * Opens the notification panel
     */
    function openNotificationPanel() {
        notificationOverlay.classList.remove('hide');
        setTimeout(() => {
            notificationContainer.classList.add('open');
        }, 10);
    }

    /**
     * Closes the notification panel
     */
    function closeNotificationPanel() {
        notificationContainer.classList.remove('open');
        setTimeout(() => {
            notificationOverlay.classList.add('hide');
        }, 300);
    }

    /**
     * Toggles the notification panel
     */
    function toggleNotificationPanel() {
        if (notificationContainer.classList.contains('open')) {
            closeNotificationPanel();
        } else {
            openNotificationPanel();
        }
    }

    /**
     * Updates the notification badge count
     */
    function updateBadgeCount() {
        const unreadCount = document.querySelectorAll('.notification-card.unread').length;
        if (notificationBadge) {
            if (unreadCount > 0) {
                notificationBadge.textContent = unreadCount;
                notificationBadge.style.display = 'block';
            } else {
                notificationBadge.style.display = 'none';
            }
        }
    }

    /**
     * Filters notifications based on read/unread status
     */
    function filterNotifications(filter) {
        currentFilter = filter;
        const allCards = document.querySelectorAll('.notification-card');
        const groupTitles = document.querySelectorAll('.notification-group-title');

        if (filter === 'all') {
            // Show all notifications
            allCards.forEach(card => {
                card.style.display = 'flex';
            });
            groupTitles.forEach(title => {
                title.style.display = 'block';
            });
        } else if (filter === 'unread') {
            // Show only unread notifications (those with violet/blue border)
            allCards.forEach(card => {
                // Only show cards that are currently unread (have blue/violet border)
                if (card.classList.contains('unread')) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            // Hide group titles if no unread notifications in that group
            groupTitles.forEach(title => {
                let nextElement = title.nextElementSibling;
                let hasVisibleCards = false;

                while (nextElement && !nextElement.classList.contains('notification-group-title')) {
                    if (nextElement.classList.contains('notification-card') && 
                        nextElement.style.display !== 'none') {
                        hasVisibleCards = true;
                        break;
                    }
                    nextElement = nextElement.nextElementSibling;
                }

                title.style.display = hasVisibleCards ? 'block' : 'none';
            });
        }
    }

    /**
     * Marks a notification as read
     */
    function markAsRead(notificationCard) {
        if (notificationCard.classList.contains('unread')) {
            notificationCard.classList.remove('unread');
            notificationCard.classList.add('read');
            updateBadgeCount();
        }
    }

    // 1. Click on Notification toggle in sidebar
    if (notificationToggle) {
        notificationToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleNotificationPanel();
        });
    }

    // 2. Click on overlay (background) closes the panel
    if (notificationOverlay) {
        notificationOverlay.addEventListener('click', (e) => {
            if (e.target === notificationOverlay) {
                closeNotificationPanel();
            }
        });
    }

    // 3. Click anywhere on document (except notification panel and toggle)
    document.addEventListener('click', (e) => {
        const isClickInsidePanel = notificationContainer && notificationContainer.contains(e.target);
        const isClickOnToggle = notificationToggle && notificationToggle.contains(e.target);

        if (!isClickInsidePanel && !isClickOnToggle && notificationContainer.classList.contains('open')) {
            closeNotificationPanel();
        }
    });

    // 4. Prevent clicks inside the notification panel from closing it
    if (notificationContainer) {
        notificationContainer.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    }

    // 5. Handle notification card clicks
    if (notificationList) {
        notificationList.addEventListener('click', (e) => {
            const notificationCard = e.target.closest('.notification-card');
            if (notificationCard) {
                markAsRead(notificationCard);
                
                // If we're on "unread" filter, remove the card from view after marking as read
                if (currentFilter === 'unread') {
                    setTimeout(() => {
                        filterNotifications('unread');
                    }, 300);
                }
            }
        });
    }

    // 6. Tab switching - All
    if (tabAll) {
        tabAll.addEventListener('click', () => {
            tabAll.classList.remove('tab-inactive');
            tabAll.classList.add('tab-active');
            tabUnread.classList.remove('tab-active');
            tabUnread.classList.add('tab-inactive');
            filterNotifications('all');
        });
    }

    // 7. Tab switching - Unread
    if (tabUnread) {
        tabUnread.addEventListener('click', () => {
            tabUnread.classList.remove('tab-inactive');
            tabUnread.classList.add('tab-active');
            tabAll.classList.remove('tab-active');
            tabAll.classList.add('tab-inactive');
            filterNotifications('unread');
        });
    }

    // Initialize badge count on load
    updateBadgeCount();
});