<?php
if(isset($_POST['nm'])&&isset($_POST['em'])&&isset($_POST['mb'])&&isset($_POST['ad']))
{
$nm=$_POST['nm'];
$em=$_POST['em'];
$mb=$_POST['mb'];
$ad=$_POST['ad'];
$con=new mysqli('myazdemosvr.mysql.database.azure.com','myadmin@myazdemosvr','Server@1','flat');
$q="insert into contact(Name,Email,Contact,Adress)values('$nm','$em','$mb','$ad')";
$r=mysqli_query($con,$q);
}

?>
