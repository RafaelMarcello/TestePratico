@extends('template.admin')

@section('content')
    <h1>Cadastro de Movimentação</h1>

    <hr>

    <a href="{{ route('movimentacao.index') }}" class="btn btn-primary my-4">Listagem Movimentação</a>

    <form action="{{ route('movimentacao.store') }}" method="post" class="p-3 border">
        @csrf

        <div class="mb-3">
            <label for="container" class="form-label">Contêiner</label>
            <select class="form-select" name="container" id="container">
                <option value="" selected>Selecione o contêiner</option>
                @foreach ($movements as $movement)
                    <option value="{{ $movement->container->id }}">
                        {{ $movement->container->number . ' (' . $movement->container->client . ')' }}</option>
                @endforeach
            </select>

            @error('container')
                <small id="containerError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" name="type" id="type">
                <option value="" selected>Selecione o tipo de movimentação</option>
                <option value="Embarque">Embarque</option>
                <option value="Descarga">Descarga</option>
                <option value="Gate in">Gate in</option>
                <option value="Gate out">Gate out</option>
                <option value="Reposicionamento">Reposicionamento</option>
                <option value="Pesagem">Pesagem</option>
                <option value="Scanner">Scanner</option>
            </select>

            @error('type')
                <small id="typeError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="start" class="form-label">Início</label>
            <input type="datetime-local" class="form-control" name="start" id="start" aria-describedby="helpId"
                placeholder="">
            @error('start')
                <small id="startError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="end" class="form-label">Fim</label>
            <input type="datetime-local" class="form-control" name="end" id="end" aria-describedby="helpId"
                placeholder="">
            @error('end')
                <small id="endError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
