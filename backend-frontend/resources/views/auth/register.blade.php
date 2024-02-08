<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/forms.css">

<div class="form-container">
    <div class="form-wrapper">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-content-wrapper">
                <input type="text" name="name" id="name" placeholder="Full Name" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="form-content-wrapper">
                <input type="email" name="email" id="email" placeholder="Email Address" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-content-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="form-content-wrapper">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <div class="form-content-wrapper">
                <button type="submit">REGISTER</button>
            </div>

            <div class="form-content-wrapper">
                <a href="{{ route('login') }}">
                {{ __('Already have an account?') }}
                </a>
            </div>
        </form>
    </div>
</div>

