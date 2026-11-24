document.addEventListener('DOMContentLoaded', function() {
    var path = window.location.pathname.toLowerCase();
    var iconClass = 'fas fa-comments'; // default
    
    // Choose different icon based on page URL
    if (path.includes('homepage.php') || path === '/' || path.includes('/hair%20salon/')) {
        iconClass = 'fas fa-home';
    } else if (path.includes('aboutus.php')) {
        iconClass = 'fas fa-info-circle';
    } else if (path.includes('contact_us.php')) {
        iconClass = 'fas fa-envelope-open-text';
    } else if (path.includes('login.php')) {
        iconClass = 'fas fa-user-lock';
    } else if (path.includes('customer')) {
        iconClass = 'fas fa-user-circle';
    } else if (path.includes('barber')) {
        iconClass = 'fas fa-cut';
    } else if (path.includes('admin')) {
        iconClass = 'fas fa-user-shield';
    } else if (path.includes('booking')) {
        iconClass = 'far fa-calendar-alt';
    } else if (path.includes('service')) {
        iconClass = 'fas fa-spa';
    }

    // Add CSS if not exists
    if (!document.querySelector('link[href*="chatbot.css"]')) {
        var cssLink = document.createElement('link');
        cssLink.rel = 'stylesheet';
        cssLink.href = 'chatbot.css?v=3';
        document.head.appendChild(cssLink);
    }
    
    // Create Chatbot HTML
    var chatbotHTML = `
        <div id="xcel-chatbot-container">
            <div id="xcel-chatbot-window" style="display:none;">
                <div class="chat-header">
                    <span>Xcel Salon Chat</span>
                    <button id="xcel-chat-close">&times;</button>
                </div>
                <div class="chat-body" id="xcel-chat-body">
                    <div class="chat-message bot">Hello! How can I help you today?</div>
                </div>
                <div class="chat-footer">
                    <input type="text" id="xcel-chat-input" placeholder="Type a message...">
                    <button id="xcel-chat-send"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
            <button id="xcel-chatbot-button" title="Chat with us!">
                <i class="${iconClass}"></i>
            </button>
        </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', chatbotHTML);
    
    // Logic bindings
    var chatBtn = document.getElementById('xcel-chatbot-button');
    var chatWin = document.getElementById('xcel-chatbot-window');
    var closeBtn = document.getElementById('xcel-chat-close');
    var sendBtn = document.getElementById('xcel-chat-send');
    var inputField = document.getElementById('xcel-chat-input');
    var chatBody = document.getElementById('xcel-chat-body');
    
    chatBtn.addEventListener('click', function() {
        chatWin.style.display = chatWin.style.display === 'none' ? 'flex' : 'none';
        if (chatWin.style.display === 'flex') {
            inputField.focus();
        }
    });
    
    closeBtn.addEventListener('click', function() {
        chatWin.style.display = 'none';
    });
    
    function sendMessage() {
        var msg = inputField.value.trim();
        if (msg === '') return;
        
        // Add user msg
        var userMsgDiv = document.createElement('div');
        userMsgDiv.className = 'chat-message user';
        userMsgDiv.textContent = msg;
        chatBody.appendChild(userMsgDiv);
        inputField.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;
        
        // Fetch API
        fetch('chatbot_api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ message: msg })
        })
        .then(res => res.json())
        .then(data => {
            var botMsgDiv = document.createElement('div');
            botMsgDiv.className = 'chat-message bot';
            botMsgDiv.textContent = data.reply || 'Sorry, an error occurred.';
            chatBody.appendChild(botMsgDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(err => {
            var botMsgDiv = document.createElement('div');
            botMsgDiv.className = 'chat-message bot error';
            botMsgDiv.textContent = 'Network error. Please try again later.';
            chatBody.appendChild(botMsgDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        });
    }
    
    sendBtn.addEventListener('click', sendMessage);
    inputField.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendMessage();
    });

    // Add FontAwesome if not exists
    if (!document.querySelector('link[href*="fontawesome"]')) {
        var faLink = document.createElement('link');
        faLink.rel = 'stylesheet';
        faLink.href = 'https://use.fontawesome.com/releases/v5.3.1/css/all.css';
        document.head.appendChild(faLink);
    }

    // Automatically change icon periodically
    var iconsList = [iconClass, 'fas fa-cut', 'fas fa-spa', 'fas fa-spray-can', 'fas fa-user-tie'];
    var currentIconIdx = 0;
    setInterval(function() {
        var iconEl = document.querySelector('#xcel-chatbot-button i');
        if (iconEl && chatWin.style.display === 'none') {
            currentIconIdx = (currentIconIdx + 1) % iconsList.length;
            iconEl.className = iconsList[currentIconIdx] + ' animated-icon'; // Ensure it applies
        } else if (iconEl && chatWin.style.display === 'flex') {
            iconEl.className = 'fas fa-times'; // Show 'X' when open
        }
    }, 3000);
});
