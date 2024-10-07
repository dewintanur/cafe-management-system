@extends('layouts.app')

@section('content')
<h1>List of Orders</h1>
<a href="{{ route('orders.create') }}" class="btn btn-primary">Add New Order</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Order Number</th>
            <th>Coffee ID</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->order_number }}</td>
            <td>{{ $order->coffee_id }}</td>
            <td>{{ $order->quantity }}</td>
            <td>
                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
