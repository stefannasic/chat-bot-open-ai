<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/forms.css">

<div class="form-container">
    <div class="form-wrapper">
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-content-wrapper">
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('email')" />
            </div>
            
            <div class="form-content-wrapper">
                <button type="submit">{{ __('Email Password Reset Link') }}</button>
            </div>
        </form>
    </div>
</div>
