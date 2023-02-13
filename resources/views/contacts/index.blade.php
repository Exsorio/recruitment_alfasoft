@extends('layouts.master')

@section('content')
  <div class="container mt-5">
    <a href="/contacts/create" class="btn btn-info btn-sm">Create new contact</a>
  </div>
  <div class="container mt-5">
      <h1 class="text-center">Contact List</h1>

      @empty($contacts)
        <div class="alert alert-warning">
            The list of contacts is empty
        </div>
      @else
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($contacts as $contact)
                <tr>
                  <td>{{ $contact->id }}</td>
                  <td>{{ $contact->name }}</td>
                  <td>{{ $contact->contact }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>
                    <a href="/contacts/{{$contact->id}}" class="btn btn-info btn-sm">See more</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="deletePost({{ $contact->id }})">
                      Delete
                    </a>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      @endempty
  </div>
@endsection