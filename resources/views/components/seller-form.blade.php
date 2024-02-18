@if ($errors->any())
    <div>
        <x-alert />
    </div>
@endif
<form action="{{ route('sellers.store') }}" method="POST" class="container w-75">
    @csrf
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" value="{{ $seller->name ?? old('name') }}">
    </div>
    
    <div class="form-group mb-3">
        <label for="mail" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="mail" value="{{ $seller->mail ?? old('mail') }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="w-100 btn btn-success">Enviar</button>
    </div>
</form>
