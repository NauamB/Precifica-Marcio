<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Botão para Inserir Produto -->
                <a style="margin-left: 5px; margin-top: 5px;" href="{{ route('produto.create') }}" class="btn btn-lg btn-success bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 rounded">
                    <i class="fa fa-plus"></i> Novo Produto 
                </a>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Lista de Produtos") }}</h3>

                    <div class="overflow-x-auto">
                        <table class="table-auto w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">{{ __("ID") }}</th>
                                    <th class="px-4 py-2 text-left">{{ __("Nome do Produto") }}</th>
                                    <th class="px-4 py-2 text-right">{{ __("Preço") }}</th>
                                    <th class="px-4 py-2 text-center">{{ __("Ações") }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                <tr>
                                    <td class="border px-4 py-2">{{ $produto->id }}</td>
                                    <td class="border px-4 py-2">{{ $produto->nome }}</td>
                                    <td class="border px-4 py-2" style="text-align: right;">R$ {{ number_format($produto->valor, 2, ',', '.') }}</td>


                                    <td class="border px-4 py-2 text-center">
                                        <!-- Botão para EditarProduto -->
                                    <a href= "{{ route('produto.edit', $produto->id) }}" class="btn btn-primary"
                                    style="display: inline;">
                                          
                                            
                                            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 rounded" style="display: inline;">
                                               Editar
                                            </button>
</a>
                                    
                                    
                                        <!-- Botão para Excluir Produto -->
                                        <form action="{{ route('produto.destroy', $produto->id) }}" method="POST"
                                        style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" style="display: inline;">
                                                {{ __('Excluir') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
