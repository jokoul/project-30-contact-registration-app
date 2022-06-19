@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Contact Information</h2>
        </div>
        <div class="card-body">
            <h5>Name: {{ $contact->name }}</h5>
            <p>Address: {{ $contact->address }}</p>
            <p>Mobile: {{ $contact->mobile }}</p>
        </div>
    </div>
@endsection