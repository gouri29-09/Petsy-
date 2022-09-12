<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petsy </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    
    
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paw"></i> Petsy <br><small>we love them like you do</small> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="cout.html" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
   
    <form action="code.php" method="Post" class="login-form">
        <h3>sign up</h3>
        <input type="email" name="email" placeholder="enter your email" id="" class="box">
        <input type="password" name="password_1" placeholder="enter your password" id="" class="box">
        <input type="password" name="password_2" placeholder="confirm your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" name="reg_user" value="sign up" class="btn">
        <div class="links">
            <a href="#">forget password</a>
            <a href="login.php">Log in</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <img src="./image/p2.jpg" style="width:1000px; padding-top: 0px;"> 
    
    <div class="content" >
        
        <h3> <span>hi </span>welcome to our pet shop</h3>
        <a href="#shop" class="btn">shop now</a>
    </div>
</img>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="">
    </div>

    <div class="content">
        <h3>premium <span>pet food</span> manufacturer</h3>
        <p>For high-quality pet food, you can rely on our carefully sourced, selected, and processed meat by-products..</p>
        <a href="about.html" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/dog_food.png" alt="">
    </div>

    <div class="content">
        <h3> <span>air dried</span> dog food </h3>
        <p>Air-dried dog food is the middle ground between dehydrated and freeze-dried. 

            Air-dried dog food means that all the moisture is removed from the ingredients through 
            evaporation via the air-drying process but enough moisture remains in the product to make it 
            palatable and not requiring rehydration.</p>
        <div class="amount">₹2000.00 - ₹4000.00</div>
        <a href="#shop"> <img src="image/shop_now_dog.png" alt=""> </a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>air dried</span> cat food </h3>
        <p>Crafted to match your cat’s biological needs, these simple air-dried 
            recipes feature 1-2 protein sources. Perfect for all breeds and life stages, 
            especially selective or food sensitive cats.</p>
        <div class="amount">₹3000.00 - ₹7000.00</div>
        <a href="#shop"> <img src="image/shop_now_cat.png" alt=""> </a>
    </div>

    <div class="image">
        <img src="image/cat_food.png" alt="">
    </div>

</div>

<!-- dog and cat food banner section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading"> our <span> products </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/product.html">
                <img src="image/product_01.jpg" alt="image"> </a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹1000.00 - ₹2000.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/producttwo.html">  
                <img src="image/product_02.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹1500.00 - ₹3000.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/pro3.html">
                <img src="image/product_03.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹2000.00 - ₹4000.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/pro4.html">
                <img src="image/product_04.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹1000.00 - ₹3000.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/pro5.html">
                <img src="image/product_05.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹1500.00 - ₹3000.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="Gouri/pro6.html">
                <img src="image/product_06.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> ₹2000.00 - ₹5000.00 </div>
            </div>
        </div>

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>dog boarding</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>cat boarding</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>activity exercise</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>health care</h3>
            <a href="services.html" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>3,000</div>
            <a href="cout.html" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>9,000</div>
            <a href="cout.html" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>15,000</div>
            <a href="cout.html" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/contact_img.png" alt="">
    </div>

    <form action="code.php" method ="POST">
        <h3>Happy Customer!!!!!!!....</h3>
        <input type="text" name="name" placeholder="your name" class="box">
        <input type="email" name="email" placeholder="your email" class="box">
        <input type="tumber" name="ph_no" placeholder="your number" class="box">
        <textarea name="message" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="c_submit" value="send message" class="btn">
    </form>

</section>

<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn btn-dark"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> <span>Created by | Gouri Hiremath  |   Shruti Minocha   | all rights reserved!     </span>  </div>

</section>




















<!-- custom js file link  -->
<script src="script.js"></script>
<script src="bootstrap.bundle.js"></script>

</body>
</html>