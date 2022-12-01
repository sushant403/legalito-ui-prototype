@extends('layout.master')
@section('title', 'Product - Legalito')
@section('description')

@section('content')
    <div class="container py-5 text-center mx-auto">
        <div class="col-xxl-8 mx-auto">
            <p class="my-4 legalito-gold">Legalito Smart Enquiries</p>
            <h3 class="display-6">Shining a light into the black hole of coneyancing</h3>
        </div>
        <div class="col-lg-12 col-xxl-8 mx-auto">
            <p class="font-serif lead mb-5 text-light">
                For decades, lawyers have been struggling with the management of pre-contract enquiries. It is a painful and
                opaque process in which everyone involved in the transaction struggles to understand progress, resulting in
                frustration and confusion.
                <br><br>
                It is no wonder it has been dubbed “The black hole of conveyancing”.
            </p>
            <a href="{{ route('product') }}" class="legalito-button">Try it now - for free</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-lg-between align-items-center gy-4 pb-5 pb-lg-6">
            <div class="col-lg-10 order-lg-2">
                <figure class="img-overlay mb-0">
                    <img src="{{ asset('img/product_smart.png') }}" alt="Legalito" class="img-thumbnail" width="2000">
                </figure>
            </div>
            <div class="col order-lg-1">
            </div>
        </div>
    </div>

    <div class="container pb-5 mb-4">
        <div class="row">
            <h5 class="text-center mb-4 col-lg-8 mx-auto">Bold solutions in a simple system</h5>
            <p class="lead mb-5 col-lg-8 mx-auto text-center">Smart enquiries was engineered to address key problems faced.
                Our innovated platform
                streamlines communicaiton, increases productivity and decreases effort-duplication.</p>
        </div>
        <div class="row gy-4">
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise"><img
                            src="{{ asset('img/relevant_enquiries.png') }}" alt="Legalito Solutions"></cite>
                    <span class="small" style="font-family: PlayfairDisplay; font-size: 18px">Relevant Enquiries</span>
                    <p class="small lead mt-3" style="font-size: 14px">Recommends enquiries relevant to the property type –
                        reduces the number of enquiries that cause such frustration amongst lawyers today</p>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-4 h5 fst-normal mb-1 display-6 legalito-expertise"><img
                            src="{{ asset('img/smart_response.png') }}" alt="Legalito Solutions"></cite>
                    <span class="small" style="font-family: PlayfairDisplay; font-size: 18px">Smart Responses</span>
                    <p class="small lead mt-3" style="font-size: 14px">Learns from responses to previous enquiries for
                        similar property types to give suggested answers to enquiries that have previously been asked</p>

                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise"><img
                            src="{{ asset('img/enquiry_libraries.png') }}" alt="Legalito Solutions"></cite>
                    <span class="small" style="font-family: PlayfairDisplay; font-size: 18px">Enquiry Libraries</span>
                    <p class="small lead mt-3" style="font-size: 14px">Lawyers can create their own favourite sets of
                        enquiries for different property types, streamlining the process and reducing learning times for new
                        lawyers</p>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="bg-black text-light text-center py-5" style="background: #052336">
        <div class="container my-3 py-3">
            <div class="row justify-content-lg-between align-items-center text-left gy-4 pb-5 pb-lg-6">
                <div class="col-lg-6">
                    <figure class="img-overlay mb-0">
                        <img src="{{ asset('img/product_designed_for_you.png') }}" alt="Who are We" class="img-thumbnail"
                            width="800" height="550">
                    </figure>
                </div>
                <div class="col-lg-5">
                    <small class="my-4 legalito-gold">Designed for you…</small>
                    <h4 class="fw-normal">For teams of any size</h4>
                    <small class="fw-light text-light">Designing software that property lawyers actually want to use is not
                        straightforward. The developers have been creating innovative solutions for over 15 years that are
                        the
                        envy of other firms..</small>
                </div>
            </div>
        </div>


        <div class="container my-4">
            <div class="row justify-content-lg-between align-items-center text-left gy-4 pb-5 pb-lg-6">
                <div class="col-lg-6 order-lg-2">
                    <figure class="img-overlay mb-0">
                        <img src="{{ asset('img/product_when_you_need_it.png') }}" alt="Legalito" class="img-thumbnail"
                            width="800" height="550">
                    </figure>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <small class="my-3 legalito-gold">… when you need it</small>
                    <h4 class="fw-normal">Pay as you go</h4>
                    <small class="fw-light text-light">All these features are available for a single monthly subscription
                        per lawyer - though users are only charged for months in which they use the platform. There is no limit on
                        how many cases it can be used with.</small>
                </div>
            </div>
        </div>
    </div>

    @include('components.product-pricing')

    <div class="bg-black text-light text-center" style="background: #052336">
        <div class="container py-6 py-md-6 pb-5">
            <div class="row align-items-center">
                <div class="col-lg-9 mx-auto">
                    <p class="lead mb-3 legalito-gold">This is genuine innovation</p>
                    <h5 class="font-normal">Want to bring change to the conveyancing process?</h5>
                    <p class="lead mb-5">We know change will only come from solving the problems that are causing lawyers
                        the
                        biggest challenges today. Be part of the revolution - sign up and start making a difference.</p>
                    <a href="{{ route('product') }}" class="legalito-button">Sign Up Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
