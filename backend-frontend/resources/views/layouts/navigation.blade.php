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
            <form>
                @csrf
                <label for="maxTokens">Max Tokens:</label>
                <input type="number" id="maxTokens" name="maxTokens" min="1" value="2048"><br><br>
                <label for="temperature">Temperature:</label>
                <input type="number" id="temperature" name="temperature" min="0" max="1" step="0.1" value="1"><br><br>
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
<script>
    document.getElementById("preferencesLink").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("preferencesForm").classList.toggle("hidden");
    });
</script>