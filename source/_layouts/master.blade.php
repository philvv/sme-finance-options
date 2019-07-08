<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <!-- Importing libraries via npm -->
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <!-- Global Key Scripts -->

</head>
<body>

@include('_partials/navbar')
@yield('body')
@include('_partials/footer')

<!-- Global Scripts -->

<!-- Page scripts -->

</body>
</html>
