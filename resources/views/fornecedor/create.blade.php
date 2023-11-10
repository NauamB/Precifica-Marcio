<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inserir Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Novo Fornecedor") }}</h3>

                    <form method="POST" action="{{ route('fornecedors.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="descricao" class="block text-gray-700 text-sm font-bold mb-2">{{ __("Descrição") }}</label>
                            <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                        </div>

                        <div class="mb-4">
                            <label for="valor" class="block text-gray-700 text-sm font-bold mb-2">{{ __("Valor") }}</label>
                            <input type="number" name="valor" id="valor" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __("Inserir") }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
