$(document).ready(function(){
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#message-form').submit(function(event){
        event.preventDefault();
        
        var message = $('#message').val();

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
                $('.messages').append('<div class="request"><img src="/assets/images/user.svg" alt=""><div class="content"><p>' + message + '</p></div></div>');
                $('.messages').append('<div class="response"><img src="/assets/images/robot.svg" alt=""><div class="content"><p>' + response.response + '</p></div></div>');
                
                $('#message').val('');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});