<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index()
    {
        $ordenesCompra = OrdenCompra::with(['producto', 'proveedor'])->get();
        return view('ordenes_compra.index', compact('ordenesCompra'));
    }

    public function create()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('ordenes_compra.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer|min:1',
            'fecha_orden' => 'required|date',
            'fecha_entrega_estimada' => 'required|date|after_or_equal:fecha_orden',
        ]);

        OrdenCompra::create($request->all());
        return redirect()->route('ordenes-compra.index')->with('success', 'Orden de compra creada con éxito.');
    }

    public function edit(OrdenCompra $ordenCompra)
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('ordenes_compra.edit', compact('ordenCompra', 'productos', 'proveedores'));
    }

    public function update(Request $request, OrdenCompra $ordenCompra)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer|min:1',
            'fecha_orden' => 'required|date',
            'fecha_entrega_estimada' => 'required|date|after_or_equal:fecha_orden',
        ]);

        $ordenCompra->update($request->all());
        return redirect()->route('ordenes-compra.index')->with('success', 'Orden de compra actualizada con éxito.');
    }

    public function destroy(OrdenCompra $ordenCompra)
    {
        $ordenCompra->delete();
        return redirect()->route('ordenes-compra.index')->with('success', 'Orden de compra eliminada con éxito.');
    }
}
