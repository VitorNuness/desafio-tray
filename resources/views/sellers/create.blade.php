@extends('layouts.app')
@section('content')
    <div class="mb-3">
        <a href="{{ route('sellers.index') }}" class="btn btn-primary">Voltar</a>
    </div>
    <div class="mx-auto">
        <h1 class="container mb-3">Adicionar Vendedor</h1>
    </div>
    <x-seller-form />
@endsection
