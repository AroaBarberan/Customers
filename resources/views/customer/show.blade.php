@extends('base')
@section('title', 'Customers Show')

@section('main')
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Avatar</th>
        </tr>
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->lastname }}</td>
            <td><img class="avatar" src="/img/{{ $customer->avatar }}"></td>
        </tr>
    </table>
    <a href="{{ route('customer.index') }}" class="back">Back</a>
@endsection