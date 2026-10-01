<x-guest-layout>
<<<<<<< HEAD
    <div class="auth-heading">
        <h1>Create Account</h1>
        <p>Join SOUND and discover music & videos</p>
    </div>

    @if ($errors->any())
        <div class="auth-errors">
            <strong>Please fix the following:</strong>
            <ul style="margin:7px 0 0 18px;padding:0;">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="auth-field">
            <label class="auth-label" for="name">Name <span class="auth-required">*</span></label>
            <input id="name" class="auth-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Your full name">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="username">User ID <span class="auth-required">*</span></label>
            <input id="username" class="auth-input" type="text" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Choose a unique user ID">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="address">Address <span class="auth-required">*</span></label>
            <input id="address" class="auth-input" type="text" name="address" value="{{ old('address') }}" required autocomplete="street-address" placeholder="Your address">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="phone">Phone Number <span class="auth-required">*</span></label>
            <input id="phone" class="auth-input" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="tel" placeholder="03XX XXXXXXX">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="email">Email <span class="auth-required">*</span></label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="you@example.com">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password">Password <span class="auth-required">*</span></label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="new-password" placeholder="Create a password">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password_confirmation">Confirm Password <span class="auth-required">*</span></label>
            <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <label class="auth-check" style="align-items:flex-start;">
                <input type="checkbox" name="terms" id="terms" required style="margin-top:3px;">
                <span>I agree to the <a class="auth-link" target="_blank" href="{{ route('terms.show') }}">Terms of Service</a> and <a class="auth-link" target="_blank" href="{{ route('policy.show') }}">Privacy Policy</a>.</span>
            </label>
        @endif

        <div class="auth-row">
            <a class="auth-link" href="{{ route('login') }}">Already registered?</a>
            <button class="auth-button" type="submit"><i class="fa fa-user-plus"></i>&nbsp; Register</button>
        </div>
    </form>
=======
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
</x-guest-layout>
