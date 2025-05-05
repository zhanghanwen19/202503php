@extends('layouts.app')

@section('content')
    @if(!$products->isEmpty())
        @foreach($products as $product)
            <div class="product mb-4 border-b border-gray-200 pb-2">
                <span class="me-3">{{ $product->id }}</span>
                <span class="me-3"><b>{{ $product->name }}</b></span>
                <a href="{{ route('products.show', $product->id) }}">View Products</a>
            </div>
        @endforeach
    @else
        <div class="alert alert-info">
            No products found.
        </div>
    @endif
@endsection
