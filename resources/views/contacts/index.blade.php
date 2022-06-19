@extends('contacts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div>
                        <h2>Contacts List</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->address}}</td>
                                            <td>{{$contact->mobile}}</td>
                                            <td>
                                                <a class="btn btn-md btn-secondary mt-1" href="{{ url('/contacts/' . $contact->id) }}">View</a>
                                                <a class="btn btn-md btn-info mt-1" href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a>
                                                <form method="POST" action="{{ url('/contacts' . '/' . $contact->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-md mt-1" title="Delete Contact" onclick="return confirm('&quot; Confirm delete ? &quot;')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection