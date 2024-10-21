
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

    $user=$_POST["Username"];
    $Password=$_POST["Password"];

    $Check="SELECT Password FROM userprofile where Username='{$user}'";
    try{
        $result=$con->query($Check);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $checkpw = $row["Password"];
        } else {
            $message = "USERNAME INCORRECT";
            echo "<script>alert('$message');</script>";
            echo "<script>window.location.href = 'Login.html';</script>"; 
        }

        if($Password==$checkpw)
        {
            $Check2="SELECT * FROM userprofile where Username='{$user}'";
            $result2=$con->query($Check2);
            if ($result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $fname = $row2["FName"];
                $lname= $row2["LName"];
                $phone= $row2["Phone"];
                $pin= $row2["Pincode"];
                $add= $row2["Address"];
                $city=$row2["City"];
            }
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] =$lname;
            $_SESSION['phone'] =$phone;
            $_SESSION['pincode'] =$pin;
            $_SESSION['address']=$add;
            $_SESSION['city']=$city;
            echo "<script>location.href='index.php';</script>";
        }
        else{
        $message = "Username and Password does not Match";
        echo "<script>alert('$message');</script>";
        echo "<script>location.href = 'Login.html';</script>";
        }
    }
    catch(mysqli_sql_exception){
        echo "<br>Some Error occured<br>";
    }
    mysqli_close($con);
?>