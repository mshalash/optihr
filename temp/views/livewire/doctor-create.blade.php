<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div>
                <form wire:submit="register" class="p-5">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                            required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>


                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input wire:model="password_confirmation" id="password_confirmation"
                            class="block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-400 text-black hover:bg-gray-300 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            href="/admin/doctors">
                            Cancel
                        </a>


                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>