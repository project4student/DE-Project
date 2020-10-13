<?php
    require '_dbconnect.php';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
                $_SESSION['insert']=true;
            }
            else{
                $_SESSION['insert']=false;
            }
        }
        else{
            $_SESSION['insert']=false;
        }
        
    }

?>
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">CREATE YOUR ACCOUNT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
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
                        <input type="Text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                            anyoneelse.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile Number</label>
                        <input type="number" class="form-control" name="mobile" id="exampleInputPassword1"
                            maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="DOB">Birth Date</label>
                        <input type="date" class="form-control" id="DOB" name="dob">
                    </div>
                    <div>
                        <label><b>Gender: </b> </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                value="transgender">
                            <label class="form-check-label" for="transgender">Transgender</label>
                        </div>
                    </div><br>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                            <select class="btn btn-danger dropdown-toggle" id="dropdownMenuOffset"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"
                                name="bloodgroup">
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
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger">SignUp</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>