<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Http\Request;
use DataTables;

class TransactionController extends Controller
{
    public function create()
    {
        $customers = Customer::all();
        return view('transactions.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'purchase_date' => 'required|date',
            'total_price' => 'required|numeric|min:0',
        ]);

        $lastPurchase = Purchase::orderBy('purchase_id', 'desc')->first();

        $nextPurchaseId = $lastPurchase ? $lastPurchase->purchase_id + 1 : 1;

        Purchase::create([
            'purchase_id' => $nextPurchaseId,
            'customer_id' => $request->customer_id,
            'purchase_date' => $request->purchase_date,
            'total_price' => $request->total_price,
        ]);

        return redirect()->route('transactions.create')->with('success', 'Transaksi berhasil ditambahkan!');
    }


    public function report()
    {
        return view('transactions.report');
    }

    public function reportData()
    {
        $data = Customer::withSum('purchases', 'total_price')->get();
        return response()->json($data);
    }

}
