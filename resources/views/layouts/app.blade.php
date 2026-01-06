<!DOCTYPE html>
<html>
<head>
    <title>Pesantren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">PESANTREN</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="/tatatertib">Tata Tertib</a></li>
            <li class="nav-item"><a class="nav-link" href="/santri/form">Pendaftaran</a></li>
            <li class="nav-item"><a class="nav-link" href="/santri/daftar">Daftar Santri</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
