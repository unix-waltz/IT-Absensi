<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <img src="assets/f.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="index.php">&nbsp; IT-Club</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Absen.php">Absen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Kas.php">Uang Kas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="riwayat.php">Riwayat</a>
        </li>
      </ul>
      <form class="d-flex" action="Search.php" method="get">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" name="sbtn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>