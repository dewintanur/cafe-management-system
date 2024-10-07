@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Coffee</h1>

    <form action="{{ route('coffees.update', $coffee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Coffee Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $coffee->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $coffee->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $coffee->price }}" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Coffee</button>
                <a href="{{ route('coffees.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
