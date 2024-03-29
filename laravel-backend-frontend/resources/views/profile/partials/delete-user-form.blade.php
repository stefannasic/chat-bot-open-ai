<section>
    <header>
        <h2>
            {{ __('Delete Account') }}
        </h2>

        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"\>
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <h2>
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <div class="errors">
                    <x-input-error :messages="$errors->userDeletion->get('password')" />
                </div>
            </div>

            <div>
                <button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </button>

                <button>
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>