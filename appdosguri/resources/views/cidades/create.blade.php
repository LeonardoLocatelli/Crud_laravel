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
        <h1 class="text-center">Nova Cidade</h1>
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
            {!! Form::open(['route' => 'cidades.store']) !!}
                <div class="form-group">
                    {!! Form::label('estado_id', 'Estado:') !!}
                    {!! Form::select('estado_id',
                        \App\Models\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cep', 'Cep:') !!}
                    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('populacao', 'População:') !!}
                    {!! Form::number('populacao', null, ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::submit('Criar Cidade', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>