<?php
if(isset($_POST['nf'])&&isset($_POST['nl'])&&isset($_POST['sl'])&&isset($_POST['ccn'])&&isset($_POST['cvv'])&&isset($_POST['ce'])&&isset($_POST['am']))
{
   
    $nf=$_POST['nf'];
    $nl=$_POST['nl'];
    $sl=$_POST['sl'];
    $cnn=$_POST['ccn'];
    $cvv=$_POST['cvv'];
    $ce=$_POST['ce'];
    $am=$_POST['am'];
    $con=new mysqli('localhost','root','','flat');
    $q="insert into pay(FName,LName,Bank,Creditcardnumber,Securitycode,Cardexpiration,Amount)values('$nf','$nl','$sl','$cnn','$cvv','$ce','$am')";
    $r=mysqli_query($con,$q);
    if($r)
   {
    echo "<script> alert('Your Payment is Success,Thank for booking Home')</script>";  
   }
}
?>