<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Apellido paterno -->
            <div class="mt-4">
                <x-label for="apaterno" :value="__('Apellido Paterno')" />

                <x-input id="apaterno" class="block mt-1 w-full" type="text" name="apaterno" :value="old('apaterno')" required autofocus />
            </div>

            <!-- Apellido materno -->
            <div class="mt-4">
                <x-label for="amaterno" :value="__('Apellido Materno')" />

                <x-input id="amaterno" class="block mt-1 w-full" type="text" name="amaterno" :value="old('amaterno')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Electronico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Tipo de usuario -->
            <div class="mt-4">
                <x-label for="perfil" :value="__('Tipo de usuario')" />
                <select id="perfil_id" name="perfil_id" class="block mt-1 w-full" required>
                    <option value="capturista">Capturista</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirma Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estas registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
