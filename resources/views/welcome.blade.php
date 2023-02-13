@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Welcome!</h1>
        <hr>
        <h3 class="left-center">Develop a CRUD Laravel web application to manage contacts</h3>

        <div class="card mt-5">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Contact List</h5>
                <a href="/contacts" class="btn btn-primary">Let's Go</a>
            </div>
        </div>
        
    </div>
@endsection