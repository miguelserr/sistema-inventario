@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Orden de Compra</h1>

    <form action="{{ route('ordenes-compra.update', $ordenCompra->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="producto_id" class="form-label">Producto</label>
            <select name="producto_id" class="form-control" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}" {{ $producto->id == $ordenCompra->producto_id ? 'selected' : '' }}>
                        {{ $producto->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="proveedor_id" class="form-label">Proveedor</label>
            <select name="proveedor_id" class="form-control" required>
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" {{ $proveedor->id == $ordenCompra->proveedor_id ? 'selected' : '' }}>
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $ordenCompra->cantidad }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_orden" class="form-label">Fecha de Orden</label>
            <input type="date" name="fecha_orden" class="form-control" value="{{ $ordenCompra->fecha_orden }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_entrega_estimada" class="form-label">Fecha Estimada de Entrega</label>
            <input type="date" name="fecha_entrega_estimada" class="form-control" value="{{ $ordenCompra->fecha_entrega_estimada }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Orden</button>
    </form>
</div>
@endsection
