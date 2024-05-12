<?php
// Include your database connection script
include 'database.php';

// Check if the search term is present
if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $searchTerm = mysqli_real_escape_string($con, trim($_GET['search']));

    // Your SQL query to fetch products based on the search term
    $query = "SELECT * FROM products WHERE title LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%'";
    $result = mysqli_query($con, $query);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='products'>";
        // Fetch each product and display
        while ($row = mysqli_fetch_assoc($result)) {
            // HTML structure for each product, including the image
            echo "<div class='product'>";
            echo "<img src='" . $row['image'] . "' alt='" . $row['title'] . "' />";
            echo "<h3>" . $row['title'] . "</h3>";
            echo "<p>$" . $row['price'] . "</p>";
            echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No products found matching your search criteria.</p>";
    }
} else {
    echo "<p>Please enter a search term.</p>";
}
?>
