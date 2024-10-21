@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">Crear Proveedor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->descripcion }}</td>
                <td>
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
