@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit Contact</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/contacts/' . $contact->id) }}">
                {{ csrf_field() }}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
                <label class="mt-2" for="name">Name: </label><br>
                <input type="text" id="name" name="name" value="{{ $contact->name }}" class="form-control">
                <label class="mt-2" for="address">Address: </label><br>
                <input type="text" id="address" name="address" value="{{ $contact->address }}" class="form-control">
                <label class="mt-2" for="mobile">Mobile: </label><br>
                <input type="text" id="mobile" name="mobile" value="{{ $contact->mobile }}" class="form-control">
                <input type="submit" name="submit" value="Update" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
@stop