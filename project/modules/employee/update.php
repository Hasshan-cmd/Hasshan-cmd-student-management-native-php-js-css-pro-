<?php
require_once __DIR__.'/../../autoload.php';

$id = $_POST['id'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$age = $_POST['age'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$name = StringHelper::trim($name);
$sname = StringHelper::trim($sname);
$age= StringHelper::trim($age);
$nic= StringHelper::trim($nic);
$address= StringHelper::trim($address);
$mobile= StringHelper::trim($mobile);
$email= StringHelper::trim($email);

// Basic validation
$crit1 = $name != "";
$crit2 = $age != "";
$crit3 = StringHelper::strlen($name) >= 3;
$crit4 = StringHelper::strlen($age) >= 2;
$crit5 = $nic != "";
$crit6 =  StringHelper::strlen($nic) == 10 || StringHelper::strlen($nic) <= 12;
$crit7 = $mobile != "";
$crit8 = $email != "";
$crit9 = StringHelper::strlen($mobile) == 10;



if(!$crit1) echo "Name is required<br/>";
if(!$crit2) echo "Age is required<br/>";
if(!$crit3) echo "Name shoud has at least 3 characters<br/>";
if(!$crit4) echo "Age shoud be grater then nine years<br/>";
if(!$crit5) echo "NIC is required<br/>";
if(!$crit6) echo "NIC length should be 10 or 12<br/>";


if(!$crit1 || !$crit2 || !$crit3  || !$crit4 || !$crit5 || !$crit6 || !$crit7 || !$crit8 || !$crit9) exit();

$studentByNic = Student::getByNic($nic);
if($studentByNic != null){
    if ($studentByNic->id != $id)exit("<h1 style='color: aliceblue'>NIC is already exists</h1>");
}

$studentByEmail = Student::getByEmail($email);
if($studentByEmail != null){
    if ($studentByEmail->id != $id)exit("<h1 style='color: aliceblue'>Email is already exists</h1>");
}

$student =  Student::get($id);
$student->name = $name;
$student->sname = $sname;
$student->age = $age;
$student->nic = $nic;
$student->address = $address;
$student->gender = $gender;
$student->mobile = $mobile;
$student->email = $email;
$success = $student->update();

if ($success) header("location:detail.php?id=$id");
else echo "Something is wrong";
?>