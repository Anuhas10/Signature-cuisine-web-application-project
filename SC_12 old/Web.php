<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Cuisine</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!--Custom css file link-->
    <link rel="stylesheet" href="Web_Front-home.css">
    
</head>
<body>

<!-- Header Section Starts-->

<header>

    <a href="#" class="logo">Signature Cuisine</a>

    <nav class="navbar">
        <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#staff">Staff Members</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#order">Order</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="fas fa-bars"></div>

</header>

<!--Header section Ends-->


<!--Home section Starts-->

<section class="home" id="home">

<div class="content">
    <h1>Signature Cuisine</h1>
    <p>The pub now has two restaurants serving anything from sausages to shark steaks</p> 
    <a href="#"><button>Explore</button></a>


</section>


<!--About section starts-->

<section class="about" id="about">

<h1 class="heading">About Us</h1>
<h3 class="title">Buy Some Food and Enjoy With Your Family</h3>

<div class="row">
    
    <div class="content">
        <h3>WE Take Care About Your Hospitality Convenience</h3>
        <p>Since our modest beginnings in 2005 with a little space in Torontos stylish Yorkville locale, 
            Organization Names development has been enlivened with the energy to cook and serve solid, Indian-roused takeout food.</p>
        <a href="#"><button>Learn More</button></a>
    </div>

    <div class="image">
        <img src='images/04.jpg' alt="">
    </div>

</section>

<!--about section ends-->

<!--staff member section starts-->

<section id="staff" class="staff">

<h1 class="heading">Our Staff Members</h1>
<h3 class="title">Meet our valuable staff</h3>

<div class="card-container">
    
    <div class="card">
        <img src="images/05.jpg" alt="">
        <h3>Mr.Anuhass</h3>
        <p>CEO of the Restuarant</p>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

    <div class="card">
        <img src="images/06.png" alt="">
        <h3>Ms.Onarli</h3>
        <p>Marketing Manager</p>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

    <div class="card">
        <img src="images/07.jpg" alt="">
        <h3>Mr.Samitha</h3>
        <p>Main Chef</p>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

    <div class="card">
        <img src="images/08.jpg" alt="">
        <h3>Mr.Aadesh</h3>
        <p>Bakery Chef</p>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

    <div class="card">
        <img src="images/09.jpg" alt="">
        <h3>Mr.Minidu</h3>
        <p>Branch Manager</p>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

</div>

</section>

<!--Staff member section ends-->



<!--Services section starts-->

<section class="services" id="services">

    <h1 class="heading">Services</h1>
    <h3 class="title">Best of Restuarant field</h3>


<div class="all-box">
    <div class="box">
        <h3>Dine- In</h3>
        <p>customers will be able to order dine-in desserts by touching the screen</p>
        <a href="#"><button>View</button></a>
    </div>

    <div class="box">
        <h3>Home Delivery</h3>
        <p>Straight out of the oven to your doorstep</p>
        <a href="#"><button>View</button></a>
    </div>

    <div class="box">
        <h3>Outdoor Catering</h3>
        <p>The restaurant has a catering and delivery service</p>
        <a href="#"><button>View</button></a>
    </div>

    <div class="box">
        <h3>Drive-thru</h3>
        <p>In route, he pulled into a fast food drive-through and ordered two hamburger meals.</p>
        <a href="#"><button>View</button></a>
    </div>

    <div class="box">
        <h3>Bar & Lounge</h3>
        <p>cAt six o'clock we pulled off the highway and found a family style restaurant in a small Maryland town.</p>
        <a href="#"><button>View</button></a>
    </div>

</div>

</section>

<!--services section ends-->




<!--order section starts-->

<section class="order" id="order">

    <h1 class="heading">Orders</h1>
    <h3 class="title">Place and order and taste your Food!</h3>

    <div class="all-face">

        <div class="face">

    <div class="form-container">
        <form name="customerform" method="post" action="login.php">

            <h3>Customer Login</h3>
            <br>

            <h2>Username : <input type="text" name="username" required placeholder="enter your email"></h2>
            <br>

            <h2>Password : <input type="password" name="password" required placeholder="enter your password"></h2>
            <br>

            <input type="submit" name="submit" value="login now" class="form-btn">
            <br>
            <br>
            <br>

            <p>Don't have an account? <a href="Register.php">register now</a></p>

<?php

/*$conn = mysqli_connect('localhost','root','','sig_cuisine');

if(!$conn) {
    die("Clould not connect : " .mysqli_error($conn));

}

if($conn) {
    echo"<font color='#009900'> Database connected Successfully";
    echo"<br/>";
}*/

include "Connection.php";


?>
        </form>
    </div>

    </div>

    <div class="face">
        <div class="form-container">
            <form name="staffform" method="post" action="Login.php">
                <h3>Staff Login</h3>

                <h2>Username : <input type="text" name="username" required placeholder="Enter Your Username"> </h2><br>
                <h2>Password : <input type="password" name="password" required placeholder="Enter Your Password"> </h2><br>

                <input type="submit" name="btn_staff" value="login now" class="form-btn">
            </form>
<?php
            
   /* $conn = mysqli_connect('localhost','root','','sig_cuisine');

    if(!$conn){
    die("Could not connect : ".mysqli_error($conn));
    }

    if($conn){
    echo"<font color='#009900'>Database connected successfully";
    echo"<br/>";
    }*/

include "Connection.php";

?>
        </div>
    </div>

    <div class="face">
            <div class="form-container">
                <form name="adminform" method="post" action="login.php">

                <h3>Admin Login</h3>

                <h2>Username : <input type="text" name="username" required placeholder="Enter Your Username"></h2><br>
                <h2>Password : <input type="password" name="password" required placeholder="Enter Your Password"></h2><br>

                <input type="submit" name="btn_admin" value="Login now" class="form-btn">
                </form>
            </div>
        </div>

    </div>

</section>


<!--order section ends-->


<!--review section starts-->

<section class="review"  id="review">

    <h1 class="heading">Review</h1>
    <h3 class="title">Here are Customer Reviews</h3>

    <div class="box-container">

        <div class="box">
            <img src="images/17.jpg" alt="">
            <h3>Lushantha</h3>
            <p>nice food and amazing Staff</p>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/18.jpg" alt="">
            <h3>Priyantha</h3>
            <p>Amazing delicious food</p>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/19.jpg">
            <h3>Sandaru</h3>
            <p>awesome food i ever had</p>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/20.jpg">
            <h3>Lokitha</h3>
            <p>Nicve food but want more variety of menu</p>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
</section>


<!--review sections ends-->


<!--contact section starts-->

<section class="contact" id="contact">

    <h1 class="heading">Contact</h1>
    <h3 class="title">Hey! We gladly wanna know about your thoughts</h3>

    <div class="form-container">
        <form method="post" action="Query_Web.php">
            <input type="text" name="C_name" placeholder="Customer Name">
            <input type="email" name="C_email" placeholder="Customer Email">
            <input type="number" name="C_contact" placeholder="Customer Contact">
            <input type="text" name="C_branch" placeholder="Customer Branch">
            <textarea name="C_message" id="" cols="30" rows="10" placeholder="Message to Us"></textarea>
            <input type="submit" name="submit" value="Tell Us">
        </form>
    </div>
</section>

<!--Contact section ends-->

<section class="footer">

    <div class="icons">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Den" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://github.com/" class="fab fa-github"></a>
        <a href="https://www.tiktok.com/en/" class="fab fa-tiktok"></a>
    </div>

    <div class="credit">Created by <span>Mr. Arjuna Anuhass</span></div>
</section>


    <!--JavaScript link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Custom Javascript link-->
    
    <script src="Web.js"></script>


    
</body>
</html>