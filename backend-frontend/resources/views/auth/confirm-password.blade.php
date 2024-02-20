<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/forms.css">

<div class="form-container">
    <div class="form-wrapper">
        <p>This is a secure area of the application. Please confirm your password before continuing.</p>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="form-content-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="errors">
                <x-input-error :messages="$errors->get('password')" />
            </div>
            
            <div class="form-content-wrapper">
                <button type="submit">{{ __('Confirm') }}</button>
            </div>
        </form>
    </div>
</div>

