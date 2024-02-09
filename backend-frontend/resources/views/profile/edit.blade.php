<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/edit.css">
@vite('resources/js/app.js')
    
<h2>
    {{ __('Profile') }}
</h2>

<div class="edit-container">
    <div class="edit-wrapper">
        @include('profile.partials.update-profile-information-form')
    </div>
</div>

<div class="edit-container">
    <div class="edit-wrapper">
        @include('profile.partials.update-password-form')
    </div>
</div>

<div class="edit-container">
    <div class="edit-wrapper">
        @include('profile.partials.delete-user-form')
    </div>
</div>





