@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Proveedor</h1>

    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear Proveedor</button>
    </form>
</div>
@endsection
