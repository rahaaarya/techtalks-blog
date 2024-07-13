<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TechTalks | {{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
  <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>
  @include('partials.navbar')

    <div class="container mt-5 py-5">
        @yield('container')
    </div>

    @include('partials.footer')
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>