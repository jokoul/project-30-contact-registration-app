@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Create Contact</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/contacts/') }}">
                {{ csrf_field() }}
            
                <label class="mt-2" for="name">Name: </label><br>
                <input type="text" id="name" name="name" class="form-control"><br>
                <label class="mt-2" for="address">Address: </label><br>
                <input type="text" id="address" name="address" class="form-control"><br>
                <label class="mt-2" for="mobile">Mobile: </label><br>
                <input type="text" id="mobile" name="mobile" class="form-control"><br>
                <input type="submit" name="submit" value="Save" class="btn btn-success mt-3"><br>
            </form>
        </div>
    </div>
@stop