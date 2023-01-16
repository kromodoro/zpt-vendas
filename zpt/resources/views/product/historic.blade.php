@extends('adminlte::page')

@section('title', 'ZPT Digital - Logs')

@section('content_header')
<h1 class="m-0 text-dark">Logs do sistema</h1>
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
                        <tr class="text-center">
                            <th>Vendedor</th>
                            <th>Descrição</th>
                            <th>Produto</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data->all() as $field)

                            <tr class="text-center">
                                <td>{{$field->usuario}}</td>
                                <td>{{$field->description}}</td>
                                <td>{{$field->produto}}</td>
                                <td>{{$field->created_at}}</td>
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
