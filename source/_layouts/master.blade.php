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
@include('_partials/footer')

<!-- Global Scripts -->
<script src="/scripts/index.js"></script>
<!-- Page scripts -->

</body>
</html>
