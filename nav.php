
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
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Services
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Blood Donation Camp Schedule</a>
        <a class="dropdown-item" href="#">Blood Banks</a>
        <div class="dropdown"></div>
        <a class="dropdown-item" href="#">Blood Availability</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
    </li>
</ul>

<div class=" row mx-2">
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
  </form>
      <button class="btn btn-danger text-center ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
      <button class="btn btn-danger text-center ml-2" data-toggle="modal" data-target="#signupModal">Signup</button>
</div>

</div>
</nav>
' ;
include "loginModal.php";
include "signupModal.php";
?>