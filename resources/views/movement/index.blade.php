@extends('template.admin')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <h1>Listagem de Movimentação</h1>

    <hr>

    <a href="{{ route('movimentacao.create') }}" class="btn btn-primary my-4">Nova Movimentacao</a>

    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Início</th>
                <th>Fim</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movements as $movement)
                <tr>
                    <td>{{ $movement->container->client }}</td>
                    <td>{{ $movement->container->number }}</td>
                    <td>{{ $movement->type }}</td>
                    <td>{{ $movement->start }}</td>
                    <td>{{ $movement->end }}</td>
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
