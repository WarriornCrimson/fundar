document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const conversationsList = document.getElementById('conversationsList');
    const searchInput = document.getElementById('searchInput');
    const tabButtons = document.querySelectorAll('.message-tab');
    const emptyState = document.getElementById('emptyState');
    const activeChat = document.getElementById('activeChat');
    const messagesContainer = document.getElementById('messagesContainer');
    const messageForm = document.getElementById('messageForm');
    const messageInput = document.getElementById('messageInput');
    const chatUserName = document.getElementById('chatUserName');
    const chatAvatar = document.getElementById('chatAvatar');

    // Current state
    let currentConversationId = null;
    let currentTab = 'all';

    // Sample conversations data
    const conversations = [
        {
            id: 7,
            name: 'Allyssa Ejares',
            avatar: '../images/Allyssa.png',
            lastMessage: '',
            time: '3h ago',
            unread: 0,
            pinned: false,
            messages: [
            ]
        },
        {
            id: 1,
            name: 'Sarah Johnson',
            avatar: 'https://i.pravatar.cc/150?img=1',
            lastMessage: 'Thank you for your generous donation!',
            time: '2m ago',
            unread: 0,
            pinned: false,
            messages: [
                { id: 1, text: 'Hi! I saw your campaign', sent: false, time: '10:30 AM' },
                { id: 2, text: 'Hello! Thank you for reaching out!', sent: true, time: '10:32 AM' },
                { id: 3, text: 'I would love to support your cause', sent: false, time: '10:35 AM' },
                { id: 4, text: 'Thank you for your generous donation!', sent: false, time: '10:38 AM' }
            ]
        },
        {
            id: 2,
            name: 'Michael Chen',
            avatar: 'https://i.pravatar.cc/150?img=2',
            lastMessage: 'When does the campaign end?',
            time: '1h ago',
            unread: 0,
            pinned: true,
            messages: [
                { id: 1, text: 'When does the campaign end?', sent: false, time: '9:15 AM' },
                { id: 2, text: 'The campaign ends on December 31st', sent: true, time: '9:20 AM' }
            ]
        },
        {
            id: 4,
            name: 'David Martinez',
            avatar: 'https://i.pravatar.cc/150?img=4',
            lastMessage: 'Can you share more details?',
            time: '5h ago',
            unread: 1,
            pinned: false,
            messages: [
                { id: 1, text: 'Can you share more details?', sent: false, time: '6:30 AM' }
            ]
        },
        {
            id: 5,
            name: 'Lisa Anderson',
            avatar: 'https://i.pravatar.cc/150?img=5',
            lastMessage: 'This is inspiring!',
            time: '1d ago',
            unread: 0,
            pinned: true,
            messages: [
                { id: 1, text: 'This is inspiring!', sent: false, time: 'Yesterday' }
            ]
        }
    ];

    // Initialize
    renderConversations();

    // ===== RENDER CONVERSATIONS =====
    function renderConversations(filter = '') {
        conversationsList.innerHTML = '';
        
        let filteredConversations = conversations;

        // Filter by tab
        if (currentTab === 'pinned') {
            filteredConversations = conversations.filter(conv => conv.pinned);
        }

        // Filter by search
        if (filter) {
            filteredConversations = filteredConversations.filter(conv => 
                conv.name.toLowerCase().includes(filter.toLowerCase())
            );
        }

        // Sort: pinned first, then by time
        filteredConversations.sort((a, b) => {
            if (a.pinned && !b.pinned) return -1;
            if (!a.pinned && b.pinned) return 1;
            return 0;
        });

        filteredConversations.forEach(conv => {
            const convElement = document.createElement('div');
            convElement.className = `conversation-item ${conv.pinned ? 'pinned' : ''} ${conv.unread > 0 ? 'unread' : ''} ${currentConversationId === conv.id ? 'active' : ''}`;
            convElement.setAttribute('data-id', conv.id);
            
            convElement.innerHTML = `
                <img src="${conv.avatar}" alt="${conv.name}" class="conversation-avatar">
                <div class="conversation-info">
                    <div class="conversation-header">
                        <span class="conversation-name">${conv.name}</span>
                        <span class="conversation-time">${conv.time}</span>
                    </div>
                    <div class="conversation-preview">
                        ${conv.lastMessage}
                        ${conv.unread > 0 ? `<span class="unread-badge">${conv.unread}</span>` : ''}
                    </div>
                </div>
                <button class="pin-btn ${conv.pinned ? 'pinned' : ''}" onclick="togglePin(event, ${conv.id})">
                    <i class="fa-solid fa-thumbtack"></i>
                </button>
            `;

            convElement.addEventListener('click', (e) => {
                if (!e.target.closest('.pin-btn')) {
                    openConversation(conv.id);
                }
            });

            conversationsList.appendChild(convElement);
        });
    }

    // ===== TOGGLE PIN =====
    window.togglePin = (event, conversationId) => {
        event.stopPropagation();
        const conversation = conversations.find(c => c.id === conversationId);
        if (conversation) {
            conversation.pinned = !conversation.pinned;
            renderConversations(searchInput.value);
        }
    };

    // ===== OPEN CONVERSATION =====
    function openConversation(conversationId) {
        currentConversationId = conversationId;
        const conversation = conversations.find(c => c.id === conversationId);
        
        if (!conversation) return;

        // Mark as read
        conversation.unread = 0;

        // Update UI
        emptyState.classList.add('hidden');
        activeChat.classList.remove('hidden');

        // Update header
        chatUserName.textContent = conversation.name;
        chatAvatar.src = conversation.avatar;

        // Render messages
        renderMessages(conversation.messages);

        // Update conversation list
        renderConversations(searchInput.value);

        // Scroll to bottom
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    // ===== RENDER MESSAGES =====
    function renderMessages(messages) {
        messagesContainer.innerHTML = '';

        messages.forEach(msg => {
            const messageGroup = document.createElement('div');
            messageGroup.className = `message-group ${msg.sent ? 'sent' : 'received'} ${msg.deleted ? 'deleted' : ''}`;
            messageGroup.setAttribute('data-message-id', msg.id);

            const avatarHtml = msg.sent ? '' : `<img src="${chatAvatar.src}" class="message-avatar">`;
            
            // Don't show delete button for already deleted messages
            const deleteButtonHtml = msg.deleted ? '' : `
                <div class="message-actions">
                    <button class="message-action-btn delete" onclick="deleteMessage(${msg.id})">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            `; 
            
            messageGroup.innerHTML = `
                ${avatarHtml}
                <div class="message-content">
                    <div class="message-bubble">
                        ${deleteButtonHtml}
                        <div class="message-text ${msg.deleted ? 'deleted-text' : ''}">${msg.text}</div>
                    </div>
                    <div class="message-time">${msg.time}</div>
                </div>
            `;

            messagesContainer.appendChild(messageGroup);
        });
    }

    // ===== DELETE MESSAGE =====
    window.deleteMessage = (messageId) => {
        if (!confirm('Delete this message?')) return;

        const conversation = conversations.find(c => c.id === currentConversationId);
        if (!conversation) return;

        // Find and mark message as deleted
        const message = conversation.messages.find(m => m.id === messageId);
        if (message) {
            message.deleted = true;
            message.text = 'Message deleted';
        }
        
        // Update last message if it was the deleted one
        const lastMessage = conversation.messages[conversation.messages.length - 1];
        if (lastMessage.id === messageId) {
            conversation.lastMessage = 'Message deleted';
        }

        renderMessages(conversation.messages);
        renderConversations(searchInput.value);
    };

    // ===== SEND MESSAGE =====
    messageForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const text = messageInput.value.trim();
        if (!text || !currentConversationId) return;

        const conversation = conversations.find(c => c.id === currentConversationId);
        if (!conversation) return;

        const newMessage = {
            id: Date.now(),
            text: text,
            sent: true,
            time: new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })
        };

        conversation.messages.push(newMessage);
        conversation.lastMessage = text;
        conversation.time = 'Just now';

        renderMessages(conversation.messages);
        renderConversations(searchInput.value);

        messageInput.value = '';
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    });

    // ===== SEARCH =====
    searchInput.addEventListener('input', (e) => {
        renderConversations(e.target.value);
    });
 
    // ===== TAB SWITCHING =====
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentTab = button.getAttribute('data-tab');
            renderConversations(searchInput.value);
        });
    });

    // ===== KEYBOARD SHORTCUTS =====
    messageInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            messageForm.dispatchEvent(new Event('submit'));
        }
    });
});