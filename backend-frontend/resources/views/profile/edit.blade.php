<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/edit.css">
@vite('resources/js/app.js')

@include('../layouts.navigation')

<div class="edit">
    <div class="right-container">
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
    </div>
</div>