<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png" style="
                                     position: relative;
                                     height: 30px;
                                     display: inline;
                                     margin-top: -35px;
                                     margin-right: 10px;
                                     vertical-align: middle;
                                     width: 40px;
                                     float: right;
                                     z-index: 99;
                                     " id="togglePassword">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" style="background-color: white; color: black" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="forgotpassword underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>

            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <script>
            const togglePassword =
                  document.querySelector('#togglePassword');

            const password =
                  document.querySelector('#password');

            togglePassword.
            addEventListener('click', function (e) {

                // Toggle the type attribute
                const type = password.getAttribute(
                    'type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // Toggle the eye slash icon
                if (togglePassword.src.match(
    "https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png")) {
                    togglePassword.src =
    "https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png";
                } else {
                    togglePassword.src =
    "https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png";
                }
            });
        </script>
</x-guest-layout>
