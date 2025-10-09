<nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm">
<div class="container">
<a class="navbar-brand fw-bold" href="{{ route('users.index') }}">PWL - Modul 4</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navmenu">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Daftar Pengguna</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}">Buat Pengguna</a></li>
</ul>
</div>
</div>
</nav>