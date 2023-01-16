@extends('adminlte::page')

@section('title', 'ZPT Digital - Produtos')

@section('content_header')
<h1 class="m-0 text-dark">Produtos</h1>
@stop

@section('content')

<div class="row">
  <div class="col">
     @include('components.alerts.alert')
 </div>
</div>

<div class="row justify-content-end px-2">
    <a href="{{ route('product.action') . '/form' }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Novo Produto
    </a>
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
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Nome abreviado</th>
                            <th>EAN</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data->all() as $product)

                            <tr class="text-center">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->name_abrev }}</td>
                                <td>{{ $product->ean }}</td>
                                <td>R$ {{ number_format($product->value, 2, ',','.') }}</td>
                                <td>
                                    <a 
                                        href="{{ route('product.action') . '/sale/' . $product->id }}" 
                                        class="btn btn-info">Vender
                                    </a>
                                    
                                    <a 
                                        href="{{ route('product.action') .'/form/'. $product->id }}" class="btn btn-warning">EDIT
                                    </a>
                                    
                                    <!--a 
                                        href="{{ route('product.action') . '/del/' . $product->id }}" class="btn btn-danger">DEL
                                    </a-->
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
