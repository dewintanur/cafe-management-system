@extends('layouts.app')

@section('content')
<h1>{{ $coffee->name }}</h1>
<p><strong>Description:</strong> {{ $coffee->description }}</p>
<p><strong>Price:</strong> ${{ $coffee->price }}</p>
<a href="{{ route('coffees.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
