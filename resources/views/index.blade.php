@extends('layout.master')
@section('title', 'Home - Legalito')
@section('description')

@section('content')

    <style>
        .row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display:         flex;
    flex-wrap: wrap;
    }
    .row > [class*='col-'] {
    display: flex;
    flex-direction: column;
    }
    </style>

    <div class="container py-5">
        <div class="col-xxl-10">
            <p class="my-4 legalito-gold">We know conveyancing.</p>
            <h1 class="display-1">Legalito.</h1>
        </div>
        <div class="col-lg-10 col-xxl-8">
            <p class="font-serif lead mb-4 text-light">
                Introducing genuinely innovative technology is essential for the future of conveyancing. It requires the
                rare combination of experience and expertise. Legalito is the first provider that specialises in giving
                property lawyers intelligent software that will actually improve the way they work.</p>
        </div>
    </div>

    <div class="container my-4">
        <div class="row justify-content-lg-between align-items-center gy-4 pb-5 pb-lg-6">
            <div class="col-lg-10 order-lg-2">
                <figure class="img-overlay mb-0">
                    <img src="{{ asset('img/home-legalito_2.png') }}" alt="Legalito" class="img-thumbnail"
                        width="auto">
                
                </figure>
            </div>
            <div class="col order-lg-1">
                {{-- <img src="{{ asset('img/arrow-down.png') }}" width="60"> --}}
            </div>
        </div>
    </div>


    <div class="bg-black text-light text-center">
        <div class="container py-5 py-md-5">
            <p class="lead mb-4 legalito-gold">Smart people - Smart technology</p>
            <h1 class="col-lg-8 mx-auto" style="line-height: 3rem; font-weight:400">We've got years of experience building
                software that makes the lives of conveyancers less stressful.</h1>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container py-5 py-md-6">
            <h4 class="text-center mb-5">Designed from years of experience</h4>
            <div class="row gy-4 row-eq-height">
                <div class="col-md">
                    <div class="card border-0 has-bg-img bg-img-legalito text-center" style="font-size:smaller;opacity: 0.45;">
                        <div class="card-img-overlay text-light card-img-ovelay-disabled">
                            <div class="card-header border-bottom-0 py-4">
                                <small class="lead legalito-gold pt-5" style="font-size: 0.75rem">&nbsp;&nbsp;&nbsp; Never miss another task again &nbsp;&nbsp;&nbsp;</small>
                                <h3 class="fw-normal py-2 mb-2 text-light">Smart Checklists</h3>
                                <span class="text-light">Ensures critical conveyancing tasks are always completed.</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-muted">
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Relevant Enquiry</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Enquiries relevant to property
                                            types</span>
                                    </li>
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Personalized Versions</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Adjust to use your own checklist items</span>
                                    </li>
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Dynamic Checklists</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Automatically adjusts to reflect case changes.</span>
                                    </li>
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Pre-set Templates</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Over 500 tasks provided as standard</span>
                                    </li>
                                </ul>
                                <div class="pb-4">
                                    <a href="{{ route('product') }}" class="legalito-button-outline mb-3"
                                        style="padding: 16px 110px">CTA</a>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 has-bg-img bg-img-legalito text-center" style="font-size:smaller">
                        <div class="card-img-overlay text-light">
                            <div class="card-header border-bottom-0 py-4">
                                <small class="lead legalito-gold pt-5" style="font-size: 0.75rem">Streamlining pre-contract
                                    enquiries</small>
                                <h3 class="fw-normal py-2 mb-2 text-light">Smart Enquiries</h3>
                                <span class="text-light">Removes the guesswork and stress from enquiry
                                    handling.</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-muted">
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Relevant Enquiry</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Enquiries relevant to property
                                            types</span>
                                    </li>
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Smart Response</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Automated intelligent
                                            answers</span>
                                    </li>
                                    <li class="py-2 text-light" style="text-align: left">
                                        <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                        <strong>Personal knowledge base</strong> <br>
                                        <span style="font-size: smaller;margin-left:1.8rem">Use your own enquiries</span>
                                    </li>
                                </ul>
                                <div class="pb-4" style="padding-bottom: 70px !important">
                                    <a href="{{ route('product') }}" class="legalito-button-outline mb-3"
                                        style="padding: 16px 110px">Learn More</a>
                                    <br><br><br>
                                    <a href="{{ route('product') }}" class="legalito-button" style="padding: 16px 80px">Try it
                                        now - for free</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                        <div class="card border-0 has-bg-img bg-img-legalito text-center" style="font-size:smaller;opacity: 0.45;">
                            <div class="card-img-overlay text-light card-img-ovelay-disabled">
                                <div class="card-header border-bottom-0 py-4">
                                    <small class="lead legalito-gold pt-5" style="font-size: 0.75rem">Manage cases allocation effectively</small>
                                    <h3 class="fw-normal py-2 mb-2 text-light">Smart Matters</h3>
                                    <span class="text-light">Effectively overload by allocating the right number of cases at the right time.</span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-muted">
                                        <li class="py-2 text-light" style="text-align: left">
                                            <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                            <strong>Relevant Enquiry</strong> <br>
                                            <span style="font-size: smaller;margin-left:1.8rem">Enquiries relevant to property
                                                types</span>
                                        </li>
                                        <li class="py-2 text-light" style="text-align: left">
                                            <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                            <strong>Case task analysis</strong> <br>
                                            <span style="font-size: smaller;margin-left:1.8rem">Use with smart Checklists to prompt next action</span>
                                        </li>
                                        <li class="py-2 text-light" style="text-align: left">
                                            <i class="material-icons legalito-check ms-2" aria-hidden="true">check</i>
                                            <strong>CMS integration</strong> <br>
                                            <span style="font-size: smaller;margin-left:1.8rem">Integrates with leading case management systems</span>
                                        </li>
                                    </ul>
                                    <div class="pb-4" style="padding-bottom: 170px !important">
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3 py-3">
        <div class="row justify-content-lg-between align-items-center gy-4 pb-5 pb-lg-6">
            <div class="col-lg-6">
                    <figure class="img-overlay mb-0">
                        <img src="{{ asset('img/whoarewe_legalito_2.png') }}" alt="Who are We" class="img-thumbnail"
                            width="800" height="550">
                        
                    </figure>
            </div>
            <div class="col-lg-5">
                <small class="my-4 legalito-gold">Who are we</small>
                <h4 class="fw-normal">We know conveyancing</h4>
                <small class="fw-light text-light">Designing software that conveyancers actually want to use is not
                    straightforward. The developers have been creating innovative solutions for over 15 years that are the
                    envy of other firms. They have won multiple awards for their brilliant technology and their thorough
                    grasp of the complexities of the conveyancing process. They know the issues involved and that the
                    one-size fits-all approach simply does not apply to property transactions.</small>
            </div>
        </div>
    </div>


    <div class="container py-5 py-md-5">
        <h5 class="text-center mb-4">Our expertise</h5>
        <div class="row gy-4">
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise">~ 500 000</cite>
                    <span class="small">Enquiries raised</span>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise">~ 450 000</cite>
                    <span class="small">Enquiries answered</span>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise">~ 25 000</cite>
                    <span class="small">Cases comleted</span>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="text-center">
                    <cite class="d-block mb-3 h5 fst-normal mb-1 display-6 legalito-expertise">~ 2000</cite>
                    <span class="small">Law firms worked with</span>
                </blockquote>
            </div>
        </div>
    </div>


    <div class="container my-4">
        <div class="row justify-content-lg-between align-items-center gy-4 pb-5 pb-lg-6">
            <div class="col-lg-6 order-lg-2">
                    <figure class="img-overlay mb-0">
                        <img src="{{ asset('img/whyus_legalito_2.png') }}" alt="Legalito" class="img-thumbnail"
                            width="800" height="550">
                        
                    </figure>
            </div>
            <div class="col-lg-5 order-lg-1">
                <small class="my-3 legalito-gold">Why us?</small>
                <h4 class="fw-normal">We know conveyancing</h4>
                <small class="fw-light text-light">Designing software that property lawyers actually want to use is not
                    straightforward. The developers have been creating innovative solutions for over 15 years that are the
                    envy of other firms. They have won multiple awards for their brilliant technology and their thorough
                    grasp of the complexities of the conveyancing process. They know the issues involved and that the
                    one-size fits-all approach simply does not apply to property transactions.</small>
            </div>
        </div>
    </div>

    <div class="bg-black text-light text-center" style="background: #052336">
        <div class="container py-6 py-md-6 pb-5">
            <div class="row align-items-center">
                <div class="col-lg-9 mx-auto">
                    <p class="lead mb-3 legalito-gold">This is genuine innovation</p>
                    <h5 class="font-normal">Want to bring change to the conveyancing process?</h5>
                    <p class="lead mb-5">We know change will only come from solving the problems that are causing lawyers
                        the
                        biggest challenges today. Be part of the revolution - sign up and start making a difference.</p>
                    <a href="{{ route('product') }}" class="legalito-button shortened">Sign Up Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
