@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Coffee</h1>

    <form action="{{ route('coffees.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Coffee Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" required step="0.01" min="0">
                </div>
                <button type="submit" class="btn btn-primary">Add Coffee</button>
                <a href="{{ route('coffees.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
