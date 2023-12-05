<?php
include 'koneksi.php';

$id = $_GET['id_menu'];
$data = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu='".$id."'");
$get = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- icon js -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- go to css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Detail menu <?= $get['nama'] ?></title>
</head>
<body>

<div class="core-contain">
    <button class="back" onclick="window.history.back();">Kembali</button>
    <div class="img-detail">
        <img src="<?php echo $get['gambar'];?>" alt="">
    </div>
    <div class="detail">
        <h1><?php echo $get['nama'];?></h1>
        <h2><?php echo $get['sub_detail'];?></h2>
        <p><?php echo $get['detail'];?></p>
        <div class="price">
            <h2>Rp. <?php echo $get['harga'];?></h2>
        </div>
    </div>
</div>
    
</body>
</html>
