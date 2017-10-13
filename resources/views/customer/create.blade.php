@extends('base')
@section('title', 'Customers Create')

@section('main')
    {{--<form action="{{ route('customer.store') }}" method="POST">--}}
    <form action="" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <legend>Customer</legend>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="avatar">Avatar</label>
                <input type="text" name="avatar" id="avatar">
            </div>
            <div>
                <input type="submit" value="Send" name="send" id="send">
            </div>
        </fieldset>
    </form>
@endsection