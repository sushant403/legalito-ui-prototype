@extends('layout.master')
@section('title', 'Product - Legalito')
@section('description')

@section('content')
    <div class="container py-4 py-md-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <h1>Legalator 5000</h1>
                <div class="border border-3 border-light w-15 my-4"></div>
                <div class="d-flex align-items-center mb-4">
                    <div class="fst-italic small text-light"><a href="#">Author Name</a></div>
                    <div class="small text-light ms-auto">Maybe a TimeStamp</div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('img/home-legalito.png') }}" class="img-fluid mb-5" alt="Yellow and green leafed trees"
                    width="1280" height="850">
            </div>
        </div>

        <div class="row justify-content-center">

        </div>
    </div>
    <div class="bg-black text-white">
        <div class="container py-3">
            <div class="bg-black mt-n5 mt-md-n6 px-3 px-md-0">
                <div class="row justify-content-lg-between align-items-center gy-4 pb-5 pb-lg-6">
                    
                    <p class="fw-light fs-5">This is a sample intro paragraph and can be used to introduce readers to
                        the product. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                    <div class="col-lg-6">
                        <a href="#0" class="d-inline-block">
                            <figure class="img-overlay mb-0">
                                <img src="{{ asset('img/whoarewe_legalito.png') }}" alt="Who are We" class="img-thumbnail"
                                    width="800" height="550">
                                <div class="img-hover">
                                    <div class="img-text">View Product</div>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <p class="my-4 legalito-gold">Who are we?</p>
                        <h2 class="fw-normal">We know conveyancy</h2>
                        <p class="fw-light text-light">Lorem ispum goes here as a brief paragraph describing legalito Lorem ispum
                            goes here as a brief paragraph describing legalito Lorem ispum goes here as a brief paragraph describing
                            legalito Lorem ispum goes here as a brief paragraph describing legalito.</p>
                    </div>
                </div>
                <div class="row justify-content-center py-4 py-md-4">
                    <div class="col-md-12 col-lg-12">
        
                        <h2>What USPS to call out? </h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint <a href="#">occaecat cupidatat</a> non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <figure class="ms-5">
                            <blockquote class="blockquote">
                                <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit integer
                                    posuere erat a ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer text-muted mt-n2">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <hr class="bg-muted my-4">
                        <h3 class="visually-hidden">Tags</h3>
                        <a href="#" class="btn btn-sm btn-outline-dark me-2 mb-3">Design</a>
                        <a href="#" class="btn btn-sm btn-outline-dark mb-3">Minimalism</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
