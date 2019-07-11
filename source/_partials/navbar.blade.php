<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-primary" href="#"><img
                    src="https://bm-media.netlify.com/public/spurta/assets/images/spurta-logo-2.png" width="150"
                    height="50"
                    alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item {{ $page->active('/') }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $page->active('about') }}">
                    <a class="nav-link" href="/about/">About</a>
                </li>
                <li class="nav-item {{ $page->active('dashboard') }}">
                    <a class="nav-link" href="/#loans">Funding Solutions</a>
                </li>
                <li class="nav-item {{ $page->active('dashboard') }}">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="ml-2">
                    <a class="btn btn-success mobile-block" href="{{ $page->quoteUrl }}" role="button">Get Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
