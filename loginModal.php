<?php
    require '_dbconnect.php';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT * FROM `user02` WHERE Email='$email' and Password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['login']=true;
            header("location:/DE_Project/index.php");
        }
        else{
            $_SESSION['login']=false;
        }
    }

?>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">LOGIN TO RAMC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-danger">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>