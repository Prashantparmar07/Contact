<?php
include "contact1.php";
$r='';
if(isset($_POST['submit'])){
$obj=new Studentinfo();

$data=array('name'=>$_POST["name"],'email'=>$_POST["email"],'phone'=>$_POST["phone"],'country'=>$_POST["country"],'gender'=>$_POST["gender"]);
// print_r($data);
// die;

$r=$obj->insert_data($data);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="stylee.css">
    <script src="validator.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" method="post">
    <span style="color:red"><?php  echo $r; ?></span>
    <h2>Contact Form</h2>
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="phone" maxlength="10">
        <div class="error" id="phoneErr"></div>
    </div>
    <div class="row">
        <label>Country</label>
        <select name="country">
            <option>Select</option>
            <option>Australia</option>
            <option>India</option>
            <option>United States</option>
            <option>United Kingdom</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>
    <div class="row">
        <label>Gender</label>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
        <div class="error" id="genderErr"></div>
    </div>
    <div class="row">
        <label>Hobbies <i>(Optional)</i></label>
        <div class="form-inline">
            <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
            <label><input type="checkbox" name="hobbies[]" value="movies"> Movies</label>
            <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>  
        </div>
    </div>        
    <div class="row">
        <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>
</html>