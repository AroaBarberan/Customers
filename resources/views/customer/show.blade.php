@extends('base')
@section('title', 'Customers Show')

@section('main')
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Avatar</th>
            @if(Auth::user())
                <th class="icon">Products</th>
            @endif
        </tr>
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->lastname }}</td>
            <td><img class="avatar" src="/img/{{ $customer->avatar }}"></td>
            @if(Auth::user())
                <td class="icon"><a href="{{ route('product.showSome', [$customer->id]) }}"><span
                                class="glyphicon glyphicon-arrow-right"></span></a></td>
            @endif
        </tr>
    </table>
    <a href="{{ route('customer.index') }}" class="back">Back</a>
@endsection