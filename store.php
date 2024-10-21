<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style-store.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="script.js"></script>
</head>
<body>
    
    <div id="drum">
    <header>
        <!-- mid box for nav bar -->
        <div class="menu">
            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="store.php">Buy Instruments</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="simulator.php">Simulators</a></li>
            </ul>
            <?php
            session_start();
            if(!isset($_SESSION['fname']))
            {
                echo '<a href="cart.php" class="cart" id="cart">Cart <i class="fa fa-shopping-cart"></i></a>';
                echo '<div class="right">
                    <a href="Login.html"><button class="btn">Login</button></a><a href="SignUp.html"><button class="btn">Sign Up</button></a>
                </div> ';
            }
            else
            {
              echo '<a href="cart.php" class="cart" id="cart">Cart <i class="fa fa-shopping-cart"></i></a>';
                echo '<div class="right">
                    <a href="LogOut.php"><button class="btn">LogOut</button></a>
                </div> ';
            }
            ?>
        <!-- right bar for buttons -->
       </header>
       <h1 class="title">Drums and Drum Accessories</h1>
       <form action="buy.php" method="POST">
       <div class="shop">
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
                <img src="./Product-img/d1.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">
                ATORSE® Mini Jazz Band Drum Kits Percussion Instruments Set Children Educational Musical Toy - 3 Drums +Stool Red <br>
            </div>
            <div class="price"><strong style="font-size: 25px;" class="price" >INR 12000</strong></div>
        </button>

        <button type="submit" class="shop1 box1" id="d2" name="2">
            <div class="product-img">
                <img src="./Product-img/d2.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">
                ARCTIC COSMOS 5 Piece Complete Acoustic Drum Kit/Drumset with drumsticks, Cymbals and throne - With Hardware. (Black)<br>
            </div>
                <div class="price"><strong style="font-size: 25px;" ><s style="font-size: 15px;">INR 22,337</s> INR 18,367</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d3" name="3">
            <div class="product-img">
                <img src="./Product-img/d3.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">
                ARCTIC CRONOS 5 Piece Complete Acoustic Drum Kit/Drumset with drumsticks, Cymbals and throne. (Blue)<br>
            </div>
                <div class="price"><strong style="font-size: 25px;" ><s style="font-size: 15px;">INR 28,236</s> INR 24,185</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d4" name="4">
            <div class="product-img">
                <img src="./Product-img/d4.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">
                Alesis Debut Kit –  Drum Set With 4 Mesh Electric Drum Set Pads, 120 Sounds, 60 Melodics Lessons, Drum Stool, Drum Sticks and Headphones<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 27,999</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d5" name="5">
            <div class="product-img">
                <img src="./Product-img/d5.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">
                Alesis Nitro Mesh Kit | Eight Piece All-Mesh Electronic Drum Kit with Play Along Tracks, Drum Sticks & Drum Key Included<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" ><s style="font-size: 15px;">INR 45,553</s> INR 39,999</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d6" name="6">
            <div class="product-img">
                <img src="./Product-img/d6.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">    
                EASTROCK Snare Drum 14x5.5inch for Students,Beginners with Gig Bag, Sticks, Drum Keys,Frosted Material Drum Skin,Black<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 4,989.43</strong></div>
           
        </button>

        <button type="submit" class="shop1 box1" id="d7" name="7">
            <div class="product-img">
                <img src="./Product-img/d7.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">    
                Starfavor Drum Sticks 5A Classic America Maple Wood Tear Drop Tip Drumsticks Anti-Slip and Durable for Adults Kids and Beginners-15 Pairs<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 2,411.13</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d8" name="8">
            <div class="product-img">
                <img src="./Product-img/d8.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">    
                Drum Cases (5 Piece) - Travel Drum Bags Set for Standard Kits - Rugged Design & Thick Padding for Your Drumset Protection<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" ><s style="font-size: 15px;">INR 17,327</s> INR 14,969</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d9" name="10">
            <div class="product-img">
                <img src="./Product-img/d9.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">    
                Pearl e/Merge 22" x 14" Bass Drum Complete with Internal Kick Pad Trigger (EMEBP22)<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 45,493</strong></div>
            
        </button>

        <button type="submit" class="shop1 box1" id="d10" name="10">
            <div class="product-img">
                <img src="./Product-img/d10.jpg" class = "box1-img" alt="drums img">
            </div>
            <div class="info">    
                Bass Drum Pedal,Double Bass Drum Pedal Mount Double Chain Drive Foot Percussion Hardware Kick Drum Kit Pedals Step on Hammer<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 2,327.96</strong></div>
            
        </button>

        
        
      </div>
    </div>
    <a id="guitar"></a>
    <div id="guitar">
        <h1 class="title">Guitar and Guitar Accessories</h1>
        <div class="shop">
            <button type="submit" class="shop1 box1" id="g1" name="11">
                <div class="product-img">
                    <img src="./Product-img/g1.jpg" class = "box1-img" alt="drums img">
                </div>
                <div class="info">
                    Enya NOVA  Electric Guitar with Starter Bundle Kit of Gig Bag, Strap, Strings, Charging Cable, Instrument Cable(Black) <br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 23,308.33</strong></div>
                
            </button>
    
            <button type="submit" class="shop1 box1" id="g2" name="12">
                <div class="product-img">
                    <img src="./Product-img/g2.jpg" class = "box1-img" alt="drums img">
                </div>
                <div class="info">
                    Donner 30 Inch Kids Electric Guitar Beginner Kits ST Style Mini Electric Guitar with Amp, 600D Bag, Tuner, Picks, Cable, Strap, Extra Strings...<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" ><s style="font-size: 15px;">INR 12,337</s> INR 10,821.28</strong></div>
                
            </button>
    
            <button type="submit" class="shop1 box1" id="g3" name="13">
                <div class="product-img">
                    <img src="./Product-img/g3.jpg" class = "box1-img" alt="drums img">
                </div>
                <div class="info">
                    Grote Guitar Metallic Paints Solid Body Electric Guitar with Gigbag Picks (Blue)<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" ><s style="font-size: 15px;">INR 28,236</s> INR 24,185</strong></div>
                
            </button>
    
            <button type="submit" class="shop1 box1" id="g4" name="14">
                <div class="product-img">
                <img src="./Product-img/g4.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info">
                Pyle Heavy Metal Electric Guitar Axe w/ Amplifier Kit, Full Size Instrument w/ Practice Amp & Accessories, Black<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 14,991.73</strong></div>
                
            </button>
    
            <button type="submit" class="shop1 box1" id="g5" name="15">
                <div class="product-img">
                <img src="./Product-img/g5.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info">
                    Ibanez AS73 Artcore Semi-Hollow Body Olive Metallic<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 43,234.32</strong></div>
                
            </button>
            <button type="submit" class="shop1 box1" id="g6" name="16">
                <div class="product-img">
                <img src="./Product-img/g6.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info"> 
                15 Pack Guitar Picks Plectrums with Organizer Storage Box, 0.5 0.75 1.0 mm<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 398.97</strong></div>
                
            </button>
            <button type="submit" class="shop1 box1" id="g7" name="17">
                <div class="product-img">
                <img src="./Product-img/g7.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info"> 
                    Guitar Pedalboard with Built-in Power Supply Pedal Board Aluminium Alloy 1.8lb<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 5,829.61</strong></div>
                
            </button>
            <button type="submit" class="shop1 box1" id="g8" name="18">
                <div class="product-img">
                <img src="./Product-img/g8.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info"> 
                Donner Mini Guitar Amp Small Electric Guitar Amplifier 5W Portable for Desktop Practice with a Retro British Tone DA-10<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 4,163.77</strong></div>
                
            </button>
            <button type="submit" class="shop1 box1" id="g9" name="19">
                <div class="product-img">
                <img src="./Product-img/g9.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info"> 
                HAVENDI® Guitar Strings acoustic guitar (6 string set) incl. 3 picks<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 2,073.97</strong></div>
                
            </button>
            <button type="submit" class="shop1 box1" id="g10" name="20">
                <div class="product-img">
                <img src="./Product-img/g10.jpg" class = "box1-img" alt="guitar img">
                </div>
                <div class="info"> 
                Marshall Amps Guitar Combo Amplifier (M-MG30GFX-U)<br>
                </div>
                <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 24,986.77</strong></div>
                
            </button>
    
            
          </div>
    </div>

<div id="piano">
    <h1 class="title">Piano and Piano Accessories</h1>
    <div class="shop">
        <button type="submit" class="shop1 box1" id="p1" name="21">
            <div class="product-img">
            <img src="./Product-img/p1.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            JIKADA 61 Key Portable Electronic Keyboard Piano<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 13,325.89</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p2" name="22">
            <div class="product-img">
            <img src="./Product-img/p2.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            Donner Keyboard Piano 61 Key, Electric Keyboard Kit with 249 Voices, 249 Rhythms<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 14,158.81</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p3" name="23">
            <div class="product-img">
            <img src="./Product-img/p3.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            Blackstar, 88-Key Portable Keyboard (FOLDPIANO88)<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 6,662.53</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p4" name="24">
            <div class="product-img">
            <img src="./Product-img/p4.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                PopuPiano Smart Piano Keyboard with Speaker, Rainbow Lighting Keys, Beginner Lessons, 256 Tones, 100+ Chords<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 33,315.97</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p5" name="25">
            <div class="product-img">
            <img src="./Product-img/p5.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Donner Folding Bluetooth Piano Keyboard, 61 Keys Sensitive Travel Piano Keyboard for Beginners<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 9,994.21</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p6" name="26">
            <div class="product-img">
            <img src="./Product-img/p6.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Korg microPiano 61 - Key Minature Grand Piano, Black<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 37,481.40</strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p7" name="27">
            <div class="product-img">
            <img src="./Product-img/p7.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Yajun Grand Piano Cover Dustproof Baby Grand Piano Protective Cover Washable with Velvet Full Triangle Piano Cover 62.9"x59"x19.6"<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 4,147.11 </strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p8" name="28">
            <div class="product-img">
            <img src="./Product-img/p8.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            Removable Piano Keyboard Note Labels for 88 Key<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 1,081.96 </strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p9" name="29">
            <div class="product-img">
            <img src="./Product-img/p9.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            AETEE Piano Lights for Digital Piano and Grand Piano<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 8,328.37 </strong></div>
        </button>
        <button type="submit" class="shop1 box1" id="p10" name="30">
            <div class="product-img">
            <img src="./Product-img/p10.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            ZIPPY Kids Piano Keyboard, 37 Keys Digital Piano for Kids,<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 13,325.89 </strong></div>
        </button>

    </div>
</div>
<div id="violin">
    <h1 class="title">Violin and Violin Accessories</h1>
    <div class="shop">
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v1.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            Cecilio 4/4 CVNAE-Black+SR Ebony Fitted Acoustic/Electric Violin in Metallic Black<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 18,397.42</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v2.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
            Cecilio CVN-320L Solidwood Ebony Fitted LEFT-HANDED Violin with D'Addario Prelude Strings, Size 4/4 (Full Size)<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 7,907.92</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v3.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Eastar Violin 4/4 Full Size for Adults, Violin Set for Beginners with Hard Case, Rosin, Shoulder Rest, Bow, and Extra Strings<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 12,486.67</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v4.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Aliyes Distinctive Artistic Violin Set for Beginners/Students/Kids/adults with Hard Case,Bow,Extra Strings (4/4/Full-size)<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 7,491.67</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v5.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Kinglos 4/4 Elegant Colored Ebony Fitted Solid Wood Violin Kit with Case, Shoulder Rest, Bow, Manual, Extra Bridge and Strings Full Size<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 14,984.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v6.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Electric Violins, MIRIO 4/4 Full Size Silent Black Electric Violin with Ebony Fittings, Solid Wood Metallic Violin Electric<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 8,324.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v7.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                    Poseidon Brazilwood Violin Bow, Hand Crafted by Professional Fiddle Bow <br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 3,329.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v8.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                    Cremona Violin (SV-800) <br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 55,413.70</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v9.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                    Violin Case 4/4 full size hard shell Light Strong Carbon fiber <br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 12,321.00</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/v10.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Jiayouy Violin Parts & Accessories 4/4 Violin DIY Kit for Students Beginners Music Lover Make Your Own Violin <br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 5,493.67</strong></div>
        </button>
    </div>
</div>
<div id="other">
    <h1 class="title">Music Production Accessories</h1>
    <div class="shop">
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o1.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                RØDE NT1 5th Generation Large-diaphragm Studio Condenser Microphone<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 20,729.25</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o2.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                MAONO Microphone with Studio Headphone Set 192kHz/24bit Vocal Condenser<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 7,907.92</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o3.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                PreSonus Eris E3.5-3.5" Near Field Studio Monitors (Pair) – Powered Desktop Speakers for Music Production, Recording, and Media...<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 7,491.67</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o4.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                PreSonus AudioBox 96 25th Anniversary Studio Recording Bundle with Studio One Artist DAW Music Production Software<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 16,649.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o5.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                ALABS Fxcaster Podcast Equipment Bundle, Podcast Mixer,All in One Podcast Starter Setup,7 Controls Soundboard Audio Interface with 25mm Diaphragm XLR...<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 16,649.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o6.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Hercules DJ Control Inpulse 300 | 2 Channel USB Controller, with Beatmatch Guide, DJ Academy and Full DJ Software DJUCED Included<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 18,699.37</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o7.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Synido MIDI Pad Beat Maker Machine with 16 RGB Beat Pads, USB Portable Mini MIDI Controller Pad<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 7,491.67</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o8.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Focusound 50 Pack Acoustic Foam Panels 1" x 12" x 12" Sound Proof Foam Panles Soundproofing Noise Cancelling Wedge Panels<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 3,329.17</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o9.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                Hercules DJControl Inpulse 200 MK2 — Ideal DJ Controller for Learning to Mix — Software and Tutorials Included.<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 10,780.88</strong></div>
        </button>
        <button type="submit" class="shop1 box1" name="1">
            <div class="product-img">
            <img src="./Product-img/o10.jpg" class = "box1-img" alt="piano img">
            </div>
            <div class="info"> 
                SwaykTech Studio Recording Microphone Isolation Shield with Pop Filter and Metal Tripod Stand<br>
            </div>
            <div class="price"><strong style="font-size: 25px; margin-top:5px;" >INR 3,662.17</strong></div>
        </button>
    </div>
</div>
</form>
</body>
</html>