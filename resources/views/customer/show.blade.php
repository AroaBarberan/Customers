@extends('base')

@section('title', 'Customer show')

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
            <td>{{ $customer->avatar }}</td>
        </tr>
    </table>
@endsection