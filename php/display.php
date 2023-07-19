<?php
    $serverAddress = "localhost";
    $username = "root";
    $password = "";
    $dataBaseName = "corvit-cit";

    $con = new mysqli($serverAddress, $username, $password, $dataBaseName);

    $sql = "SELECT * FROM `std-marks`";

    $result = $con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Table</title>
</head>
<body>
    <table class="table table-dark table-striped table-hover table-bordered">
        <thead>
        <?php
                if($result-> num_rows > 0){ 
          
         echo' <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Roll no</th>
            <th scope="col">Father Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
          </tr>';}?>
        </thead>
        <tbody>
          
          <?php
                if($result-> num_rows > 0){ 
                   while($row = $result -> fetch_assoc()){
                       echo '<tr?>';
                       echo '<th scope="row">'.$row['id'].'</th> '; 
                       echo '<td>', $row['name'] ,'</td> '; 
                       echo '<td>', $row['roll_num'] ,'</td> '; 
                       echo '<td>', $row['father_name'] ,'</td> '; 
                       echo '<td>', $row['age'] ,'</td> '; 
                       echo '<td>', $row['gender'] ,'</td> '; 
                       echo '<td>', $row['email'] ,'</td> '; 
                       echo '<td>', $row['password'] ,'</td> '; 
                       echo '</tr>';
                   }
                }
                else{
                   echo '<div class="alert alert-danger mb-5" role="alert">
                   No Data available!
                 </div>';
                }
          ?>
        </tbody>
      </table>





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>