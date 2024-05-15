document.addEventListener('DOMContentLoaded', function() {
    var chatAiBtn = document.getElementById('chat_ai_btn');
    var chatAiForm = document.getElementById('chat_ai_form');
    var chatAiError = document.getElementById('chat_ai_error');
    var chatAiResponse = document.getElementById('chat_ai_response');
    var chatAiSubmitButton = document.getElementById('chat_ai_submit_btn');
    var chatMessages = document.getElementById('chat-messages');

    chatAiBtn.addEventListener('click', function () {
        if (chatAiForm.style.display === 'none') {
            chatAiForm.style.display = 'block';
        } else {
            chatAiForm.style.display = 'none';
        }
    });

    chatAiSubmitButton.addEventListener('click', function (e) {
        e.preventDefault();
        var chatAiMessage = document.getElementById('chat_ai_message').value;

        if (chatAiMessage.trim() === '') {
            chatAiError.textContent = 'Հաղորդագրությունը դատարկ է:';
            return;
        }

        // Clear input field and display processing message
        document.getElementById('chat_ai_message').value = '';
        var processingMessage = document.createElement('div');
        processingMessage.className = 'chat-message processing';
        processingMessage.textContent = 'Processing...';
        chatMessages.appendChild(processingMessage);

        fetch('/send-chat-ai-message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ question: chatAiMessage })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Remove processing message
                chatMessages.removeChild(processingMessage);

                var aiMessageElement = document.createElement('div');
                aiMessageElement.className = 'chat-message ai';
                aiMessageElement.textContent = data.answer;
                chatMessages.appendChild(aiMessageElement);

                chatMessages.scrollTop = chatMessages.scrollHeight;
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                chatAiError.textContent = 'Տեխնիկական խնդիր է առաջացել:';
            });
    });
});
