@extends('layouts.app')

@section('header', 'Dashboard') <!-- Mengatur header untuk dashboard -->

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg">Total Coffees</h3>
                <p class="text-3xl font-bold mt-2">{{ $coffeeCount }}</p>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg">Total Orders</h3>
                <p class="text-3xl font-bold mt-2">{{ $orderCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
