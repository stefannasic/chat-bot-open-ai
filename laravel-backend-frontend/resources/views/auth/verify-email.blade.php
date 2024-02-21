<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/forms.css">

<div class="form-container">
    <div class="form-wrapper">
        <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="form-content-wrapper">
                <button type="submit">{{ __('Resend Verification Email') }}</button>
            </div>
        </form>
    </div>
</div>

