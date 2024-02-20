$(document).ready(function(){
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    function scrollToBottom() {
        var messages = $('.messages');
        messages.scrollTop(messages.prop("scrollHeight"));
    }
    scrollToBottom();

    $('#message-form').submit(function(event){
        event.preventDefault();
        
        var message = $('#message').val();

        $('.messages').append('<div class="request"><img src="/assets/images/user.svg" alt=""><div class="content"><p>' + message + '</p></div></div>');
        scrollToBottom();

        $('.messages').append('<div class="response typing"><img src="/assets/images/robot.svg" alt=""><div class="content"><p class="typing-dots">...</p></div></div>');
        scrollToBottom();

        $.ajax({
            url: '/send-message',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: { 
                message: message
            },
            success: function(response){
                $('.messages .typing').remove();

                setTimeout(function() {
                    $('.messages').append('<div class="response"><img src="/assets/images/robot.svg" alt=""><div class="content"><p>' + response.response + '</p></div></div>');
                    scrollToBottom();
                }, 500);

                $('#message').val('');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
