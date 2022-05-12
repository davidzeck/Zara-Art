<?php

include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>
	
   <title>Women's Products</title>
	
</head>
<body>

	<div class = "container-fluid">
		<div class = "col-md-12">
			<div class = "row">
				<div class ="col-md-6">
			      <h2 class = "text-center">Outfits Menu</h2>

			      <div class="col-md-12">
			      	<div class ="row">
			      		

			      <?php

			      $query = "SELECT * FROM womens_products";
			      $result = mysqli_query($conn,$query);
                  $check_outfits = mysqli_num_rows($result) > 0;

                  if($check_outfits)
                  {
			          while($row = mysqli_fetch_assoc($result))
                  {
                      ?>

    			      	<div class = "col-md-4">

			      	      <form method = "post" action = "womens.php?id=<?=$row['id']?>">
			      		     <img src = "img/<?= $row['image'] ?>" style = 'height: 150px; width: 150px;'>
			      		     <h5 class="text-center"><?= $row['name']; ?></h5>
			      		     <h5 class="text-center">KSH <?=number_format($row['price'],2);?></h5>
			      		     <input type="hidden" name="name" value="<?= $row['name'] ?>">
			      		     <input type="hidden" name="price" value="<?= $row['price'] ?>">
			      		     <input type="number" name="quantity" value="1" class="form-control">
			      		     <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add To Cart">
			      	     </form>
			          </div>
                      <?php

			          }
                    }
                     
                    else
                     {
                         echo "No outfits available";
                     }
                    
			        ?>

		       </div>
		       </div>
			      	
			    </div>
		      


		       
	       </div>
	   </div>
	</div>

	

</body>
</html>