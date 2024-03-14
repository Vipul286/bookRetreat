<?php
if(isset($_POST['fn'])&&isset($_POST['ln'])&&isset($_POST['em'])&&isset($_POST['mb'])&&isset($_POST['dt'])&&isset($_POST['ad']))
{
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$em=$_POST['em'];
$mb=$_POST['mb'];
$dt=$_POST['dt'];
$ad=$_POST['ad'];
$con=new mysqli('myazdemosvr.mysql.database.azure.com','myadmin@myazdemosvr','Server@1','flat');
$q="insert into book1(FName,LName,Email,Contact,Date,Adress)values('$fn','$ln','$em','$mb','$dt','$ad')";
$r=mysqli_query($con,$q);
if($r)
{
    echo "<script>alert('Your Booking is Successfully, Do Payment now')</script>";
}
}


?>
