<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<h1 style="font-size:300%;" align="center">ENTER USER DETAILS</h1>

<?php

$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "covid";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
$q="select * from cdata";

if (!$conn) 
{
    echo "Connection failed!";
}
?>

<div>
<form action = "udetailwrite.php" method = "POST">
<div class="container">
<div class="col-sm-6">

<hr class="mb-3">

<label for="full_name"><b>Full Name :</b></label>
<input class="form-control" type = "text" name = "full_name" required>

<label for="age"><b>Age :</b></label>
<input class="form-control" type = "text" name = "age" required>

 
<label for="gender"><b>Gender :</b></label> 
<input  type="radio" value="Male" name="gender" checked > Male   
<input  type="radio" value="Female" name="gender"> Female   
<input  type="radio" value="Other" name="gender"> Other  </br>

<label for="a_ward"><b>Address</br>Ward :</b></label>
<input class="form-control" type = "text" name = "a_ward" required>

<label for="a_vill"><b>Village/Muncipality :</b></label>
<input class="form-control" type = "text" name = "a_vill" required>

<label for="a_dist"><b>District :</b></label>
<input class="form-control" type = "text" name = "a_dist" required>

<label for="a_state"><b>State :</b></label>
<input class="form-control" type = "text" name = "a_state" required>

<label for="a_pin"><b>Pincode :</b></label>
<input class="form-control" type = "text" name = "a_pin" required>

<label for="id_no"><b>ID Proof Number :</b></label>
<input class="form-control" type = "text" name = "id_no" required>
</br>
  
<label for="f_worker"><b>Are you a front-line worker ? :</b></label> 
<input  type="radio" value="Y" name="f_worker"> Yes 
<input  type="radio" value="N" name="f_worker"checked> No 
</div>

</br>
 
<label for="h_issue"><b> 
Do you have any of the following health issues ? :</br></br>
1.	Heart Failure with hospital admission in the past one year</br>
2.	Post Cardiac Transplant/Left Ventricular Assist Device (LVAD)</br>
3.	Significant Left ventricular systolic dysfunction (LVEF<40%) </br>
4.	Moderate or severe valvular Heart Disease</br>
5.	Congenital heart disease with severe PAH or Idiopathic PAH</br>
6.	Coronary Artery Disease with past CABG/PTCA/MI AND Hypertension/Diabetes on treatment</br>
7.	Angina AND Hypertension/Diabetes on treatment</br>
8.	CT/MRI documented stroke AND Hypertension/Diabetes on treatment</br>
9.	Pulmonary artery hypertension AND Hypertension/Diabetes on treatment</br>
10.	Diabetes (>10 years OR with complications) AND Hypertension on treatment</br>
11.	Kidney/Liver/Hematopoietic stem cell transplant: Recipient/On waitlist</br>
12.	End Stage Kidney Disease on haemodialysis/CAPD</br>
13.	Current prolonged use of oral corticosteroids/immunosuppressant medications</br>
14.	Decompensated cirrhosis</br>
15.	Severe respiratory disease with hospitalizations in last two years/FEV1<50% </br>
16.	Lymphoma/Leukaemia/Myeloma</br>
17.	Diagnosis of any solid cancer on or after 1st July 2020 OR currently on any Cancer Therapy</br>
18.	Sickle Cell Disease/ Bone marrow failure/ Aplastic Anaemia/ Thalassemia Major</br>
19.	Primary Immunodeficiency Disease/ HIV infection</br>
20.	Persons with disabilities due to Intellectual disabilities/ Muscular Dystrophy/ Acid attack</br>
    with involvement of respiratory system/ Persons with disabilities having high support needs</br>
    /Multiple disabilities including deaf-blindness</b>
</label>
</br>  </br>
<input  type="radio" value="Y" name="h_issue"> Yes 
<input  type="radio" value="N" name="h_issue"checked> No 
<hr class="mb-3">   
</br> 
<input class="btn btn-primary" type="submit" name="Submit"value="   Submit   "/>
</form>
</br> 
<form action = "userdetail.php" method = "POST">
<input class="btn btn-outline-primary me-2" type="submit" name="Clear"value="  Reset  "/>
</form>
<form action = "home.php" method = "POST">
<input class="btn btn-outline-primary me-2" type="submit" name="Home"value="  Home  "/>

</div>
</form>
</div>
        
</body>
</html>	 