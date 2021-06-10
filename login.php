<?php
    session_start();
    require '_dbconnect.php';
    $t=1;
    $f=0;
    if(isset($_POST['login'])){
        $option=$_POST['Loginoption'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if ($option == "public") {
            $_SESSION['user']='public';
            $sql="SELECT * FROM `user02` WHERE Email ='$email' AND Password='$password'";
            $result=mysqli_query($conn,$sql);
        }elseif($option == "HB"){
            $_SESSION['user']='HB';
            $sql="SELECT * FROM `user01` WHERE Email ='$email' AND Password='$password'";
            $result=mysqli_query($conn,$sql);
        }   
        if(mysqli_num_rows($result)>0){
            $_SESSION['username']=explode('@',$email);
            setcookie('loginstatus',$t,time() + 3600);
            setcookie('login',$t,time() + 3600);
        }
        else{
            setcookie('loginstatus',$f,time() + 3600);
            setcookie('login',$f,time() + 3600);
        }
        header("location:index.php");
    }

    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>RAMC Blood Bank</title>
</head>

<body>
    <?php require 'nav.php';?>

    <div class="container my-5" style="width:800px;margin:auto;">
        <form method="POST" action=<?php echo $_SERVER['PHP_SELF']?>>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Loginoption" value="public" checked>
                <label class="form-check-label" for="Loginoption">
                    For Public
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Loginoption" value="HB">
                <label class="form-check-label" for="Loginoption">
                    For Hospital/Blood Bank
                </label>
            </div><br><br>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    name="email" id="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="">
            </div>
            <button type="submit" name="login" class="btn btn-danger" id="login">Login</button>
        </form>
    </div>
    <!-- </div>
    </div>
    </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script>
        const email = document.getElementById('email');
        const password = document.getElementById("password");

        email.addEventListener('blur', () => {
            let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
            let str = email.value;
            if (regex.test(str)) {
                email.classList.remove('is-invalid');
            }
            else {
                email.classList.add('is-invalid');
            }
        })

        password.addEventListener('blur', () => {
            let regex = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            let str = password.value;
            if (regex.test(str)) {
                password.classList.remove('is-invalid');
            }
            else {
                password.classList.add('is-invalid');
            }
        });

        let login = document.getElementById('login');
        login.addEventListener('click', (e) => {
            let invalid = document.getElementsByClassName('is-invalid');
            if (invalid.length > 0) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>