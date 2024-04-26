<?php
// Check if the user is an admin (you can implement your own authentication logic here)
$isAdmin = true; // Assuming the user is an admin in this example

// Existing item details (dummy data)
$existingItem = ['id' => 1, 'name' => 'Item 1', 'image' => 'item1.jpg'];

if ($isAdmin) {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];

        // Handle the uploaded image file
        if (!empty($image)) {
            $targetDirectory = 'uploads/'; // Directory where the uploaded images will be stored
            $targetFile = $targetDirectory . basename($_FILES['image']['name']);
            $uploadSuccess = move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

            if (!$uploadSuccess) {
                echo 'Error uploading image.';
                exit;
            }

            // Update the image path if a new image is uploaded
            $existingItem['image'] = $targetFile;
        }

        // Update the item name
        $existingItem['name'] = $name;

        echo 'Item updated successfully!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <?php if ($isAdmin) { ?>
        <h1>Edit Item</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $existingItem['name']; ?>" required><br><br>
            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*"><br><br>
            <input type="submit" value="Update Item">
        </form>
    <?php } else { ?>
        <p>You are not authorized to view this page.</p>
    <?php } ?>
</body>
</html>