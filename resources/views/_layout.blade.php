<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSEBIDO_Laravel-Project</title>
</head>

<body>
    <nav>
        <ul style="all: unset">
            <li>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>