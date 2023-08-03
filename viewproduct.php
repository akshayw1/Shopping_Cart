<?php
session_start();





require 'function.php';


$siswa = query("SELECT * FROM siswa ORDER BY nis DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https:
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https:
    <!-- Data Tables -->
    <link rel="stylesheet" href="https:
    <link rel="stylesheet" href="https:
    <!-- Font Google -->
    <link rel="preconnect" href="https:
    <link href="https:
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">


    <title>Shopping Cart</title>
    <style>
        body{
  font-family: 'Muli', sans-serif;
  background: #030a25;;
  color: #fff;

}

</style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">Shopping Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewproduct.php">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">All Products</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="index.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;To Add Product  (Click Here)</a>
                
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
            <div class="shell">
                        <div class="container">
                            <div class="row">

                <?php $no = 1;
               ?>
                <?php foreach ($siswa as $row) : ?>
                    <?php
               $productimage =$row['gambar'];
               ?>
                    
  
                                <div class="col-md-3">
                                    <div class="wsk-cp-product">
                                        <div class="wsk-cp-img">
                                       
                                        <img src=<?= "img/$productimage"; ?> width="50%">
                                        </div>
                                        <div class="wsk-cp-text">
                                            <div class="category">
                                                <span><?= $row['nama']; ?></span>
                                            </div>
                                            <div class="title-product">
                                                <h3><?= $row['tmpt_Lahir']; ?></h3>
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>


 
        <?php endforeach; ?>
        </div>

</div>
</div>
</div>
        </div>
    </div>
    </div>
    <!-- Close Container -->

    <!-- Modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="detail">Detail Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="detail-siswa">
                </div>
            </div>
        </div>
    </div>
    <!-- Close Modal Detail Data -->

    <!-- Footer -->
    <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="widget1">
                            <div class="logo">
                               <h3> <b>SHOPPING CART</b> </h3>
                            </div>
                            <p>
                            Online Shopping Site for Fashion & Lifestyle in India. India's Fashion Expert brings you a variety of footwear, Clothing, Accessories and lifestyle products ...
                            </p>
                            <div class="socialLinks">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
           
                    <div class="col-sm-6 col-lg-4">
                        <div class="widget3">
                            <h5>
                                Quick Links
                            </h5>
                            <ul>
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        about
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        contact
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="widget4">
                            <h5>
                                Our Category
                            </h5>
                            <ul>
                                <li>
                                    <a href="#">
                                        Womens 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Mens
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Toys
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyRightArea">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p>&copy; Copyright All rights reserved 2019.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> 
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https:

    <!-- Data Tables -->
    <script src="https:
    <script src="https:
    <script src="https:

    <script>
        $(document).ready(function() {
            
            $('#data').DataTable();
            

            
            $('.detail').click(function() {
                var dataSiswa = $(this).attr("data-id");
                $.ajax({
                    url: "detail.php",
                    method: "post",
                    data: {
                        dataSiswa,
                        dataSiswa
                    },
                    success: function(data) {
                        $('#detail-siswa').html(data);
                        $('#detail').modal("show");
                    }
                });
            });
            
        });
    </script>
</body>

</html>