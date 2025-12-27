<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= route_to('home') ?>">Sistem Informasi Rumah Sakit</a> <!-- route_to('home') = penamaan route -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= route_to('pasien') ?>">Pasien</a> <!-- route_to('pasien') = penamaan route -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= route_to('dokter') ?>">Dokter</a> <!-- route_to('dokter') = penamaan route -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= route_to('resep') ?>">Resep</a> <!-- route_to('resep') = penamaan route -->
        </li>
      </ul>
    </div>
  </div>
</nav>