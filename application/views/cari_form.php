<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<body class="bg">
    <header>
        <?php $this->load->view('_partials/navbar.php'); ?>
    </header>

    <div class="container" style="max-width: 1920px; padding-top:20px; text-align: center;">
		<h1 style="color: #333;">Cari User</h1>
        <p style="color: #666;">Tuliskan kata kunci  yang ingin kamu cari</p>
        <form action="" method="get" style="display: flex; align-items: center; justify-content: center;">
            <input type="search" name="keyword" style="width: 360px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Enter keyword" value="<?= html_escape($keyword) ?>" required maxlength="32">
            <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;margin-left:10px;"value="Cari">Search</button>
        </form>
		
        <?php if ($search_result) : ?>
				<div class="search-results" style="padding-top: 20px;align-items: left;">
					<table class="table" style="text-align: left;">					
						<thead>
						<tr>	<th>Nama</th>
								<th>Username</th>
								<th>Password</th>
								<th>Level</th>
								<th>Action</th>	</tr>
					</thead>
					<tbody>
					<?php foreach ($search_result as $buku) : ?>
						<tr>
					<td>
						<?php echo $buku->nama_alif ?>
					</td>
					<td>
						<?php echo $buku->username_alif ?>
					</td>
					<td>
						<?php echo md5(sha1($buku->password_alif)) ?>
					</td>
					<td>
						<?php echo $buku->level_alif ?>
					</td>
					<!-- <td><a href=edit/<?php echo $buku->id_alif ?>>Edit</a>||<a href=delete/<?php echo $buku->id_alif ?>>Hapus</a></td> -->
					<td>
						<a href=edit/<?php echo $buku->id_alif ?>>
							<button type="button" class="btn btn-warning">
							Edit
							</button> 
						</a>
							
						<a href=delete/<?php echo $buku->id_alif ?>>
						<button type="button" class="btn btn-danger">
							Hapus</button>
						</a>
						
					</td>

				</tr>
                <?php endforeach ?>
				</tbody>
            </div>
        <?php else : ?>
            <?php if ($keyword) : ?>
                <div class="no-results" style="margin-top: 20px;">
                    <h2 style="color: #ff0000;">No results found</h2>
                    <p style="color: #666;">Try a different keyword.</p>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
