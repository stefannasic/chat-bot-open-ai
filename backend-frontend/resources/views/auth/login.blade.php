<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/forms.css">

<div class="form-container">
    <div class="form-wrapper help">
        <h2>Log In</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-content-wrapper">
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('email')" />
            </div>
            

            <div class="form-content-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('password')"/>
            </div>
            

            <div class=form-content-wrapper>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-content-wrapper">
                <button type="submit">{{ __('Log in') }}</button>
            </div>

            <div class="form-content-wrapper">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
            
            <div class="form-content-wrapper">
                <a href="{{ route('register') }}">
                {{ __('Dosen’t have an account?') }}
                </a>
            </div>
        </form>
    </div>
</div>
