<?php
function getImg($productId) {
    $conn = mysqli_connect("localhost", "root", "", "Mingle");
    $sql = "SELECT Image FROM product WHERE Product_id = $productId";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row["Image"];
    }
}

function getProductInfo($productId, $infoType) {
    $conn = mysqli_connect("localhost", "root", "", "Mingle");
    $sql = "SELECT $infoType FROM product WHERE Product_id = $productId";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row[$infoType];
    } else {
        return "N/A";
    }
}
for($i=1; $i<=10; $i++)
{
if (isset($_POST[$i])) {
    $productId = $i;
    $imgPath = getImg($productId);
    $productName = getProductInfo($productId, "pname");
    $productPrice = getProductInfo($productId, "price");
    $productdescription = getProductInfo($productId, "Description");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-buy.css">
    <script src="script2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function AddProduct(user, id)
        {
            $.ajax({
                type: 'POST',
                url: 'AddProduct.php',
                data: {
                    user: user,
                    id: id
                },
                success: function() {
                    window.location.href = 'cart.php';
                }
            });
        }
    </script>
</head>
<body>
<form>
<header>
        <!-- mid box for nav bar -->
        <div class="menu">
        <!-- mid box for nav bar -->
            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="store.php">Buy Instruments</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="simulator.php">Simulators</a></li>
            </ul>
            <?php
                session_start();
                if (isset($_SESSION['fname'])) {
                    echo '<a href="cart.php" class="cart" id="cart">Cart <i class="fa fa-shopping-cart"></i></a>';
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
            ?>
          </div>
        <!-- right bar for buttons -->
       </header>

    <div class="box"><img src="<?php echo $imgPath; ?>" alt="" class="box1-img"></div>

    <div class="product">
        <div class="pname">
            <?php echo $productName; ?>
        </div>
        <!-- this is the problem -->
        <button class="addtocart" id="cart" onclick="AddProduct('<?php echo $_SESSION['username'];?>', '<?php echo $productId;?>')">Add to Cart</button>
        <div class="price">
            <?php echo $productPrice; ?>
        </div><br>
        <div class="desct">Description:</div>
        <div class="desc"><?php echo nl2br($productdescription); ?></div>
    </div>
    <script src="script.js"></script>
</form>
</body> 
</html>
