<header>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" aria-label="Main">
        <div class="container">
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