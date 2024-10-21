<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-image: url('./Images/background.jpg');
        }

        .Box {
            background-color: #555;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 20px 20px 20px rgba(0, 0, 0, 1);
            margin: 20px auto;
            max-width: 600px;
        }

        h1 {
            color: #4CAF50;
        }

        p {
            margin-top: 20px;
            color: #fff;
            font-family: 'Times New Roman'; 
            font-size:22px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #45a049;
        }

        .OrderBox {
            background-color: #444;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="Box">
        <h1>Order Confirmed!</h1>
        <?php
            session_start();
            echo '<div class="OrderBox">
                        <h1>Order Summary</h1>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Name:' . $_SESSION['fname'] . '</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Phone:' . $_SESSION['phone'] . '</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Address: ' . $_SESSION['address'] . '</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Pincode: ' . $_SESSION['pincode'] . '</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">City: ' . $_SESSION['city'] . '</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Cash On Delivery</p>
                        <p style="font-family: \'Times New Roman\'; font-size:22px;margin-left:10px;">Total Cost: ' . $_SESSION['TotalCost'] . '</p>
                    </div>';
        ?>
        <p>Your Order Will be Deliverd within 7 days.</p>
        <p>Thank you for your ordering.</p>
        <a href="index.php">Continue Shopping</a>
    </div>
</body>
</html>
