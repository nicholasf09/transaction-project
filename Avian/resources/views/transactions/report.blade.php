@extends('layouts.app')

@section('title', 'Laporan Transaksi')

@section('content')
<div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Laporan Transaksi</h2>

    <table id="reportTable" class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Customer ID</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Total Pembelian</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tableBody = document.querySelector("#reportTable tbody");

        fetch("{{ route('transactions.report-data') }}")
            .then(response => response.json())
            .then(data => {
                data.forEach(customer => {
                    const row = `
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">${customer.customer_id}</td>
                            <td class="border border-gray-300 px-4 py-2">${customer.customer_name}</td>
                            <td class="border border-gray-300 px-4 py-2">${customer.purchases_sum_total_price ? customer.purchases_sum_total_price : 0}</td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML("beforeend", row);
                });
            })
            .catch(error => console.error("Error fetching report data:", error));
    });
</script>
@endsection
