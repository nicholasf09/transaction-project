@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Tambah Transaksi</h2>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="customer_id" class="block text-sm font-medium text-gray-700">Customer:</label>
            <select name="customer_id" id="customer_id" class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->customer_id }}">{{ $customer->customer_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="purchase_date" class="block text-sm font-medium text-gray-700">Tanggal Pembelian:</label>
            <input type="date" name="purchase_date" id="purchase_date" class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="total_price" class="block text-sm font-medium text-gray-700">Total Harga:</label>
            <input type="number" name="total_price" id="total_price" class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="text-center">
            <button type="submit" class="w-full bg-blue-800 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Simpan Transaksi
            </button>
        </div>
    </form>
</div>
@endsection
