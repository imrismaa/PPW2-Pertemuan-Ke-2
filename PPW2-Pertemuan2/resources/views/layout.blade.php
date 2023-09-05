<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/exampleabout">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        &copy; {{ date('Y') }} My Website
    </footer>
</body>
</html>
