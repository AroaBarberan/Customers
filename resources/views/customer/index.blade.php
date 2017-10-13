@extends('base')
@section('title', 'Customers List')

@section('main')
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Avatar</th>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->lastname }}</td>
                <td><img class="avatar" src="/img/{{$customer->avatar}}" alt=""></td>
            </tr>
        @endforeach
        <a href=" {{ route('customer.create') }}">Create Customer</a>
    </table>
@endsection