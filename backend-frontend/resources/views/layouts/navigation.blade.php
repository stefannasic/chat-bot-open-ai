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
        <a class="sidebar-link" href="profile">
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