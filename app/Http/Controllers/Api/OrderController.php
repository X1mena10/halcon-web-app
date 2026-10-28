<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Listar todas las órdenes de más nueva a más vieja
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return response()->json($orders, 200);
    }

    // Crear una nueva orden[cite: 13]
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'invoice_number' => 'required|string|unique:orders',
            'total' => 'required|numeric',
            'status' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    // Obtener una orden específica[cite: 13]
    public function show($id)
    {
        $order = Order::with('user')->findOrFail($id);
        return response()->json($order, 200);
    }

    // Actualizar una orden o su estatus[cite: 13]
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'total' => 'sometimes|numeric',
            'status' => 'sometimes|string',
            'description' => 'sometimes|nullable|string'
        ]);

        $order->update($validated);
        return response()->json($order, 200);
    }

    // Borrado lógico / archivar orden[cite: 13]
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['message' => 'Order archived successfully'], 200);
    }

    // Buscar una orden usando su número de factura[cite: 13]
    public function searchByInvoice($invoice)
    {
        $order = Order::where('invoice_number', $invoice)->firstOrFail();
        return response()->json($order, 200);
    }

    // Listar órdenes archivadas[cite: 13]
    public function archived()
    {
        $orders = Order::onlyTrashed()->get();
        return response()->json($orders, 200);
    }
}