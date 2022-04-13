<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">PT Villanet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ( $title === 'Kas Kantor') ? 'active' : ''}}" aria-current="page" href="/">Kas Kantor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ( $title === 'Data Pengeluaran') ? 'active' : ''}}" href="pengeluaran">Data Pengeluaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ( $title === 'Data Karyawan') ? 'active' : ''}}" href="karyawan">Data Karyawan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>