
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
</head>
<header>
<div id="header_div">
<br/>
<div>
<ul id="navlist">
<li><a href="product_admin,php">Products</a></li>
<li><a href="product_add.html">Add product</a></li>
<li><a href="index.html">log out</a></li>
</ul>
</div>
</header>

<body>
<div id="login_div">
<form id="form" method="post" action="product_add.php">
<h2>Add product</h2>
<p><input class="input_add" name="name" type="text" placeholder="Table description" required></p>
<p><input class="input_add" name="price" type="number" placeholder="Price" required></p>
<p><input class="input_add" name="id" type="number" placeholder="ID" required></p>

   <h3>Table image</h3>
<p><input class="input_add" name="uploadedFile" type="file" ></p> 

<p><input id="button" type="submit" value="Add"></p>
<p class="label_form"><label></label></p>

</form>
</div>
</body>
</html>




