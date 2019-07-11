<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>


    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Importing libraries via npm -->
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <!-- Global Key Scripts -->

</head>
<body>

@include('_partials/navbar')
@yield('body')
<section id="quote-footer">
    <div class="container-fluid p-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8"><h1>Find your business financing solution today</h1></div>
                <div class="col-12 col-md-4"><a class="btn btn-primary btn-lg btn-block"
                                                href="{{ $page->quoteUrl }}"
                                                role="button">Get Your Free
                        Quote</a></div>
            </div>
        </div>
    </div>
</section>
@include('_partials/footer')

<!-- Global Scripts -->
<script src="/scripts/index.js"></script>
<!-- Page scripts -->

</body>
</html>
