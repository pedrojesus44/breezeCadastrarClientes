<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sistema Web') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Tela de cadastramento de clientes") }}
                    <div style="margin-top:20px;">
                        <form method="POST" action="{{ route('cadastrarCliente') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome do cliente" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="exemplo@email.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Endereço -->
                            <div class="mt-4">
                            <x-input-label for="endereco" :value="_('Endereço')" />
                            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="endereco" placeholder="" />
                            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
                            </div>

                            <!-- Bairro -->
                            <div class="mt-4">
                            <x-input-label for="bairro" :value="_('Bairro')" />
                            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autocomplete="bairro" placeholder=""/>
                            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                            </div>

                            <!-- CEP -->
                            <div class="mt-4">
                            <x-input-label for="cep" :value="_('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autocomplete="cep" pattern="\d{5}-?\d{3}" placeholder=""/>
                            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                            </div>

                            <!-- Cidade -->
                            <div class="mt-4">
                            <x-input-label for="cidade" :value="_('Cidade')" />
                            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autocomplete="cidade" placeholder=""/>
                            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                            </div>

                            <!-- Estado -->
                            <div class="mt-4">
                            <x-input-label for="estado" :value="_('Estado')" />
                            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autocomplete="estado" placeholder=""/>
                            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>

                            <!-- Telefone -->
                            <div class="mt-4">
                            <x-input-label for="telefone" :value="_('Telefone')" />
                            <x-text-input id="telefone" class="block mt-1 w-full" type="tel" name="telefone" :value="old('telefone')" required autocomplete="telefone" placeholder=""/>
                            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
                            </div>

                            <!-- Celular -->
                            <div class="mt-4">
                            <x-input-label for="celular" :value="_('Celular')" />
                            <x-text-input id="celular" class="block mt-1 w-full" type="tel" name="celular" :value="old('celular')" required autocomplete="celular" placeholder=""/>
                            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Senha')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirmação de senha')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('Cadastrar Cliente') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</x-app-layout>