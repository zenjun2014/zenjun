<?php
require_once 'classuser.php';
$user = new User(); // Checking for user logged in or not

 if (isset($_POST['submit'])){
 extract($_POST);
 $register = $user->user($lname,$fname,$sex,$email,$password,$defaultsettings_birthDay,$address,$city,$country,$zipCode,$comment);
 if ($register) {
 // Registration Success
 echo 'Registration successful <a href="login.php">Click here</a> to login';
 } else {
 // Registration Failed
 echo 'Registration failed. Email or Username already exits please try again';
 }
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../dist/css/bootstrapValidator.css"/>
    <script src="../vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrapValidator.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>
    <script src="jquery.validate.min.js"></script>
</head>
<style>
select.birthMonth.span2{
   margin-left:18px;
}
</style>
<body>
    <script>
    $(document).ready(function(){
            $("#loginForm").validate({
                errorElement: "span",
                rules: {
                    cpassword: {
                        equalTo: "#password" 
                }
            });
        });
    </script>
    <div class="container">
        <div class="row">            
            <section>                
                <div class="col-lg-8 col-lg-offset-2">
                    <form id="loginForm" method="post" action="register.php" class="form-horizontal">
                        <fieldset>
                            <legend>Registration</legend>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Last Name</label>
                                <div class="col-lg-5">
                                    <input type="text" required class="form-control" name="lname" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">First Name</label>
                                <div class="col-lg-5">
                                    <input type="text" required class="form-control" name="fname" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="form-group">
                            <label style="margin:0" class="col-lg-3 control-label" for="sex">Sex</label>
                                                <div required>
                                                    <input type="radio" name="sex" id="sex" value="1" style="margin-left: 22px;">
                                                    Male
                                                    <input type="radio" name="sex" id="sex" value="2">
                                                    Female                                                    
                                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">E-mail:</label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" required name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" required name="password" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Retype password</label>
                                <div class="col-lg-5">
                                    <input type="password" equalTo required  class="form-control" name="cpassword" placeholder="Confirm Password"/>
                                </div>
                            </div>
                            
                            <div id="default-settings" class="form-group" >
                                <label class="col-lg-3 control-label" for="date">Date of Birth</label>
                                <div id="day">   
                                    <script name="data">
                                        $("#max-year-birthday").birthdayPicker({
                                            "defaultDate": "01-03-1980",
                                            "maxYear": "2020",
                                            "maxAge": 65
                                        });
                                        $("#default-settings").birthdayPicker();
                                        $("#default-birthday").birthdayPicker({"defaultDate":"01-03-1980"});
                                    </script> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address</label>
                                <div class="col-lg-5">
                                    <input type="text" required class="form-control" name="address" placeholder="Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">City</label>
                                <div class="col-lg-5">
                                    <select class="form-control" required name="city">
                                        <option value="">-- Select a country --</option>
                                        <option>Ho Chi Minh</option>
                                        <option>Ha Noi</option>
                                        <option>Hue</option>
                                        <option>Da Nang</option>
                                        <option>Da Lat</option>
                                        <option>Hai Phong</option>
                                        <option>Vung Tau</option>
                                        <option>Ninh Binh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Country</label>
                                <div class="col-lg-5">
                                    <select class="form-control" required name="country">
                                        <option value="">-- Select a country --</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Russia">Russia</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United State">United State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Zip Code</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" required name="zipCode" placeholder="Zip_Code" />
                                </div>
                            </div>
                            <div for="country" class="form-group">             
                                <label for="comment" class="col-lg-3 control-label">Comment:</label>
                                <textarea class="form-control" rows="4" name="comment" id="comment"style="width:300px; margin-left: 210px " ></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5 col-lg-offset-3">
                                    <div class="checkbox">
                                        <input type="checkbox" required name="check" /> I accept <a href="http://www.w3schools.com/html/" target="_top">terms</a>
                                    </div>                                    
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Send</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html>