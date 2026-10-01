<x-guest-layout>
<<<<<<< HEAD
    <div class="auth-heading">
        <h1>Welcome Back</h1>
        <p>Login to continue to your SOUND account</p>
    </div>

    @if ($errors->any())
        <div class="auth-errors">
            <strong>Please fix the following:</strong>
            <ul style="margin:7px 0 0 18px;padding:0;">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    @session('status')
        <div class="auth-status">{{ $value }}</div>
    @endsession

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="auth-field">
            <label class="auth-label" for="email">Email or User ID <span class="auth-required">*</span></label>
            <input id="email" class="auth-input" type="text" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter email or user ID">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password">Password <span class="auth-required">*</span></label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter password">
        </div>

        <label class="auth-check">
            <input id="remember_me" type="checkbox" name="remember">
            <span>Remember me</span>
        </label>

        <div class="auth-row">
            @if (Route::has('password.request'))
                <a class="auth-link" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
            <button class="auth-button" type="submit"><i class="fa fa-sign-in"></i>&nbsp; Log in</button>
        </div>
    </form>

    <div class="auth-divider"></div>
    <div class="auth-footer">Don't have an account? <a class="auth-link" href="{{ route('register') }}">Create Account</a></div>
=======
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
</x-guest-layout>
