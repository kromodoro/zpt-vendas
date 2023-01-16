@extends('adminlte::auth.auth-page')


@section('auth_body')

<div class="row justify-content-end">
    <a href="{{ route('product') }}" class="btn btn-primary">Voltar</a>
</div>

<div class="row justify-content-center">
    <h3 class="text-center">Formulário de Produto</h3>
</div>

<hr>

<form action="/product/action/{{ $option }}/{{ $id }}" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{ $data[0]->id ?? null}}">

    {{-- Name field --}}
    <div class="form-group mb-3">
        <label for="name">Nome do produto</label>
        <input 
        type="text" 
        name="name" 
        id="name" 
        class="form-control"
        value="{{ $data[0]->name ?? '' }}" 
        placeholder="Nome do produto" 
        autofocus
        maxlength="255"
        required 
        />
    </div>

    {{-- Name_abrev field --}}
    <div class="form-group mb-3">
        <label for="name_abrev">Nome abreviado</label>
        <input 
        type="text" 
        name="name_abrev" 
        id="name_abrev" 
        class="form-control"
        value="{{ $data[0]->name_abrev ?? '' }}" 
        placeholder="Nome abreviado" 
        maxlength="255"
        required
        />
    </div>

    {{-- EAN field --}}
    <div class="form-group mb-3">
        <label for="ean">EAN/GTIN/label</label>
        <input 
        type="text" 
        name="ean" 
        id="ean" 
        class="form-control"
        value="{{ $data[0]->ean ?? '' }}" 
        placeholder="EAN" 
        maxlength="44"
        />
    </div>

    {{-- Value field --}}
    <div class="form-group mb-3">
        <label for="value">Valor do produto</label>
        <input 
        type="number" 
        name="value" 
        id="value" 
        class="form-control"
        value="{{ $data[0]->value ?? 0 }}" 
        placeholder=" 0.00" 
        step="0.01"
        min="0" 
        />
    </div>

    {{-- Register button --}}
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
    </div>

</form>
@stop