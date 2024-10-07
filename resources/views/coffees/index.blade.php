@extends('layouts.app')

@section('content')
<h1>List of Kopi</h1>

<div class="mb-3 text-end ms-auto">
    <a href="{{ route('coffees.create') }}" class="btn btn-primary">Add New Coffee</a>
</div>

<div class="row">
    @foreach ($coffees as $coffee)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $coffee->name }}</h5>
                    <p class="card-text">{{ $coffee->description }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ $coffee->price }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('coffees.edit', $coffee->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('coffees.destroy', $coffee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
