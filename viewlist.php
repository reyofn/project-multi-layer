
<?php
// Check if the user is an admin (you can implement your own authentication logic here)
$isAdmin = true; // Assuming the user is an admin in this example

if ($isAdmin) {
    // Fetch the list of existing items from your database or any other data source
    $existingItems = [
        ['id' => 1, 'name' => 'Normal Table', 'image' => 'item1.jpg'],
        ['id' => 2, 'name' => 'VIP Table', 'image' => 'item2.jpg'],
        ['id' => 3, 'name' => 'Outdoor Table', 'image' => 'item3.jpg'],
        // ... more items
    ];

    // Display the list of existing items
    echo '<h1>List of Table</h1>';
    echo '<ul>';
    foreach ($existingItems as $item) {
        echo '<li>';
        echo '<h2>' . $item['name'] . '</h2>';
        echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '" />';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'You are not authorized to view this page.';
}
?>