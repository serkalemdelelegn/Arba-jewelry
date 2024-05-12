<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Arba Jewelry Store</title>
    <link rel="stylesheet" href="./styles.css">
     <!-- Link to your CSS file for styling -->
     <style>
         body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
       h3 {
    color: #ffd700; /* Golden color */
    position: relative;
     display: inline-block;
}

h3::before,
h3::after {
    content: '';
    position: relative;
    height: 3px; /* Height of the decoration */
    width: 50%; /* Width of the decoration */
    top: 50%; /* Positioning it halfway vertically */
    background-color: rgba(255, 215, 0, 0.5); /* Light golden color */
}

h3::before {
    left: 0; /* Position it on the left side of the title */
}

h3::after {
    right: 0; /* Position it on the right side of the title */
}
.branding {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .branding h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .branding p {
            font-size: 18px;
            color: #666;
        }
        .social-links li {
    display: inline-block;
    margin-right: 10px; /* Adjust margin between icons */
}

.social-links li img {
    width: 40px; /* Adjust width of the images */
    height: auto; /* Maintain aspect ratio */
}
.about-section h3 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 16px;
            color: #777;
            line-height: 1.8;
        }
        .container6 {
    background-color: transparent;
    color: goldenrod; /* Text color */
    padding: 20px;
    /* border: 2px solid goldenrod; Border color */
    border-radius: 10px; 
}

.container6 h2, .container6 p {
    overflow: hidden; /* Hide overflowing content */
}

/* Apply animation to each word */
.container6 h2 span, .container6 p span {
    display: inline-block;
    position: relative;
    animation: moveWords 1s forwards; /* Apply animation to each word */
}

/*Animation for words */
@keyframes moveWords {
    from {
        opacity: 0;
        transform: translateX(100%); /* Initial position: move from right */
   }
    to {
        opacity: 1;
        transform: translateX(0); /* Final position: no translation */
    }
}

.container6 .btn {
    background-color: goldenrod; /* Button background color */
    color: #fff; 
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.container6 .btn:hover {
    background-color: darkgoldenrod; 
} 
.video-wrapper {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: top;
    justify-content: top;
    margin-top: 0;
  }

  video {
  
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 70%;
    object-fit: cover;
    z-index: -1;
  }


     </style>
</head>
<body>
    <header>
        <div class="container">
            
            </div>
        <div class="container1">
            <h1>Arba Jewelry Store</h1>
            <nav>
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./logout.php">Log out</a></li>
                    
                    
                    <!-- Add more navigation links as needed -->
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="banner" class="video-section">
    <div class="video-background">
        <video autoplay loop muted>
            <source src="./video_new.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container6">
        <h2>About Us</h2>
        
    </div>
</section>
    
    <section id="about">
        <div class="container3">
            <br><hr>
            <h3>Our Story</h3>
            <p>Arba Jewelry Store draws its inspiration from the abundant springs found in our region, known for their timeless beauty and endless flow of natural elegance.
                 Each piece crafted at Arba reflects the rich heritage and allure of these springs, embodying a sense of vitality and rejuvenation. With a commitment to exquisite craftsmanship and attention to detail, our collection captures the essence of these springs, offering jewelry that exudes sophistication and charm. 
                Step into Arba Jewelry Store and experience the essence of our region's natural wonders transformed into captivating adornments that stand the test of time.</p>
            
            <h3>Our Mission</h3>
            <p>At Arba Jewelry Store, our mission is to inspire and empower individuals to express their unique style and personality through exquisite jewelry pieces.
                 We are dedicated to providing exceptional craftsmanship, unparalleled quality, and timeless designs that surpass expectations and create lasting memories. 
                 With a commitment to sustainability and ethical practices, we strive to foster a sense of responsibility towards our planet and communities. 
                 Our goal is to cultivate meaningful relationships with our customers, offering personalized service and guidance to ensure a memorable and delightful shopping experience.
                 Through our passion for beauty and elegance, we aim to enrich lives and celebrate the artistry of fine jewelry, making every moment special and every piece cherished.</p>
        </div>
    </section>
    <div class="info">
                <h3>Follow Us</h3>
                <ul class="social-links">
                    <li><a href="arba2024@gmail.com"><img src="./image/email2.jpg" alt="Email"></a></li>
                    <li><a href="+251963251256"><img src="./image/Whatsapp2.jpg" alt="Phone"></a></li>
                    <li><a href="https://www.facebook.com"><img src="./image/facebook2.jpg" alt="Facebook"></a></li>
                    <li><a href="https://www.linkedin.com"><img src="./image/instagram2.jpg" alt="LinkedIn"></a></li>
                  
                </ul>
            </div>
    <footer>
        <div class="container4">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./shop.php">Shop</a></li>
                <li><a href="./product.php">Blog</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <!-- Add more pages as needed -->
            </ul>
            <p>&copy; 2024 Jewelry Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
