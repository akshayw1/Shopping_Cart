<?php
session_start();


if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}


require 'function.php';


$siswa = query("SELECT * FROM siswa ORDER BY nis DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    
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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewproduct.php">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">All Added Products</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="addData.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Add Product</a>
                
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
                                            <div class="description-prod">
                                            

<a href="ubah.php?nis=<?= $row['nis']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Edit Product</a> 

<a href="hapus.php?nis=<?= $row['nis']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['nama']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;Delete Product</a>
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
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Fungsi Table
            $('#data').DataTable();
            // Fungsi Table

            // Fungsi Detail
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
            // Fungsi Detail
        });
    </script>
</body>

</html>