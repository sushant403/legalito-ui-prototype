@extends('layout.master')
@section('title', 'Page Not Found - Legalito')
@section('description')

@section('content')
    <style>
        body{
            background: #f8f9fd !important; 
        }
    </style>

    <div class="container py-5 py-md-6">
        <div class="row justify-content-center">
            <div class="col-lg-5 offset-1">
                <h1 class="display-1 legalito-blue" style="font-family: sans-serif; font-size: 8rem">404</h1>
                <strong>
                    <h5 class="legalito-blue mb-4" style="font-family: 'Fira Sans'">Page Not Found</h5>
                </strong>
                <p class="lead bold text-black mb-4">Oh no, somethings gone wrong. We're working hard to fix it.</p>

                <a href="{{ url('/') }}" class="btn btn-outline-dark p-2">Homepage</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/404.png') }}" width="350">
            </div>
        </div>
    </div>
@endsection
