<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dataBaseName = "covit_shop";
 
    $con = new mysqli($serverName, $userName, $password, $dataBaseName);

    $sql = "SELECT * FROM `shop`";

    $result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style-shampoos.css">
    <script src="https://kit.fontawesome.com/140b8b6bc9.js" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
</head>
<body>
    <div class="container-fluid bg p-0 m-0 ">
        <div class="row m-0">
            <div class="col-3 d-flex align-items-center">
                <img src="../assets/logo.png" alt="logo" class="img-fluid ms-3" style="width: 4vw;">
                <p class="h4">Online Shop</p>
            </div>
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item m-4 h6"><a href="/">Home</a></li>
                    <li class="nav-item m-4 h6"><a href="/shampoo.php">Shampoos</a></li>
                    <li class="nav-item m-4 h6"><a href="/nailpolish.php">Nail Polish</a></li>
                    <li class="nav-item m-4 h6"><a href="/lipstick.php">Lipsticks</a></li>
                    <li class="nav-item m-4 h6"><a href="/watches.php">Watches</a></li>
                </ul>
            </div>
            <div class="col-3">
                <ul class="nav justify-content-end me-5 pe-3 mt-3">
                    <li class="nav-item py-2 px-3 cart"><i class="fa-solid fa-cart-shopping" style="color: #ffffff; font-size: 16px;"></i></li>
                </ul>
            </div>
        </div>
        <div>
        <img src="../assets/bg_home.jpg" style="position: absolute;" class="img-fluid">
        <div class="welcome p-0 m-0 display-3" style="position: relative;">
            <div class="div">Welcome</div> 
                <div class="div ps-3"> 
                  <span>to our Online Shop</span>
                </div>
        </div>
        </div>

    <?php
        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){
            echo '<div class="row m-0 mb-3">
            <div class="col-7 box">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner carousel">
                      <div class="carousel-item active item">
                        <img src="../assets/shampoo/1.jpg" class="d-block h-50 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item item">
                        <img src="../assets/shampoo/2.jpg" class="d-block h-50 img-fluid" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col mt-5">
            <div class="row box-2">
            <div class="col">
            <div class="header h6 m-0">
            About Product
            </div>
                        <div class="inner">';
                            echo '<div class="text-dark-emphasis my-2">'.$row['p_category'].' | '.$row['p_size'].'</div>';
                            
                            echo ' <div class="display-6 fw-bold d-flex">'.$row['p_name'].'<div style="margin-left: auto; font-size: 30px;">$</div><div class="me-5">'.$row['p_price'].'</div> </div>';
                            echo'<div class="description my-3">'.$row['p_description'].'</div>';
                            echo'<div class="size mb-2"><span class="h6">Size:</span><span class="ps-2">'.$row['p_size'].'</span></div>';
                            echo'<div class="availability mb-2"><span class="h6">Availability:</span><span class="ps-2">'.$row['p_availability'].'</span></div>';
                            echo'<div class="quantity mb-3"><span class="h6">Quantity:</span><span class="ps-2">'.$row['p_quantity'].'</span></div>';
                            echo'<button class="btn btn-dark mb-1 mt-1" style="width: 200px;">Add To Cart </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>';
            }
        }
    ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
    </html> 