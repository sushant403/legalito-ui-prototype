@extends('layout.master')
@section('title', 'Page Not Found - Legalito')
@section('description')

@section('content')
    <div class="container py-5 py-md-6">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-3">Page Not Found</h1>
                <div class="border border-2 border-light w-15 my-4"></div>
                <p class="lead text-light mb-4">404 Error. Click Here to go to homepage.</p>

                <a href="{{ url('/') }}" class="btn btn-outline-dark">Homepage</a>
            </div>
        </div>
    </div>
@endsection
