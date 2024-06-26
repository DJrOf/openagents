<div>
    <nav class="w-full p-4 flex justify-center items-center my-2 fixed">
        <a href="{{ url('/') }}">
            <x-icon.logo class="h-8"></x-icon.logo>
        </a>
    </nav>

    <main class="flex items-center justify-center h-screen w-full">
        <div class="md:min-w-[25rem] max-w-md">
            <div class="">
                <h2 class="block text-xl text-center font-bold text-gray-200">
                    {{ $this->show ? 'Password reset' : 'Reset Password' }}</h2>
            </div>
            <div class="text-center">
                @if (!$this->show)
                <form wire:submit.prevent='reset_account'>
                    <div class="p-4 sm:p-7">
                        <div class="mb-4">
                            <x-input wire:model='password' id="password" class="block mt-1 w-full" type="password" name="password" required autofocus placeholder="New password" />
                            @error('password') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <x-input wire:model='password_confirmation' id="password" class="block mt-1 w-full" type="password" name="password_confirmation" required autofocus placeholder="Confirm new password" />
                            @error('password_confirmation') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="mt-5">
                            <x-button class="w-full flex  items-center justify-center gap-2">
                                Change Password
                            </x-button>
                        </div>
                    </div>
                </form>
                @else
                <p class="mt-2 text-sm md:text-lg text-[#D7D8E5]">
                    Return to OpenAgents to login.
                </p>
                @endif
            </div>
        </div>
    </main>
</div>
