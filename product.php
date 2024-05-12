<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Jewelry Store</title>
    <link rel="stylesheet" href="./styles.css"> <!-- Link to your CSS file for styling -->
    <style>.container6 {
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
            <h1>Arba Jewelry Store</h1>
          
            </div>
        <div class="container">
            <nav>
                <ul>
                <li><a href="./home.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./login.php">
                        <?php

                        if(isset($_SESSION['email'])){
                          echo 'Logout';
                        }
                        else{
                            echo 'Login';
                        }
                        ?>
                    </a></li>                </ul>
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
        <h2>Latest Blog Post</h2>
    </div>
</section>
    
    
    <section id="blog-posts">
        <div class="container">
            <article>
                <h3>10 Stunning Necklace Designs for Every Occasion</h3>
                <p>By Asrat  | January 15, 2024</p>
                <p>Discover the latest trends in necklace designs and find the perfect accessory for any event.</p>
                <form action="process_combined_submission.php" method="post">
    <label for="submission-type">Order your favorite jewelry here:</label>
    <select id="submission-type" name="submission-type" required>
        <option value="email">order</option>
        <!-- <option value="jewelry">Prescribe Jewelry</option> -->
    </select>

    <div id="email-fields">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="description">Order a jewelry you would like</label>
        <textarea id="description" name="description" placeholder="Describe the jewelry you would like to see in our shop"></textarea>
    </div>

    <button type="submit" class="btn">Submit</button>
</form>


<script>
    document.getElementById('submission-type').addEventListener('change', function() {
        var emailFields = document.getElementById('email-fields');
        var jewelryFields = document.getElementById('jewelry-fields');

        if (this.value === 'email') {
            emailFields.style.display = 'block';
            jewelryFields.style.display = 'none';
        } else if (this.value === 'jewelry') {
            emailFields.style.display = 'none';
            jewelryFields.style.display = 'block';
        }
    });
</script>

            </article>
            
           
            
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
            <p>&copy; 2024 Jewelry Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
