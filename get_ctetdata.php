<?php
$states=["Andhra Pardesh","Assam","Arunachal Pradesh","Haryana","Punjab","Uttar Pardesh","Himachal","Madhya pardesh","Gujrat"];
sort($states);
$cities=["Ajmer","Agra","Aligarh","Palwal","Hassanpur","Manali","Dehradun","Mussorrie","Delhi","Gujrat","New Delhi","Sikkim","Nainital","Noida","kota"];
sort($cities);
$Languages=["Hindi","English","Oriyya","Bangali","Telagu","Sanskrit","Punjabi","Tamil","Manipuri","Gujarti","Garo"];
sort($Languages);
$Paper_Lang=["English","Hindi","Sanskrit"];
$choices=["Yes","No"];
$categories=["General","SC","ST","OBC"];
$employment_status=["Not Employeed","Employeed As Teacher","Employeed other than Teacher"];
$applying_for=["Paper I(Classes I to IV)","Paper II(Classes VI to VIII)","Both(Paper I and II)"];
$security_ques=["Q. What is the website you rarely visit?","Q. What plant you like or dislike?","Q. What is your neighbour pet name?","Q. What is the Registration number of your first vehicle?","Q. What Book do you like?"];
?>
<html>
<body style="text-align:center">

<style>
.centre{
text-align:center;
}
.button
{
	    background: #4eabca;
color: white;
}
.btn{
	border:none;
	color:white;
	padding:7px 10px;
	font-size:16px;
	cursor:pointer;
}
.success{
background-color:#f44336;}
.success:hover{background-color:#da190b}
.reset{
background-color:#2196f3;}
.reset:hover{background-color:#0b7dda}
</style>
<form action="new_form.php" target="_blank" method="post">
<b>Candidate Particular's<style="text-align:left"></b><br><br>
Your State is : <b><name="state_data"> <?php echo $_POST["state"]; ?></b><br><br>
Your  <b><?php echo $_POST["sel_ide_type"]; ?></b>
Number is : <b><?php echo $_POST["Identification_number"]; ?></b><br><br>
Candidate's Name : <input type="text" value="<?php echo $_POST["candidate_name"];?>" readonly /><br><br>
Gender: <select  type="text" class="center">

<option value="<?php echo $_POST["gender"];?>" ><?php echo $_POST["gender"];?>
</option>
</select>

<br><br>Mother's Name : <input type="text" name="mother's_name" required>
<br><br>Father's Name : <input type="text" name="father's_name" required>
<br><hr><br><b>Choice</b>
<br><br>1st choice of Exam Center<select name="first_choice">
<option value="">--Select--</option>
<?php
foreach($cities as $city){
echo "<option value=$city>".$city;
}
?>
</option>
</select>
<br><br>2nd choice of Exam Center<select name="first_choice">
<option value="">--Select--</option>
<?php
foreach($cities as $city){
echo "<option value=$city>".$city;
}
?>
</option>
</select>
<br><br>3rd choice of Exam Center<select name="first_choice">
<option value="">--Select--</option>
<?php
foreach($cities as $city){
echo "<option value=$city>".$city;
}
?>
</option>
</select>
<br><hr><br><b>Language offered for CTET</b>
<br><br>Language1<select name="first_choice">
<option value="">--Select--</option>
<?php
foreach($Languages as $Language){
echo "<option value=$Language>".$Language;
}
?>
</option>
</select>
<br><br>Language2<select name="first_choice">
<option value="">--Select--</option>
<?php
foreach($Languages as $Language2){
echo "<option value=$Language2>".$Language2;
}
?>
</option>
</select>
<br><br>Question Paper Medium<select name="lang_med_choice">
<option value="">--Select--</option>
<?php
foreach($Paper_Lang as $paper_lang){
echo "<option value=$paper_lang>".$paper_lang;
}
?>
</option>
</select>
<br><hr><br><b>Differently Abled</b>
<br><br>Person with disability<select name="person_disability">
<option value="">--Select--</option>
<?php
foreach($choices as $choice){
echo "<option value=$choice>".$choice;
}
?>
</option>
</select>
<br><hr><br><b>Personal Details</b>
<br><br>Category<select name="category">
<option value="">--Select--</option>
<?php
foreach($categories as $category){
echo "<option value=$category>".$category;
}
?>
</option>
</select>
<br><br>Status of Qualifying Exam<select name="qualifying_exam_status">
<option value="">--Select--</option>
<option value="Passed">Passed</option>
<option value="Appearing">Appearing in final Exam</option>
</select>
<br><br>Employment Status<select name="Employment_status">
<option value="">--Select--</option>
<?php
foreach($employment_status as $employee_status){
echo "<option value=$employee_status>".$employee_status;
}
?>
</option>
</select>
<br><br>Applying for<select name="apply_for">
<option value="">--Select--</option>
<?php
foreach($applying_for as $apply_exam){
echo "<option value=$apply_exam>".$apply_exam;
}
?>
</option>
</select>
<br><br>Have you appeared in any one of or more of the last three CTET Examination<select name="category">
<option value="">--Select--</option>
<?php
foreach($choices as $choice){
echo "<option value=$choice>".$choice;
}
?>
</option>
</select>
<br><hr><br><b>Candidate's mailing address</b>
<br><br>Address<input type="text" name="address">
<br><br><input type="text" name="address">
<br><br>Locality/Mohalla<input type="text" name="locality">
<br><br>City/Town/Village<input type="text" name="city">
<br><br>State<select name="state_select">
<option value="">--Select--</option>
<?php
foreach($states as $state){
	echo "<option value=$state>".$state;
}
?>
</option>
</select>
<br><br>District<select name="district">
<option value="">--Select--</option>
<?php
foreach($cities as $distict){
	echo "<option value=$distict>".$distict;
}
?>
</option>
</select>
<br><br>Pin Code:<input type="number" name="pin_code">
<br><br>Mobile No.<input type="number" name="mobile_number">
<br><br>STD Code with Telephone No.<input type="number" name="telephone_number">
<input type="number" name="telephone_number">
<br><br>Email id<input type="email" name="email">
<br><hr><br><b>Password generation</b>
<br><br>Choose your password<input type="password" name="password">
<br><br>Confirm your password<input type="password" name="confirm_password">
<br><br>Security Question<select name="security_question">
<option value="">--select--</option>
<?php
foreach($security_ques as $security_que){
echo "<option value=$security_que>".$security_que;
}
?>
</option>
</select>
<br><br>Security Answer<input type="text" name="security_answer">
<br><hr><br><b>Security Pin</b>
<br><br>Enter Security pin (Shown in blue Color)<input type="text" name="security_pin">
<br><br>Security Pin:<label type="text" value="security_pin" class="button">
<?php echo str_shuffle("142AER")?>
</label>
<br><br><input type="submit" class="button"></input><br><br>
<input type="reset" value="Reset Data" onClick="window.location.reload();" class="btn reset"></input>
</body>
</html>