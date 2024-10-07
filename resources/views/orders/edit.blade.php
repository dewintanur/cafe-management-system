@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="order_number" class="form-label">Order Number</label>
                    <input type="text" name="order_number" id="order_number" class="form-control" value="{{ $order->order_number }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="coffee_id" class="form-label">Coffee</label>
                    <select name="coffee_id" id="coffee_id" class="form-select" required>
                        @foreach($coffees as $coffee)
                            <option value="{{ $coffee->id }}" {{ $coffee->id == $order->coffee_id ? 'selected' : '' }}>
                                {{ $coffee->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $order->quantity }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Order</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
