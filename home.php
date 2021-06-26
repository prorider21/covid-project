<!DOCTYPE html>
<html>
<head>
    <title>COVID VACCINE DISTRIBUTION SYSTEM</title>
    <h1 style="font-size:300%;" align="center">COVID VACCINE DISTRIBUTION SYSTEM</h1>
    </br>
    </br>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>

<?php
$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "covid";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
$q="select * from clogin";

if (!$conn) 
{
    echo "Connection failed!";
}
?>
</div>

<div>

<form action = "registration.php" method = "POST">
<div class="container">
<div class="row">
<div class="col-sm-3">
<hr class="mb-3">
<label for="name"><b>User Name:</b></label>
<input class="form-control" type = "text" name = "name" required>


<label for="pass"><b>Password:</b></label>
<input class="form-control" type = "password" name = "pass" required>


<label for="con_pass"><b>Confirm Password:</b></label>
<input class="form-control" type = "password" name = "con_pass" required>
<hr class="mb-3">
<input class="btn btn-outline-primary me-2" type="submit" name="create"value="Sign Up"/>
</form>
</br>
</br>
</br>
<form action = "userdetail.php" method = "POST">
<input class="btn btn-primary" type="submit" name="enter user details"value="Go to Enter user details page"/>
</form>
</br>
</br>
</br>
<form action = "adminsignin.php" method = "POST">
<input class="btn btn-primary" type="submit" name="enter user details"value="Go to Admin page"/>
</form>


</div>           
</form>
</div>

</body>
</html>	