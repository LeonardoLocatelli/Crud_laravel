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
        <h1 class="text-center">Editar Estado: {{$e->nome}}</h1>
        <div class="form">
            @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['route' => ["estados.update", $e->id], 'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $e->nome, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('regiao', 'Região:') !!}
                {!! Form::text('regiao', $e->regiao, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Editar Estado', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
