<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>
	<h1 style="text-align: center; margin: 40px 0; font-size: 36px;font-family:sans-serif;">Data User</h2>    <div style="width:95%; margin: 0 auto;">
	<h3 style="text-align: center; margin: 20px 0; font-size: 18px; font-family:sans-serif; color:grey">Berikut adalah User yang Sudah Terdaftar</h3>    <div style="width:95%; margin: 0 auto;">
	<table class="table" style="align-items: center; justify-content: center; text-align: center;">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $buku) : ?>
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
                        <td>
                            <a href=edit/<?php echo $buku->id_alif ?>>
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>
                            <a href=delete/<?php echo $buku->id_alif ?>>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>
