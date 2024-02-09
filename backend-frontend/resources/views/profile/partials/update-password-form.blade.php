<section>
    <header>
        <h2>
            {{ __('Update Password') }}
        </h2>

        <p>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div>
            <input type="password" name="current_password" id="current_password" placeholder="Current Password" required>
            <div class="errors">
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div>
            <input type="password" name="password" id="password" placeholder="New Password" required>
            <div class="errors">
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>

        <div>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
            <div class="errors">
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div>
            <button>
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p class="message" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>