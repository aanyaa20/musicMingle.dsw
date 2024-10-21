
<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dB="Mingle";
    $con= "";
    try{
        $con=mysqli_connect($servername,$username,$password,$dB);
    }
    catch(mysqli_sql_exception){
        echo "Could Not Connect to DataBase";
    }
    $username=$_POST["Username"];
    $FName=$_POST["FName"];
    $LName=$_POST["LName"];
    $Phone=$_POST["Phone"];
    $Address=$_POST["Address"];
    $City=$_POST["City"];
    $Pincode=$_POST["Pincode"];
    $Password=$_POST["Password"];

    $Insert="INSERT INTO userprofile (Username, FName, LName, Phone, City, Address, Pincode, Password) 
            Values('$username','$FName','$LName',$Phone,'$City','$Address',$Pincode,'$Password')";

    try{
        mysqli_query($con,$Insert);
        $message = "Account Created Successfully. You can now Log In";
        echo "<script>alert('$message');</script>";
        echo "<script>window.location.href = 'Login.html';</script>"; 
    }
    catch(mysqli_sql_exception){
        $message = "Account Could not be Created or User already e  xists";
        echo "<script>alert('$message');</script>";
        echo "<script>window.location.href = 'SignUp.html';</script>";
    }
    mysqli_close($con);
?>