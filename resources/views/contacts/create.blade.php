@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <a href="/contacts/" class="btn btn-info btn-sm">Go back</a>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Create a contact</h1>

        <form action="{{route('contacts.store')}}" method="post">
            @csrf
            <div class="form-row">
                <label>Name</label>
                <input class="form-control" type="text" name="name" min="5" id="name" required>
            </div>
            <div class="form-row">
                <label>Email</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
            <div class="form-row">
                <label>Contact</label>
                <input class="form-control" type="text" name="contact" min="9" id="contact" required>
            </div>
            <div class="form-row mt-5">
                <button type="submit" class="btn btn-primary btn-log">Create Contact</button>
            </div>
        
        </form>
    </div>
@endsection