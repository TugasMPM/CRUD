<!DOCTYPE html>
<html lang="en">
 
<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <style>
      /* body {
          background-image: url('https://1.bp.blogspot.com/-Vc0FBbtFxII/VlRtXr1IvpI/AAAAAAAABH8/DJgtRUlxaVY/s1600/Logo%2BUndip%2B%2528Black%2Band%2BWhite%2529%2B%2528JPG%2529.jpg');
          background-repeat: no-repeat;
          background-size: contain;
          background-position: center 200px;
      } */

      body::before {
        content: "";
        background-image: url('https://1.bp.blogspot.com/-Vc0FBbtFxII/VlRtXr1IvpI/AAAAAAAABH8/DJgtRUlxaVY/s1600/Logo%2BUndip%2B%2528Black%2Band%2BWhite%2529%2B%2528JPG%2529.jpg');
        background-repeat: no-repeat;
        background-size: 17%;
        background-position: center 185px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.5; 
        z-index: -1;
      }
    </style>

</head>
 
<body class="bg">
    <?php $this->load->view('_partials/navbar.php');
    ?>
    <h1 style="margin-left: 30px; margin-top: 20px">Sistem Informasi <br> Aplikasi <br> Manajemen Pengguna</h1>
    <div class="container">
    
    </div>
    
 
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
 
</html>