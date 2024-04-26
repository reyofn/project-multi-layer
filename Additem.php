<?php
// Check if the user is an admin (you can implement your own authentication logic here)
$isAdmin = true; // Assuming the user is an admin in this example

// Define an empty array to store the new items
$newItems = [];

if ($isAdmin) {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];

        // Handle the uploaded image file
        $targetDirectory = 'uploads/'; // Directory where the uploaded images will be stored
        $targetFile = $targetDirectory . basename($_FILES['image']['name']);
        $uploadSuccess = move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

        if ($uploadSuccess) {
            // Image uploaded successfully, add the item to the new items array
            $newItems[] = ['name' => $name, 'image' => $targetFile];
            echo 'Item added successfully!';
        } else {
            echo 'Error uploading image.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
</head>
<body>
    <?php if ($isAdmin) { ?>
        <h1>Add New Item</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>
            <label for="image">Image:</label>
            <input type="file" name="image" required accept="image/*"><br><br>
            <input type="submit" value="Add Item">
        </form>
    <?php } else { ?>
        <p>You are not authorized to view this page.</p>
    <?php } ?>
</body>
</html>