<?php
session_start();
require '_dbconnect.php';
if(!isset($_COOKIE['login']) || $_COOKIE['login'] == 0){
    if($_SESSION['user'] == 'HB'){
        echo"Your are not public user";
    }else{
        header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Donation Detail</title>
</head>

<body>
    <?php
        require 'nav.php';
    ?>
    <div class="container my-5">
        <h2 class="my-3">Your applied Donation Camp</h2>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Organizer' Name</th>
                <th scope="col">Organizer's Email</th>
                <th scope="col">Date of Camp</th>
                <th scope="col">City</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $sql= "SELECT * FROM `".$_SESSION['username'][0]."`";
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result)) {
                        echo "<tr>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        </tr>";
                    }
                    // <td><a href='apply.php?id=";echo $id."'>Apply Now</a></td>
				?>
            </tbody>
          </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
</body>

</html>