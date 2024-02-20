<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="assets/css/global.css">
        <link rel="stylesheet" href="assets/css/home.css">
    </head>
    <body>
        <div class="navbar">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="main">
                <img src="/assets/images/logo500.svg" alt="">
                <h1>Chat Bot Open AI</h1>
                <p>Empowering Connections: Embark on a Journey with ChatBot OpenAI - Your Passport to Explore the World of Conversations</p>
                @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </body>
</html>
