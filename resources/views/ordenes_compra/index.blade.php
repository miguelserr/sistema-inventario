@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Órdenes de Compra</h1>
    <a href="{{ route('ordenes-compra.create') }}" class="btn btn-primary mb-3">Crear Orden de Compra</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Fecha de Orden</th>
                <th>Fecha Estimada de Entrega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordenesCompra as $orden)
            <tr>
                <td>{{ $orden->id }}</td>
                <td>{{ $orden->producto->nombre }}</td>
                <td>{{ $orden->proveedor->nombre }}</td>
                <td>{{ $orden->cantidad }}</td>
                <td>{{ $orden->fecha_orden }}</td>
                <td>{{ $orden->fecha_entrega_estimada }}</td>
                <td>
                    <a href="{{ route('ordenes-compra.edit', $orden->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('ordenes-compra.destroy', $orden->id) }}" method="POST" style="display:inline;">
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
