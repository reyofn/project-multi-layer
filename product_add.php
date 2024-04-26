
 <?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tables';

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tables";

// Get form data
$table_description = $_POST['table_description'];
$Price = $_POST['price'];


// Insert new book into the database
$sql = "INSERT INTO Tables (table_description, price) VALUES ('$table_description', '$Price')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Add a New Table</h1>";
    echo "<strong>table added successfully!</strong><br>";
    
    // Display the book table
    echo "<hr>";
    echo "<table border='1'>";
            echo "<tr><th>table_description</th> <td>" .$_POST['table_description'] . "</td></tr>";
            echo "<tr><th>Price</th> <td>" .$_POST['price']. "</td></tr>";
            
    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
 
