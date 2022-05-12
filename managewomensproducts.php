<?php

//Establishing a connection

include("zarafashiondbconnect.php");

//Adding a new product

if (isset($_POST['add'])) {
	
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];



	if (empty($file)  && empty($name) && empty($price)) {
		echo "Nothing to add";
	}else{
		$query = "INSERT INTO womens_products(name,price,image,description) VALUES('$name','$price','$file','$description')";
		$res = mysqli_query($conn,$query);

		if ($res) {
		  move_uploaded_file($_FILES['image']['tmp_name'], "img/$file");

		  $name = "";
		  header("Location:womensproducts.php");
		}else{
			
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Women's Product</title>
</head>
<body>

	 <div class="container">
	 	<div class="col-md-12 d-flex justify-content-center ">
	 	
	 			<div class="col-md-4 bg-warning mt-4">
	 				<h3 class="text-center text-white">Add New Product</h3>
	 				<form method="post" enctype="multipart/form-data">
	 					<label>Choose Product Image</label>
	 					<input type="file" name="image" class="form-control">
	 					<label>Product Name</label>
	 					<input type="text" name="name" class="form-control">
	 					<label>Product Description</label>
	 					<input type="text" name="description" class="form-control">
	 					<label>Product Price</label>
	 					<input type="text" name="price" class="form-control">
	 					<input type="submit" name="add" class="btn btn-info my-5" value="Add New Product">
	 				</form>
	 		</div>
	 	</div>
	 </div>

</body>
</html>