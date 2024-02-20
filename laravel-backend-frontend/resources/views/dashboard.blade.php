<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/dashboard.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/chat.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('layouts.navigation')
<div class="right-container">
    <div class="dashboard-content">
        <div class="welcome-message">
            Hi, {{ Auth::user()->name }}. How can I help you today?
        </div>

        <div class="messages"></div>
            
        <div class="send">
            <form id="message-form">
                <input type="text" name="message" id="message" placeholder="Message..." autocomplete="off" required>
                <button type="submit"><img src="/assets/images/send.svg" alt=""></button>
            </form>
        </div>
    </div>
</div>