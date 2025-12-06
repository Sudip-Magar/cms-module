<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="w-full max-w-md">
        <x-card class="p-8 shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">
                Login
            </h2>

            <x-form wire:submit='login' no-separator>
                <x-input label="Email Address" wire:model='email' icon="o-envelope" placeholder="example@email.com" />
                <x-input label="Password" wire:model='password' type="password"  icon="o-lock-closed"  placeholder="********" />

                <x-slot:actions>
                    <x-button label="Login"  class="btn-primary" type="submit" spinner="login" />
                </x-slot:actions>
            </x-form>
        </x-card>
    </div>
</div>
