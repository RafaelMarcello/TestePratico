@extends('template.admin')

@section('content')
    <h1>Cadastro de Contêiners</h1>

    <hr>

    <a href="{{ route('conteiner.index') }}" class="btn btn-primary my-4">Listagem Contêiner</a>

    <form action="{{ route('conteiner.store') }}" method="post" class="p-3 border">
        @csrf

        <div class="mb-3">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" name="client" id="client" aria-describedby="helpId"
                placeholder="Digite o cliente">
            @error('client')
                <small id="clientError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="text" class="form-control number_format" name="number" id="number" aria-describedby="helpId"
                placeholder="Digite o número do contêiner">
            @error('number')
                <small id="numberError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" name="type" id="type">
                <option value="" selected>Selecione o tipo</option>
                <option value="20">20</option>
                <option value="40">40</option>
            </select>

            @error('type')
                <small id="typeError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option value="" selected>Selecione o status</option>
                <option value="Cheio">Cheio</option>
                <option value="Vazio">Vazio</option>
            </select>

            @error('status')
                <small id="statusError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-select" name="category" id="category">
                <option value="" selected>Selecione a categoria</option>
                <option value="Importação">Importação</option>
                <option value="Exportação">Exportação</option>
            </select>

            @error('category')
                <small id="categoryError" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>

    <script>
        $('.number_format').mask('AAAA0000000', {
            'translation': {
                A: {
                    pattern: /[A-Z*]/
                },
                0: {
                    pattern: /[0-9*]/
                }
            }
        });
    </script>
@endsection
