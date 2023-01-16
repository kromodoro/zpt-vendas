@extends('adminlte::page')

@section('title', 'ZPT Digital - Relatório')

@section('content_header')
<h1 class="m-0 text-dark">

    Relatório 
    @if($id == 1)
        de Vendedores
    @else
        de Produtos
    @endif

</h1>
@stop

@section('content')

<div class="row">
    <div class="col">
       @include('components.alerts.alert')
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="6">
                                @include('components.search', ['search' => (isset($_GET['key'])) ? $_GET['key'] : ''])
                            </th>
                        </tr>
                        <tr class="text-center">
                            
                            @if($id == 1)
                                <th>Vendedor</th>
                            @else
                                <th>Nome</th>
                                <th>Abreviação</th>
                                <th>EAN</th>
                            @endif

                            <th>Total de vendas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $venda)
                            <tr class="text-center">

                                @if($id == 1)
                                    <td>{{ $venda->name }}</td>
                                @else
                                    <td>{{ $venda->name }}</td>
                                    <td>{{ $venda->name_abrev }}</td>
                                    <td>{{ $venda->ean }}</td>
                                @endif

                                <td>
                                    {{ $venda->total }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="6">
                                {{ (count($data) < 10) ? '' :$data->links() }}
                            </td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>
</div>
@stop