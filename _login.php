<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST'){
    require '_dbconnect.php';
    $username=$_POST['Email'];
    $password=$_POST['Password'];
    
    $sql="SELECT * FROM `user02` WHERE `Username` = '$username' AND `password` = '$password';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

      session_start();
      $_SESSION['username']=$username;
      $_SESSION['login']=true;
      header("location:/DE_Project/index.php");
    }
    else{
      $_SESSION['error']="Invalid Parameter";
    }
  }
?>