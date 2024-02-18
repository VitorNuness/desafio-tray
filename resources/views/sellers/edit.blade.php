@extends('layouts.app')
@section('content')
    <div class="mb-3">
        <a href="{{ route('sellers.show', $seller->id) }}" class="btn btn-primary">Voltar</a>
    </div>
    <x-seller-form :seller='$seller' />
@endsection
