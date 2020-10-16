<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">RAMC Blood Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="shedule.php">Blood Donation Camp Schedule</a>
                    <a class="dropdown-item" href="bloodbank.php">Blood Banks</a>
                    <a class="dropdown-item" href="bloodAvailability.php">Blood Availability</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
            </li>
        </ul>

        <div class=" row mx-2">';
        // echo var_dump(isset($_COOKIE['login']));
        //  echo '<br>'.isset($_COOKIE['login']);
        if(!isset($_COOKIE['login']) || $_COOKIE['login'] == 0){
            echo '<a  href="loginModal.php" class="btn btn-danger text-center ml-2">Login</a>
            <a href="signupModal.php?signup=P" class="btn btn-danger text-center ml-2">SignUp</a>';
        }
        if(isset($_COOKIE['login']) && $_COOKIE['login'] == 1){
            echo '<a href="_logout.php" class="btn btn-danger text-center ml-2">Logout</a>';
        }
        echo'
        </div>

    </div>
</nav>';
 
// require "loginModal.php";
// include "signupModal.php";
?>