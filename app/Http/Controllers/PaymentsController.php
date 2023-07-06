<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = Payment::all();
        return view('admin.pagos.index',['pagos' => $pagos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Client::all();
        return view('admin.pagos.create',['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'total' => ['required', 'string', 'max:255'],
        ]);

        $pago = new Payment();
        $pago->user_id = $request->get('user_id');
        $pago->detail = $request->get('detail');
        $pago->total = $request->get('total');
        $pago->payment_date = $request->get('payment_date');
        $pago->save();

        return redirect()->route('pagos.index')->with('status', 'El pago se creó con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pago = Payment::findOrFail($id);
        $clientes = Client::all();

        return view('admin.pagos.edit',['pago' => $pago, 'clientes' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pago = Payment::findOrFail($id);

        $pago->user_id = $request->get('user_id');
        $pago->detail = $request->get('detail');
        $pago->total = $request->get('total');
        $pago->payment_date = $request->get('payment_date');
        $pago->update();

        return redirect()->route('pagos.index')->with('status', 'El pago se actualizó con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
