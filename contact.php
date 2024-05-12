<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Jewelry Store</title>
    <link rel="stylesheet" href="./styles.css">
    <style> 
    /* CSS for adjusting the size of social media icons */
.social-links li {
    display: inline-block;
    margin-right: 10px; /* Adjust margin between icons */
}

.social-links li img {
    width: 40px; /* Adjust width of the images */
    height: auto; /* Maintain aspect ratio */
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
            <h1>Jewelry Store</h1>
            
        <div class="container">
            <nav>
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                  
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
        <h2>Contact Us</h2>
        <p>Have a question or inquiry? Feel free to reach out to us.</p>
      
    </div>
    <br>
    <hr>
    <section id="contact-info">
        <div class="container">
            <div class="info">
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">arba2024@gmail.com</a></p>
            </div>
            <div class="info">
                <h3>Phone</h3>
                <p><a href="tel:+123456789">+251-963-251-256</a></p>
            </div>
            <div class="info">
                <h3>Address</h3>
                <p>shecha, Arbaminch, Ethiopia</p>
            </div>
            <div class="info">
                <h3>Map</h3>
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63485.00404026447!2d37.567877749999994!3d6.0204253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17babc91df1c1f4b%3A0x192439451e905b6a!2sArba%20Minch!5e0!3m2!1sen!2set!4v1708667592118!5m2!1sen!2set" ></iframe>
            </div>
            <div class="info">
                <h3>Follow Us</h3>
                <ul class="social-links">
                    <li><a href="serkalemdelelegn2020@gmail.com"><img src="./image/email2.jpg" alt="Email"></a></li>
                    <li><a href="+251963251256"><img src="./image/Whatsapp2.jpg" alt="Phone"></a></li>
                    <li><a href="https://www.facebook.com"><img src="./image/facebook2.jpg" alt="Facebook"></a></li>
                    <li><a href="https://www.instagram.com"><img src="./image/instagram2.jpg" alt="LinkedIn"></a></li>
                  
                </ul>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./shop.php">Shop</a></li>
                <li><a href="./product.php">Blog</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./contact.php">Contact</a></li>
            
            </ul>
            <p>&copy; 2024 Arba Jewelry Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
