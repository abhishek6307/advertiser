<!DOCTYPE html>
<html>
<head>
    <title>Advertiser Platform</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto"></ul>
        <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ads">Ads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/locations">Locations</a>
                </li>
            </ul>
        </span>
    </div>
</nav>
    @yield('content')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
