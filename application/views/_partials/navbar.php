<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url() ?>">SiAlif</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link" href="<?= site_url('buku/list') ?>">Daftar</a>
        </li>

        <li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link" href="<?= site_url('buku/add') ?>">Tambah</a>
        </li>
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link" href="<?= site_url('buku/cari') ?>">Cari</a> 
		</li>
    </ul>

</nav>