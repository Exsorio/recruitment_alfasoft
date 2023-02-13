@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <a href="/contacts/" class="btn btn-info btn-sm">Go back</a>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Contact</h1>
        
        <div class="card">
            <div class="card-header">
                Contact Information
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: {{ $contact->name }}</h5>
                <p class="card-text">Contact: {{ $contact->contact }}</p>
                <p class="card-text">Email: {{ $contact->email }}</p>
            </div>
            <div class="card-footer text-muted">
                <a href="/contacts/{{$contact->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm" onclick="deletePost({{ $contact->id }})">
                    Delete
                </a>
            </div>
        </div>
        
    </div>
@endsection