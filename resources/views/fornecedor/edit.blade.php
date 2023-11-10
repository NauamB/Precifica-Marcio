<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Editar Fornecedor") }}</h3>

                    <form method="POST" action="{{ route('fornecedors.update', $fornecedor->id) }}">
                        @csrf
                        @method('PUT') <!-- Usamos PUT para indicar que estamos atualizando -->

                        <div class="mb-4">
                            <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">{{ __("Descrição") }}</label>
                            <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $fornecedor->nome }}" required />
                        </div>

                        <div class="mb-4">
                            <label for="valor" class="block text-gray-700 text-sm font-bold mb-2">{{ __("Valor") }}</label>
                            <input type="number" name="valor" id="valor" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $fornecedor->valor }}" required />
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __("Salvar") }}
                            </button>
                            <a href="{{ route('fornecedors.index') }}" class="btn btn-secondary">
                                {{ __("Fechar sem Salvar") }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
