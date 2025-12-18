<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/messages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body> 
    <x-side-bar/>
    <div class="message-container">
        <!-- Left Sidebar - Message List -->
        <div class="message-list">
            <h1 class="section-title">Inbox</h1>
            <hr>
            <div class="message-navigation">
                <button class="message-tab active" data-tab="all">All</button>
                <button class="message-tab" data-tab="pinned">Pinned</button>
            </div>
            <form class="search-name" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" id="searchInput" placeholder="Search Chat">
                </div>
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>

            <!-- Conversations List -->
            <div class="conversations-list" id="conversationsList">
                <!-- Conversations will be dynamically inserted here -->
            </div>
        </div>

        <!-- Right Side - Message Window -->
        <div class="message-window">
            <!-- Empty State -->
            <div class="empty-state" id="emptyState">
                <i class="fa-regular fa-comments"></i>
                <p>Select message to view</p>
            </div>

            <!-- Active Chat -->
            <div class="active-chat hidden" id="activeChat">
                <!-- Chat Header -->
                <div class="chat-header">
                    <div class="chat-header-info">
                        <img src="" alt="" class="chat-avatar" id="chatAvatar">
                        <div class="chat-user-info">
                            <h3 class="chat-user-name" id="chatUserName"></h3>
                        </div>
                    </div>
                </div>

                <!-- Messages Container -->
                <div class="messages-container" id="messagesContainer">
                    <!-- Messages will be dynamically inserted here -->
                </div>

                <!-- Message Input -->
                <div class="message-input-container">
                    <form class="message-input-form" id="messageForm">
                        <input 
                            type="text" 
                            class="message-input" 
                            id="messageInput" 
                            placeholder="Type a message..."
                            autocomplete="off"
                        >
                        <button type="submit" class="send-btn">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/messages.js') }}"></script>
</body>
</html>