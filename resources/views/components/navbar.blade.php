<header>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" aria-label="Main">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand d-inline-flex text-uppercase">Legalito. <i
                    class="material-icons ms-2" aria-hidden="true">star</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons icon-2x" aria-hidden="true">menu</i>
            </button>
            <div class="collapse navbar-collapse text-uppercase" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product') }}" class="nav-link">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactUs') }}" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>