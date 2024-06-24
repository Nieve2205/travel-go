<x-guest-layout>
    <div class="flex justify-center items-center h-screen min-h-screen">
            <div class="w-1/2 bg-white bg-opacity-80 shadow-md overflow-hidden sm:rounded-[30px]" style="height:50%; min-height: 50vh;">
                <div class="flex flex-col items-left  justify-center h-full border-l-4 border-gray-300 pl-10 pr-10">
                    <h1 class="text-2xl font-bold mb-4">{{ __('Cambio la contraseña') }}</h1>
                    <div class="mb-4 text-sm text-gray-600 w-full text-left">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <!-- Session Status -->
                    <x-auth-session-status :status="session('status')" />


                    <form method="POST" action="{{ route('password.email') }}" class="w-full">
                    @csrf
                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
</x-guest-layout>
