<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mingle Simulators</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="simulator-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
              <?php
                session_start();
                if (isset($_SESSION['fname'])) {
                    echo '<a href="cart.php" class="cart" style="text-decoration: none; font-family: \'Times New Roman\'; background: transparent; border:black; font-size: 28px; color:white; z-index: 1; margin-right: 250px; position: fixed; right: 14px; top: 8px;  display: inline-block;">Cart <i class="fa fa-shopping-cart"></i></a>';
                    echo '<div class="right">
                            <span style="font-size: 28px;right:10px; color: white; position: relative; display: inline-block;">' . $_SESSION['fname'] . '</span>
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
         </header>
    <main>
        <div class="shop">
          <button class="shop1 box" id="drum">
            <img src="./Images/Drum.jpg" class = "box1-img" alt="drums img">
          </button>
          <button class="shop2 box" id="guitar">
            <img src="./Images/Guitar.jpg" class = "box1-img" alt="guitar img">
          </button>
          <button class="shop3 box" id="piano">
            <img src="./Images/Piano.jpg" class = "box1-img" alt="piano img">
          </button>
        </div>
      </main>
    </div>
    <script src="script3.js"></script>
</body>
</html>