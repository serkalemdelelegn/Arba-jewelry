<?php
session_start();
?>

<?php
include_once('./database.php');
$sql = "SELECT * FROM products";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store</title>
    <link rel="stylesheet" href="./styles.css"> <!-- Link to your CSS file for styling -->
   <style>
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
    height: 90%;
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
                    <li><a href="./product.php">Product</a></li> <!-- Added link to the blog page -->
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    
                    <li><a href="./logout.php">Logout
                    </a></li>
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
        <h2>Welcome to our Jewelry Store</h2>
        <p>Elevate your style with our timeless jewelry pieces, crafted to perfection for moments that matter.</p>
        <a href="./shop.php" class="btn">Shop Now</a>
    </div>
</section>

    
    <section id="featured-products">
        <h2>Featured Products</h2>
        <div class="container">
            <?php
            $products = array();
            $counter = 0;
                if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    $products[] = $row;
                ?>
            <!-- Insert featured product thumbnails with links -->
            <div class="product">
                <img src="<?php echo './'.$row['image']  ?>" alt="Product 1">
                <h3><?php echo $row["title"] ?> </h3>
                <p><?php echo $row["price"]. 'ETB' ?></p>
                <a href="#" data-id="<?php echo $counter++ ?>" class="btn view-details"  data-modal-id="modal1">View Details</a>
            </div>
            <?php
                }
            }
            ?>
            
            <!-- Add more featured products -->
            
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 id="modalTitle">Neckless Details</h2>
                    <p id="modalDescription" >These are elegant Neckless. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p id="modalPrice" >$99.99</p>
                </div>
            </div>
            
        </div>
    </section>
    
    <section id="promotion">
        <div class="container">
            <h2>Special Promotion</h2>
            <p>Get 20% off on selected items. Limited time offer!</p>
            <a href="./product.php" class="btn">Shop Now</a>
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
                <!-- Add more pages as needed -->
            </ul>
            <p>&copy; 2024 Arba Jewelry Store. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js">
    </script>
    <script> 
     var buttons = document.querySelectorAll('.btn');
     buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the value of the "data-id" attribute of the clicked button
                var id1 = this.getAttribute('data-id');
                console.log(id1);
                var products = <?php echo json_encode($products); ?>;
                var tit = document.getElementById('modalTitle');
                var des = document.getElementById('modalDescription');
                var pri = document.getElementById('modalPrice');
                tit.innerHTML = products[id1]['title'];
                des.innerHTML = products[id1]['description'];
                pri.innerHTML = products[id1]['price'];
            });
        });
    </script>
</body>
</html>
