<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-cart.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Mingle cart</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function RemoveProduct(user, id)
        {
            $.ajax({
                type: 'POST',
                url: 'cart_del_pro.php',
                data: {
                    user: user,
                    id: id
                },
                success: function() {
                    location.reload();
                }
            }); 
        }
        function MinusProduct(user, id) 
        {
            $.ajax({
                type: 'POST',
                url: 'cart_minus_pro.php',
                data: {
                    user: user,
                    id: id
                },
                success: function() {
                    location.reload();
                }
            });
            
        }
        function PlusProduct(user, id) 
        {
            $.ajax({
                type: 'POST',
                url: 'cart_plus_pro.php',
                data: {
                    user: user,
                    id: id
                },
                success: function() {
                    location.reload();
                }
            });
        }
        function PlaceOrder() 
        {
            var user = '<?php session_start(); echo $_SESSION['username']; ?>';
            window.location.href = 'loading.html';
            $.ajax({
                type: 'POST',
                url: 'PlaceOrder.php',
                data: {
                    user: user
                },
                success: function () {
                    // Redirect to OrderConfirmation.php after successful order placement
                    window.location.href = 'OrderConfirmation.php';
                }
            });
        }
    </script>
</head>
<body>
    <div class="back">
        <header>
            <div class="menu">
            <!-- mid box for nav bar -->
                <ul class="navbar">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>
                    <li><a href="store.php">Buy Instruments</a></li>
                    <li><a href="ContactUs.html">Contact Us</a></li>
                    <li><a href="simulator.php">Simulators</a></li>
                </ul>
            </div>
        </header>
                <?php
                    session_start();
                    $servername = "localhost";
                    $user = "root";
                    $password = ""; 
                    $dB="Mingle";
                    $con= "";
                    try{
                        $con=mysqli_connect($servername,$user,$password,$dB);
                    }
                    catch(mysqli_sql_exception){
                        echo "Could Not Connect to DataBase";
                    }
                    function calculateTotalCost($username, $con)
                    {
                        $totalCost = 0;

                        $sql = "SELECT Product_id, Quantity FROM Cart WHERE Username = ?";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while ($row = $result->fetch_assoc()) {
                            $pid = $row["Product_id"];
                            $quant = $row["Quantity"];

                            $sql2 = "SELECT Price FROM Product WHERE Product_id = ?";
                            $stmt2 = $con->prepare($sql2);
                            $stmt2->bind_param("i", $pid);
                            $stmt2->execute();
                            $result2 = $stmt2->get_result();

                            if ($result2->num_rows > 0) {
                                $row2 = $result2->fetch_assoc();
                                $price = $row2["Price"];
                                $totalCost += $price * $quant;
                            }

                            $stmt2->close();
                        }

                        $stmt->close();

                        return $totalCost;
                    }
                    if (isset($_SESSION['fname'])) {
                        echo '<div class="right">
                                <span style="font-size: 28px; color: white;right:10px; position: relative; display: inline-block;">' . $_SESSION['fname'] . '</span>
                                <a href="LogOut.php"><button class="btn">LogOut</button></a>
                            </div>';
                    } else {
                        echo '<div class="right">
                                <a href="Login.html"><button class="btn">Login</button></a>
                                <a href="SignUp.html"><button class="btn">Sign Up</button></a>
                            </div>';
                    }
                    $TotalCost=calculateTotalCost($_SESSION['username'], $con);
                    $_SESSION['TotalCost']=$TotalCost;
                    if($TotalCost>0)
                    {
                    echo '<div class="OrderBox" style="background-color: #121212;position:fixed;color:silver; right:50px;height:500px; width:500px; padding: 10px; border-radius: 10px; box-shadow: 0 0 30px rgba(0, 0, 0,5);">
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Name:' . $_SESSION['fname'] . '</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Phone:' . $_SESSION['phone'] . '</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Address: ' . $_SESSION['address'] . '</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Pincode: ' . $_SESSION['pincode'] . '</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">City: ' . $_SESSION['city'] . '</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Cash On Delivery</p>
                                    <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Total Cost: ' . $TotalCost . '</p>
                                    <button  style=" width:250px;height:50px;background-color: grey; color: #fff; border: none; border-radius: 5px;" onmouseover="this.style.backgroundColor=\'silver\';this.style.cursor=\'pointer\'" onmouseout="this.style.backgroundColor=\'grey\'" onclick="PlaceOrder()">Place Order</button>
                            </div>';
                    }
                    else
                    {
                        echo '<p style="font-family: \'Times New Roman\';color:silver; font-size:72px; margin-left:50px;">Your Cart is Empty</p>';
                    }
                    $sql = "SELECT Product_id, Quantity from Cart where Username = ?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("s", $_SESSION['username']);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) 
                    {
                        $pid = $row["Product_id"];
                        $quant = $row["Quantity"];

                        $sql2 = "SELECT Pname, Price, Image from Product where Product_id = ?";
                        $stmt2 = $con->prepare($sql2);
                        $stmt2->bind_param("i", $pid);
                        $stmt2->execute();
                        $result2 = $stmt2->get_result();

                        if ($result2->num_rows > 0) {
                            $row2 = $result2->fetch_assoc();
                            $pname = $row2["Pname"];
                            $price = $row2["Price"];
                            $img = $row2["Image"];

                            echo '<div class="item">
                                    <div class="box"><img src="' . $img . '" alt="" class="box1-img"></div>
                                    <div class="info">
                                        <div class="name">' . $pname . '</div>
                                        <div class="price">' . $price . '</div>
                                        <div class="quantity">Quantity: <button class="Removebtn" onclick="MinusProduct(\'' . $_SESSION['username'] . '\', ' . $pid . ')">-</button> ' . $quant . ' <button class="Removebtn" onclick="PlusProduct(\'' . $_SESSION['username'] . '\', ' . $pid . ')">+</button> </div>
                                        <button class="Removebtn" onclick="RemoveProduct(\'' . $_SESSION['username'] . '\', ' . $pid . ')">Remove</button>
                                    </div>
                                </div>';
                        }
                        $stmt2->close();
                    }
                    $stmt->close();
                    $con->close();
                ?>
    </div>
</body>
</html>