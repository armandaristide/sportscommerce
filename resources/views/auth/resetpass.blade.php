<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
        <h2><strong>{{ __('RESET  PASSWORD') }}</strong> </h2>
    </div>
    <form method="POST" action="{{ route('password.new') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="email"  hidden name="email" value="{{$user->email}}">


        <!-- Email Address -->

        <div class="mt-4 row">
            <div class="container">
                <div class="col-md-4">
                    <h2 class="text-white">Email verified ✅ :  <strong class="text-white">{{$user->email}}</strong> </h2>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
