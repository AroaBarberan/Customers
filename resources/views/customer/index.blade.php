@extends('base')
@section('title', 'Customers List')

@section('main')
    @if(Auth::user())
        <h1>Bienvenid@ {{ Auth::user()->name }}</h1>
    @endif

    <table>
        <title>Customers</title>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Avatar</th>
            @if(Auth::user())
                <th class="icon">Detail</th>
                <th class="icon">Edit</th>
                <th class="icon">Delete</th>
            @endif
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->lastname }}</td>
                <td><img class="avatar" src="/img/{{$customer->avatar}}" alt=""></td>
                @if(Auth::user())
                    <td class="icon"><a href="{{ route('customer.show', [$customer->id]) }}"><span
                                    class="glyphicon glyphicon-eye-open"></span></a>
                        <a href=""></a></td>
                    <td class="icon"><a href="{{ route('customer.delete', ['id' => $customer->id]) }}"><span
                                    class="glyphicon glyphicon-pencil"></span></a></td>
                    <td class="icon"><a href="{{ route('customer.delete', ['id' => $customer->id]) }}"><span
                                    class="glyphicon glyphicon-remove"></span></a></td>
                @endif
            </tr>
        @endforeach
        <a href="{{ route('customer.create') }} ">Create Customer</a>
    </table>
@endsection