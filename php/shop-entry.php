<?php
    
   $serverName = "localhost";
   $userName = "root";
   $password = "";
   $dataBaseName = "covit_shop";

   $con = new mysqli($serverName, $userName, $password, $dataBaseName);

   if(isset($_POST['p_name'])){
        $p_name=$_POST['p_name'];
        $p_category=$_POST['p_category'];
        $p_price=$_POST['p_price'];
        $p_size=$_POST['p_size'];
        $p_availability=$_POST['p_availability'];
        $p_quantity=$_POST['p_quantity'];
        $p_description=$_POST['p_description'];
        // $p_img=$_POST['p_img'];

        $sql = "INSERT INTO shop (`p_name`,`p_category`,`p_price`,`p_size`,`p_availability`,`p_quantity`,`p_description`) VALUES ('$p_name','$p_category',$p_price,'$p_size','$p_availability',$p_quantity,'$p_description')";

        if($con->query($sql)){
            echo "Data Entered Successfully";
        }else{
            echo "Problem Occured";
        }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Entry Page</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background: url('../assets/bg-entry.jpg') no-repeat;
    }
    .item{
        margin: 8px 0px;
        width: 100%;
        padding: 8px;
        background: none;
        border: none;
        outline: none;
        border-bottom: 2px solid gray;
    }
    .container{
        height: 100vh;
    }
</style>
<body>
    <div class="container d-flex align-items-center  flex-column">
        <div class="display-3 my-3">Enter Product Details Here</div>
        <form action="shop-entry.php" method="POST" class="d-flex flex-column bg-light p-3 border rounded w-50" style="height: 90%;">
            <input type="text" name="p_name" id="name" class="item" placeholder="Product Name...">
            <input type="text" name="p_category" id="category" class="item" placeholder="Product Category">
            <input type="number" name="p_price" id="price" class="item" placeholder="Price of the Product">
            <input type="text" name="p_size" id="size" class="item" placeholder="Size of the Product">
            <input type="text" name="p_availability" id="availability" class="item" placeholder="Product Availability">
            <input type="number" name="p_quantity" id="quantity" class="item" placeholder="Product Quantity">
            <textarea name="p_description" id="description" cols="30" rows="10" class="item" placeholder="Enter Product description..." style="border: 2px solid grey;"></textarea>
            <!-- <input type="file" name="p_img" id="img"> -->
            <button type="submit" class="btn btn-dark w-50 mt-3">Submit Now</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>