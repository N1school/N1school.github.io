document.addEventListener('DOMContentLoaded', function() {
    var chatAiBtn = document.getElementById('chat_ai_btn');
    var chatAiForm = document.getElementById('chat_ai_form');
    var chatAiError = document.getElementById('chat_ai_error');
    var chatAiResponse = document.getElementById('chat_ai_response');

    chatAiBtn.addEventListener('click', function () {
        if (chatAiForm.style.display === 'none') {
            chatAiForm.style.display = 'block';
        } else {
            chatAiForm.style.display = 'none';
        }
    });
    var chatAiSubmitButton = document.getElementById('chat_ai_submit_btn');
    var chatAiMessage = document.getElementById('chat_ai_message').value.trim();
    chatAiSubmitButton.addEventListener('click',function (e) {
        e.preventDefault();
        if(chatAiMessage === 0){
             chatAiError.append('Հաղորդագրությունը դատարկ է:')
            return;
        }
        else{
            fetch('/send-chat-ai-message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ message: chatAiMessage })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    // return response.json();
                    return response;
                })
                .then(data => {
                    if (Object.keys(data).length === 0) {
                        throw new Error('Empty or incomplete JSON response');
                    }

                    console.log(data);
                })
                .catch(error => {
                    console.error('There was an error!', error);
                });
        }
    })

});
