@extends('template.admin')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <h1>Listagem de Contêiners</h1>

    <hr>

    <a href="{{ route('conteiner.create') }}" class="btn btn-primary my-4">Novo Contêiner</a>

    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($containers as $container)
                <tr>
                    <td>{{ $container->client }}</td>
                    <td>{{ $container->number }}</td>
                    <td>{{ $container->type }}</td>
                    <td>{{ $container->status }}</td>
                    <td>{{ $container->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('js')
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json'
                }
            });
        });
    </script>
@endsection
