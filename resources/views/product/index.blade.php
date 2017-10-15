@extends('base')
@section('title', 'Products List')

@section('main')
    @if(Auth::user())
        <h1>Los productos de {{ Auth::user()->name }}</h1>
    @endif

    <table>
        <tr>
            <th>Customer id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><img class="avatar" src="/img/products/{{ $product->image }}" alt=""></td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('customer.index') }}" class="back">Back</a>
@endsection