<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BANGOR BURGER</title>

    <!-- style font -->
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
  </head>

  <body>
    <!-- navbar start  -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Burger <span>Bangor.</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end  -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Nikmati Setiap Gigitannya</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, esse.
        </p>
        <a href="#" class="cta">Buy <span>Now!</span></a>
      </main>
    </section>

    <!-- Hero Section end -->

    <!-- menu section start-->
   
    <section id="menu" class="menu">
    <h2><span>Signature</span> Menu</h2>
      <p>Asal Layah Ape Jaen, GITU GAK DER?</p>
      <div class="row">
    <?php 
      $get = mysqli_query($koneksi,"SELECT * FROM menu ORDER BY id_menu ASC");

      while($data = mysqli_fetch_array($get)){
    ?>
      
        <div class="menu-card">
          <a href="detail-menu.php?id_menu=<?php echo $data['id_menu']?>">
            <img src="<?php echo $data['gambar'] ?>" alt="gambar" class="menu-card-img" />
            <h2 class="Menu-card-title"><?php echo $data['nama'] ?></h2>
            <p class="menu-card-price">IDR <?php echo $data['harga'] ?></p>
          </a>
        </div>

      <?php
      }
      ?>
      </div>
    </section>
 
    <!-- menu section end-->

    <!-- about section start-->
    <section id="about" class="about">
      <h2><span>About</span> Us</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/burger11.jpg" alt="About us" />
        </div>
        <div class="content">
          <h3>Why You Choice This Hamburger?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab
            harum saepe, adipisci eos quia error aliquam ut voluptas dolorem
            unde corporis ea, dignissimos assumenda vel doloremque cupiditate
            voluptates facilis blanditiis numquam distinctio sint eligendi, fuga
            est. Hic laborum incidunt quod voluptatum eius mollitia et
            architecto enim omnis. Tenetur nemo officiis excepturi ea modi
            rerum, aut quae eaque similique a perferendis dolores quibusdam?
            Magni mollitia totam dolorem autem nobis necessitatibus explicabo
            enim inventore eligendi, modi porro aliquid cumque optio libero
            molestias ut consectetur fugit architecto, repellat facere, nam
            velit ex. Eum iste ipsam dignissimos aliquam distinctio architecto
            sapiente. Ab excepturi voluptatibus molestias, nulla libero corporis
            maxime sunt quos? Maxime in nam reiciendis placeat porro, velit unde
            excepturi id praesentium debitis non nemo tempora repudiandae
            tempore vel temporibus numquam nesciunt nobis odio at voluptatem
            voluptas? Dolor molestiae, repellendus culpa explicabo fugiat illum
            eligendi error quos. Eligendi tenetur eveniet ipsa distinctio minima
            cum hic veritatis esse perspiciatis ab minus rem, impedit culpa
            assumenda! Iusto non blanditiis vero adipisci. Ipsam veniam dolor
            voluptates porro ducimus quasi sapiente, temporibus blanditiis
            ipsum, consequuntur omnis quisquam placeat architecto error sequi
            doloribus qui atque deleniti ullam! Nihil adipisci tempora corrupti
            officiis nobis animi reiciendis, impedit qui vel veniam dicta ea
            dolore id explicabo ex aspernatur sint libero est quam quasi alias
            in voluptatibus fuga. Rem rerum vitae tempora excepturi sint tempore
            mollitia odio qui, incidunt eligendi dolorem aliquam aut optio quod.
            Hic repellat et architecto voluptates illo, quas soluta. Animi autem
            reprehenderit vitae quae odit impedit illo quo numquam vel voluptate
            iste aperiam cum commodi ratione quidem, dicta aspernatur laudantium
            tenetur repellendus repellat itaque libero obcaecati exercitationem.
            Nihil adipisci, dolorem modi reiciendis quam, odit consequatur
            necessitatibus magnam repellendus incidunt quidem doloribus eaque.
            Esse, autem. Fugit magnam culpa accusantium, nisi ad expedita
            distinctio optio veritatis at, facere officiis?
          </p>
          <p>Lorem, ipsum dolor.</p>
        </div>
      </div>
    </section>

    <!-- about section end-->

    <!-- contact section start-->
    <section id="contact" class="contact">
      <h2><span>Contact</span> Person</h2>
      <p>Pinjam Dulu Seratus</p>
      <div class="row">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.556820495783!2d115.19959597361746!3d-8.638472587833562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23fa49102c7b5%3A0xe4e7229274317f2a!2sBurger%20Bangor%20Gatsu!5e0!3m2!1sid!2sid!4v1701438608441!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <form action="" method="post">
          <div class="input-groub">
            <i data-feather="users"></i>
            <input type="text" name="nama" placeholder="Nama" />
          </div>
          <div class="input-groub">
            <i data-feather="mail"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-groub">
            <i data-feather="phone"></i>
            <input type="text" name="no_tlp" placeholder="No Telp" />
          </div>
          <button type="submit" name="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <?php
        if(isset($_POST['submit'])) {
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $no_tlp = $_POST['no_tlp'];


          if($nama == '' || $no_tlp == '' || $email == ''){
            echo "<script>alert('Data Belum Lengkap')</script>";
          }else{
            $add = mysqli_query($koneksi, "INSERT INTO kontak (nama,email,no_tlp) VALUES ('$nama','$email','$no_tlp')");

            if(!$add){
              echo "<script>alert('data gagal di tambah');</script>";
            }else{
              echo "<script>alert('data berhasil di tambah');</script>";
            }
          }
      }
    ?>
    <!-- contact section end-->

    <!-- footer section start-->
    <footer>
      <div class="social">
        <a href="#"><img src="img/facebook.jpg" alt="facebook"></a>
        <a href="#"><img src="img/instagram.jpg" alt="instagram"></a>
        <a href="#"><img src="img/spacex.jpg" alt="spacex"></a>
        
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="created">
        <p>created by <a href="">Ryanganteng</a>.| &copy ; 2023</p>
      </div>
    </footer>
    <!-- footer section end-->

    <!-- icon feater -->
    <script>
      feather.replace();
    </script>

    <!-- javascrips -->
    <script src="js/script.js"></script>
  </body>
</html>
