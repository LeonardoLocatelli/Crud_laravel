<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="container">
    <a href="{{ route('estados.create') }}" class="btn btn-block btn-success mt-4 mb-5">Criar novo Estado</a>
    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">REGIÃO</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estados as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->nome}}</td>
                <td>{{$e->regiao}}</td>

                <td>
                    <a href="{{ route('estados.edit', ['id'=>$e->id]) }}" class="btn-sm btn-info">Edit</a>
                    <a href="{{ route('estados.destroy', ['id'=>$e->id]) }}" class="btn-sm btn-danger">Remover</a>
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