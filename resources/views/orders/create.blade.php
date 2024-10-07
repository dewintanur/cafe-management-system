@extends('layouts.app')

@section('content')
<h1>Add New Order</h1>
<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="order_number" class="form-label">Order Number</label>
        <input type="text" class="form-control" name="order_number" required>
    </div>
    <div class="mb-3">
        <label for="customer_name" class="form-label">Customer Name</label>
        <input type="text" class="form-control" name="customer_name" required>
    </div>
    <div class="mb-3">
        <label for="coffee_id" class="form-label">Select Coffee</label>
        <select class="form-select" name="coffee_id" required>
            <option value="">-- Select Coffee --</option>
            @foreach ($coffees as $coffee)
                <option value="{{ $coffee->id }}">{{ $coffee->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Order</button>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
