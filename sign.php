<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Jewelry Store</title>
    <link rel="stylesheet" href="./styles.css"> 
    <style>
   
   .container1 {
    width: 300px;
    margin: 100px auto;
    background-color: rgb(217, 216, 233);
    padding: 20px;
    border-radius: 5px;
    border-color: #0056b3;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
    margin-top: 20px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
</head>
<?php
include_once('./database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Validate form data (you can add more validation as needed)
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }
    // Hash the password (you should use bcrypt or another secure hashing algorithm)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL statement to insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    if ($stmt->execute()) {
        header('location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
<body>
    <header>
        <div class="container">
            <h1> Arba Jewelry Store</h1>
            <!-- <nav>
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./product.php">Blog</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav> -->
           
        </div>
    </header>

    <div class="container1">
        <form action="./sign.php" method="post">
            <h2>Signup</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn">Signup</button>
            <p>Already have an account? <a href="./login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
