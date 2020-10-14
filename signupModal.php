<?php
    session_start();
    require '_dbconnect.php';

    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password == $cpassword){
            $sql="INSERT INTO `user02` (`Email`, `Name`, `Mobile No.`, `Gender`, `Blood Group`, `DOB`, `Password`, `Time`) VALUES ('$email', '$name', '$mobile', '$gender', '$bloodgroup', '$dob', '$password', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
                setcookie('insert', '1', time() + 3000);
            }
            else{
                setcookie('insert', '0', time() + 3000);
            }
        }else{
            setcookie('insert', '0', time() + 3000);
        }
        header("location:/DE_Project/index.php");
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
    <?php require 'nav.php'?>
    <!-- Modal -->
    <!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">CREATE YOUR ACCOUNT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> class="modal-body" -->
                <div class="container my-5" style="width:800px; margin:auto; ">
                    <form method="POST" action=<?php echo $_SERVER['PHP_SELF']?>>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Hospital</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Blood-Bank</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="option3">
                            <label class="form-check-label" for="inlineRadio3">Public</label>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="Text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                                name="email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyoneelse.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mobile Number</label>
                            <input type="phone" class="form-control" name="mobile" id="mobile" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label for="DOB">Birth Date</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div>
                            <label><b>Gender: </b> </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male"
                                    required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="female"
                                    required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender3"
                                    value="transgender" required>
                                <label class="form-check-label" for="transgender">Transgender</label>
                            </div>
                        </div><br>
                        <div class="d-flex">
                            <div class="dropdown mr-1">
                                <select class="btn btn-danger dropdown-toggle" id="bloodgroup" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-offset="10,20" name="bloodgroup"
                                    required>
                                    <option class="dropdown-item" value="A+" selected>Select Blood Group</option>
                                    <option class="dropdown-item" value="A+">A+</option>
                                    <option class="dropdown-item" value="A-">A-</option>
                                    <option class="dropdown-item" value="B+">B+</option>
                                    <option class="dropdown-item" value="B-">B-</option>
                                    <option class="dropdown-item" value="AB+">AB+</option>
                                    <option class="dropdown-item" value="AB-">AB-</option>
                                    <option class="dropdown-item" value="O+">O+</option>
                                    <option class="dropdown-item" value="O-">O-</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" autocomplete required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="cpassword" autocomplete required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-danger" name="signup" id="signup">SignUp</button>
                    </form>
                </div>
            <!-- </div>
        </div>
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
    <script src="/DE_Project/valid.js"></script>
</body>

</html>