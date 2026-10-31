<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteraHub - Sistem Manajemen Perpustakaan Digital</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%);
            padding: 0.85rem 0;
            box-shadow: 0 4px 20px -2px rgba(79, 70, 229, 0.25);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.5px;
        }

        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85) !important;
            padding: 0.5rem 0.9rem !important;
            border-radius: 8px;
            transition: all 0.2s ease;
            margin: 0 2px;
        }

        .nav-link:hover {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-1px);
        }

        .nav-link.active {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.25);
            font-weight: 600;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            border-radius: 12px;
        }

        .dropdown-item {
            font-size: 0.9rem;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            
            <a class="navbar-brand fw-bold text-white text-decoration-none" href="{{ route('buku.index') }}">
                Litera<span class="text-warning">Hub</span>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('buku.*') ? 'active' : '' }}" href="{{ route('buku.index') }}">
                            <i class="bi bi-journal-bookmark me-1"></i> Katalog & Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#">
                            <i class="bi bi-people me-1"></i> Anggota & Kartu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#">
                            <i class="bi bi-truck me-1"></i> Penerbit & Supplier
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#">
                            <i class="bi bi-shop me-1"></i> Fasilitas & Area
                        </a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <div class="dropdown">
                        <button class="btn btn-outline-light btn-sm dropdown-toggle d-flex align-items-center gap-2 rounded-pill px-3 py-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-6"></i>
                            <span>Kelompok 1</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-2 mt-2">
                            <li><span class="dropdown-header">Navigasi Modul A</span></li>
                            <li><a class="dropdown-item" href="{{ route('buku.index') }}"><i class="bi bi-grid me-2"></i>Daftar Buku</a></li>
                            <li><a class="dropdown-item" href="{{ route('buku.create') }}"><i class="bi bi-plus-circle me-2"></i>Tambah Buku</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
   
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container text-center text-muted small">
            &copy; {{ date('Y') }} <strong>LiteraHub</strong> — Sistem Manajemen Perpustakaan Digital - Kelompok 1.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>