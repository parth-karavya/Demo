<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  include "header.php";
  include "footer.php";
  include "link.php";
?>

<h2 class="nav justify-content-center mx-auto">Add user</h2>

<form class="row">
  <div class="form-group mx-auto">
     <div class="form-group col-md-6 mx-auto">
      <label for="inputName4">First Name</label><span class="third">*</span>
      <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>
     <div class="form-group col-md-6 mx-auto">
      <label for="inputLastName4">Last Name</label><span class="third">*</span>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Last Name">
    </div>
 
    <div class="form-group col-md-6 mx-auto">
      <label for="inputEmail4">Email</label><span class="third">*</span>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6 mx-auto">
      <label for="inputPassword4">Password</label><span class="third">*</span>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
 </div>
</div>

<div class="input-group mb-3 justify-content-cente mx-auto">
  <label for="inputAddress">Upload Image</label><span class="third">*</span>
    <span class="input-group-text">Upload</span>
    <input type="file" class="custom-file-input" id="inputGroupFile01">
</div>

    <div class="container">
      <div class="form-group col-md-6 mx-auto">
      <label for="inputEmail4">Date Of Birth</label><span class="third">*</span>
      <input type="email" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
    </div>
</div>

  <div class="form-group col-md-6 mx-auto">
    <label for="inputAddress">Address</label><span class="third">*</span>
    <input type="text" class="form-control" id="inputAddress" placeholder="Emter Address">
  </div>
<div class="container">
    <div class="form-group col-md-6 justify-content-center  mx-auto">
    <label class="form-group col-md-6 justify-content-center  mx-auto" for="exampleRadios1">
      Gender
    </label>
  </div>
    <div class="form-group col-md-6 justify-content-center  mx-auto">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        Male
      </label>
    </div>
    <div class="form-group col-md-6 justify-content-center  mx-auto">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        Female
      </label>
    </div>
    <div class="form-group col-md-6 justify-content-center  mx-auto">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
      <label class="form-check-label" for="exampleRadios3">
        Other
      </label>
</div>

<div class="container w-100">
      <div class="form-group col-md-6 mx-auto">
      <label for="inputEmail4">Mobile Number</label><span class="third">*</span>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Mobile Number">
    </div>
</div>

</div>
<div class="container w-100">
  <div class="form-group col-md-6 justify-content-center  mx-auto">
      <label for="inputState">country</label>
      <select id="inputState" class="form-control">
        <option selected>Select Country</option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    </div>

  <div class="container w-100">
  <div class="fform-group col-md-6 justify-content-center  mx-auto">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Select State</option>
        <option>Gujarat</option>
        <option>Delhi</option>
      </select>
    </div>
  </div>
  

  <div class="container w-100">
    <div class="form-group col-md-6 justify-content-center  mx-auto">
      <label for="inputCity">City</label>
      <select id="inputCity" class="form-control">
        <option selected>Select City</option>
        <option> Ahemedabad</option>
        <option>Surat</option>
      </select>
    </div>
    
    
  
  
</form>
      </div>
      <div class="container four">
      <div class="col-md-12 text-center">
     
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>