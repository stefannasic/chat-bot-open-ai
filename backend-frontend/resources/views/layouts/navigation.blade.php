<link rel="stylesheet" href="assets/css/sidebar.css">

<div class="sidebar">
    <div class="top">
        <div class="logo">
            <img src="assets/images/logo500.svg" alt="">
        </div>    

        <a class="sidebar-link" href="/">
            <img src="assets/images/home.svg" alt="">
            <p> Home </p> 
        </a>

        <a class="sidebar-link" href="dashboard">
            <img src="assets/images/dashboard.svg" alt="">
            <p> Dashboard </p> 
        </a>
    </div>

    <div class="bottom">
        <div id="preferencesForm" class="hidden preferences">
            <form method="POST" action="{{ route('save.preferences') }}">
                @csrf
                <label for="maxTokens">Max Tokens: <span id="maxTokensValue">{{ Auth::user()->preferences ? Auth::user()->preferences->max_tokens : 2048 }}</span></label>
                <input type="range" id="maxTokens" name="maxTokens" min="50" max="2048" step="1" value="{{ Auth::user()->preferences ? Auth::user()->preferences->max_tokens : 2048 }}">
                <label for="temperature">Temperature: <span id="temperatureValue">{{ Auth::user()->preferences ? Auth::user()->preferences->temperature : 1 }}</span></label>
                <input type="range" id="temperature" name="temperature" min="0.1" max="1" step="0.1" value="{{ Auth::user()->preferences ? Auth::user()->preferences->temperature : 1 }}">
                <button type="submit">Save</button>
            </form>
        </div>
        <a class="sidebar-link" href="#" id="preferencesLink">
            <img src="assets/images/options.svg" alt="">
            <p> Preferences </p> 
        </a>

        <a class="sidebar-link" href="profile">
            <img src="assets/images/profile.svg" alt="">
            <p> Profile </p> 
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="sidebar-link" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <img src="assets/images/logout.svg" alt="">
                <p> Log Out </p> 
            </a>
        </form>
    </div>
</div>

<script src="assets/js/preferences.js"></script>