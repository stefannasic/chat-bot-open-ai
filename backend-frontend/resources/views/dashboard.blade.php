<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/dashboard.css">

@include('layouts.navigation')
<div class="right-container">
    <div class="dashboard-content">
        <div class="welcome-message">
            Hi, {{ Auth::user()->name }}. How can I help you today?
        </div>
        <div class="chat">
            <div class="messages">
                
            </div>
            <div class="send">
                <form action="">
                    <input type="text" name="message" id="message" placeholder="Message..." autocomplete="off">
                    <button type="submit"><img src="/assets/images/send.svg" alt=""></button>
                </form>
            </div>
        </div>
    </div>
</div>