<?php 

require 'config.php';

// Search functionality
if (isset($_GET['search'])) {
    $searchTerm = $_GET['searchTerm'];

    $sql = "SELECT * FROM product WHERE prod_name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);
} else {
    // Display all items by default
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
}
?>

<h2>Search Results</h2>
<ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['prod_name'] . " " . "Php" . $row['prod_price'] . " </li>";
               
            }
        } else {
            echo "<li>No results found</li>";
        }
        ?>
    </ul>