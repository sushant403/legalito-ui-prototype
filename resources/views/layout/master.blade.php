<!DOCTYPE HTML>
<html lang="en">
<head>
    <x-header></x-header>
</head>
<body>
    <a href="#main" class="visually-hidden-focusable">Skip to site</a>
    <x-navbar></x-navbar>
    <main id="main">
        <!-- Header -->
        <div class="container py-5">
            <div class="col-xxl-10">
                <h1 class="display-1">Legalito</h1>
                <div class="border border-2 border-light w-25 my-4"></div>
            </div>
            <div class="col-lg-10 col-xxl-8">
                <p class="font-serif lead mb-4 text-light">
                    We deliver software that makes conveyancing more efficient.
                    Years of experience enables us to solve the tricky issues first.</p>
                <a href="https://themes.getbootstrap.com/product/focus/" class="btn btn-primary">Buy now</a>
            </div>
        </div>

        <!-- Projects -->
        <div class="container py-4">
            <ul class="row list-unstyled gy-4">
                <li class="col-md-6">
                    <a href="portfolio-1.html" class="d-inline-block">
                        <figure>
                            <div class="img-overlay mb-3">
                                <img src="{{ asset('img/portfolio-1.jpg') }}" alt="" class="img-thumbnail"
                                    width="800" height="550">
                                <div class="img-hover">
                                    <div class="img-text">View Page</div>
                                </div>
                            </div>
                            <figcaption class="h4 fw-normal text-center">Architecture</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="col-md-6">
                    <a href="portfolio-2.html" class="d-inline-block">
                        <figure>
                            <div class="img-overlay mb-3">
                                <img src="{{ asset('img/portfolio-2.jpg') }}" alt="" class="img-thumbnail"
                                    width="800" height="550">
                                <div class="img-hover">
                                    <div class="img-text">View Page</div>
                                </div>
                            </div>
                            <figcaption class="h4 fw-normal text-center">Interior Design</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="col-md-6">
                    <a href="portfolio-3.html" class="d-inline-block">
                        <figure>
                            <div class="img-overlay mb-3">
                                <img src="{{ asset('img/portfolio-3.jpg') }}" alt="" class="img-thumbnail"
                                    width="800" height="550">
                                <div class="img-hover">
                                    <div class="img-text">View Page</div>
                                </div>
                            </div>
                            <figcaption class="h4 fw-normal text-center">Photography</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="col-md-6">
                    <a href="portfolio-4.html" class="d-inline-block">
                        <figure>
                            <div class="img-overlay mb-3">
                                <img src="{{ asset('img/portfolio-4.jpg') }}" alt="" class="img-thumbnail"
                                    width="800" height="550">
                                <div class="img-hover">
                                    <div class="img-text">View Page</div>
                                </div>
                            </div>
                            <figcaption class="h4 fw-normal text-center">Web Design</figcaption>
                        </figure>
                    </a>
                </li>
            </ul>
            <div class="text-center my-4 my-md-5">
                <a href="pages.html" class="btn btn-outline-light">View all pages</a>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container py-5 py-md-6">
                <h2 class="text-center mb-5">What people are saying…</h2>
                <div class="row gy-4">
                    <div class="col-md">
                        <blockquote class="text-center">
                            <img src="{{ asset('img/tim-schoch.jpg') }}" class="avatar avatar-lg mb-3"
                                alt="Tim Schoch">
                            <cite class="d-block h5 fst-normal mb-1">Tim Schoch</cite>
                            <span class="small text-muted text-uppercase">Designer</span>
                            <p class="quote text-muted mt-3 mb-0">Legalito theme is great. It really saves me time and
                                effort. Thank you so much for your help</p>
                        </blockquote>
                    </div>
                    <div class="col-md">
                        <blockquote class="text-center">
                            <img src="{{ asset('img/olive-mathews.jpg') }}" class="avatar avatar-lg mb-3"
                                alt="Olive Mathews">
                            <cite class="d-block h5 fst-normal mb-1">Olive Mathews</cite>
                            <span class="small text-muted text-uppercase">Photographer</span>
                            <p class="quote text-muted mt-3 mb-0">Legalito is great. I will refer everyone I know. This
                                theme is worth much more than I paid. I'm loving it.</p>
                        </blockquote>
                    </div>
                    <div class="col-md">
                        <blockquote class="text-center">
                            <img src="{{ asset('img/malan-alankara.jpg') }}" class="avatar avatar-lg mb-3"
                                alt="Malan Alankara">
                            <cite class="d-block h5 fst-normal mb-1">Malan Alankara</cite>
                            <span class="small text-muted text-uppercase">Architect</span>
                            <p class="quote text-muted mt-3 mb-0">Not able to tell you how happy I am with Focus. It's
                                exactly what I've been looking for.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5 py-md-6">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-8">
                    <h2 class="text-center mb-5">Frequently asked questions</h2>
                    <div class="accordion" id="accordionFaq">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed fs-4 fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    Do I need to know how to code to use this theme ?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Yes, you should have some familiarity with HTML and CSS. And to use the development
                                    tools, you need basic knowledge of the terminal/command line.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fs-4 fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Can I use this theme for my clients?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Yes, the Bootstrap Themes license allows you to use the product for personal or for
                                    a client.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fs-4 fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How do I get help with the theme?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Support for the theme is given for 6 months after you purchase the theme and is
                                    specific to questions around functionality, bugs, and basic implementation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container py-5 py-md-6">
                <h2 class="text-center mb-5">Choose the license that suits your needs</h2>
                <div class="row gy-4">
                    <div class="col-md">
                        <div class="card text-center">
                            <div class="card-header bg-light border-bottom-0 py-4">
                                <h3 class="fw-normal mb-2">Standard</h3>
                                <div class="d-flex justify-content-center">
                                    <span class="fs-4 mt-1">$</span>
                                    <span class="fs-2 fw-bold">49</span>
                                </div>
                                <span class="text-dark">Single Site</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-muted">
                                    <li class="py-2">Use on one site</li>
                                    <li class="py-2">Use for personal or a client</li>
                                    <li class="py-2">Technical support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center">
                            <div class="card-header bg-primary border-bottom-0 py-4">
                                <h3 class="fw-normal mb-2">Multisite</h3>
                                <div class="d-flex justify-content-center">
                                    <span class="fs-4 mt-1">$</span>
                                    <span class="fs-2 fw-bold">149</span>
                                </div>
                                <span class="text-dark">Unlimited Sites</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-muted">
                                    <li class="py-2">Use on unlimited sites</li>
                                    <li class="py-2">Use for personal or a client</li>
                                    <li class="py-2">Technical support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center">
                            <div class="card-header bg-light border-bottom-0 py-4">
                                <h3 class="fw-normal mb-2">Extended</h3>
                                <div class="d-flex justify-content-center">
                                    <span class="fs-4 mt-1">$</span>
                                    <span class="fs-2 fw-bold">490</span>
                                </div>
                                <span class="text-dark">For paying users</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-muted">
                                    <li class="py-2">Use on one site</li>
                                    <li class="py-2">Paying users allowed</li>
                                    <li class="py-2">Technical support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary text-dark text-center">
            <div class="container py-5 py-md-6">
                <h2 class="font-sans">Legalito is mobile-ready, flexible, and cross-browser</h2>
                <p class="lead mb-4">Impress your audiences with memorable pages that showcase your works</p>
                <a href="https://themes.getbootstrap.com/product/focus/" class="btn btn-outline-dark">Buy now</a>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>
