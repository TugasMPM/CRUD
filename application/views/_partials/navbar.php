<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url() ?>">
    <div>
        <img src="https://pelajarinfo.id/wp-content/uploads/2021/06/Universitas-Diponegoro-Semarang-Logo.png" alt="Logo SiAlip" style="width: 40px; height: 40px; padding: 0px">
        SiAlip
    </div>
    </a>    

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="<?= site_url('search?keyword=PLACEHOLDER') ?>" method="get">
            <input type="search" name="keyword" style="width: 360px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Enter Username" >
            <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;margin-left:10px;"value="Cari"  href="<?= site_url('buku/cari') ?>">Search</button>
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