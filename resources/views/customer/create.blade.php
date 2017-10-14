@extends('base')
@section('title', 'Customers Create')

@section('main')
    <form class="form" action="{{ route('customer.store') }}" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <legend>Customer</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname">
            </div>


            <div class="form-group">
                <label for="avatar" class="control-label">Avatar</label>
                <input type="text" class="form-control" name="avatar" id="avatar"
                       placeholder="avatar">
            </div>
            <div class="form-group">
                <input class="btn btn-info" type="submit" value="Send" name="send" id="send">
            </div>
        </fieldset>
    </form>

@endsection