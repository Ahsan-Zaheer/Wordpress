<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dataBaseName = "covit_shop";

    $con = new mysqli($serverName, $userName, $password, $dataBaseName);

        $sql = "UPDATE shop SET `p_name`='Regular Clean',`p_category`='Regular',`p_price`='50',`p_size`='100ml',`p_availability`='In-Stock',`p_quantity`='1' WHERE id = 6" ;

        if($con->query($sql)){
            echo "Data Entered Successfully";
        }else{
            echo "Problem Occured";
        }

        ?>