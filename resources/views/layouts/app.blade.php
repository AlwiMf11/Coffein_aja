<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kopibro - Ngopi Sek, Ben Pikiran Luwih Adem')</title>
    <meta name="description" content="Kopibro, kedai kopi khas Jawa modern. Sak cangkir kopi, sak cerita.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kopibro.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top kopibro-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Kopibro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signature">Andalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="kopibro-footer text-center py-4">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} Kopibro. Tempat ngopi santai bareng konco.</p>
            <p class="mb-0 small">Kopi lan crita, tansah cedhak neng ati.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
