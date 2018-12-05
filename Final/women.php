<?php
session_start();
$conn = mysqli_connect("localhost", "root", "Password", "Product_Details");

?>
<!DOCTYPE html>
<html lang="en">
		<head>
			<title>Tulip Clothing Store</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1.0" >
			<link rel="stylesheet" href="css/tulip.css">
		</head>
		<body>
			<header>
				<div class="container">
				<img src="images/women2.jpeg" alt="Women Pic" width="1000px" height="200px">
				<div class="overlay">
				<img src="images/women1.jpeg" alt="Women pic1" width="1000px" height="200px">
				</div>
				</div>
			</header>
			<nav>
				<ul>
					<li><div class="logo"></div>       </li>
					<li><a href="index.php">Home</a>   </li>
					<li><a href="men.php">Men</a>      </li>
					<li><a href="women.php">Women</a>      </li>
					<li><a href="about.php">About</a>      </li>
					<li><a href="contact.php">Feedback</a>      </li>
                     <li><a href="view_contacts.php">Reviews</a>      </li>
				</ul>
			</nav>
			<main>
				<table class="products">
					  <tr>
						<th><img src="images/womena222.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
						<th><img src="images/womenb667.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
						<th><img src="images/womenc887.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
					  </tr>
					  <tr>
						<td>Refuge Skinny Boyfriend Destroyed Jeans</td>
						<td>Wrapped Open Back Jumpsuit</td>
						<td>Lettuce Trim Skimmer Top</td>
					  </tr>
                     <tr>
						  <?php
                       $q = " select * from Product where id = 7";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add1" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
						  <?php
                       $q = " select * from Product where id = 8";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                           <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add2" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
						  <?php
                       $q = " select * from Product where id = 9";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                           <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add3" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
					  </tr>						 
				</table>
				<table class="products">
					  <tr>
						<th><img src="images/029a6968ee2e.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
						<th><img src="images/skirts3.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
						<th><img src="images/81kiajrGGrL.jpeg" alt="Women cloth pic" width="200px" height="300px"></th>
					  </tr>
					  <tr>
						<td>Half Sleeves Maxi Dress</td>
						<td>Midi Skirt</td>
						<td>Woven Shirt</td>
					  </tr>
					  <tr>
						  <?php
                       $q = " select * from Product where id = 10";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                           <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add4" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
						  <?php
                       $q = " select * from Product where id = 11";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                           <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add5" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
						  <?php
                       $q = " select * from Product where id = 12";
                        $r = mysqli_query($conn,$q);
                        if(mysqli_num_rows($r) > 0){
                          $row = mysqli_fetch_array($r)
                                ?>
						<td><form method="post" 
							action="women.php">
                            <h5><?php echo $row["price"];?></h5>
                            <input type="text" name="quantity" value="1">
                           <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                            <input type="submit" name="add6" value="Add to Cart">
							</form></td>
                          <?php
                        }
                        
                    ?>
					  </tr>				 
				</table>	
			
            <div style="clear: both"></div>
            <h3>Shopping Cart Details</h3>
                <table>
                    <tr>
                         <th >Product Name</th>
                        <th >Quantity</th>
                        <th >Price Details</th>
                        <th>Total Price</th>
                        <th>Remove Item</th>
                    </tr> 
                    <?php
                    
                    $value = array('add1','add2','add3','add4','add5','add6');
                    
                    
                   foreach ($value as $v) {
                
                    if (isset($_POST[$v])){
                    $id = $_POST["hidden_id"];
                    $pname = $_POST["hidden_name"];
                    $qty =  $_POST["quantity"];
                    $price = $_POST["hidden_price"];
//                    $total = $qty * $price;
//                    $subtotal =+ $total;
                    
                    if (isset($_SESSION["cart"])){
                       $item_array_id = array_column($_SESSION["cart"], $id);
                     if(!in_array($id, $item_array_id)){
                         $count = count($_SESSION["cart"]);
                         $item_array = array(
                        'item_id' => $id,
                        'item_name' => $pname,
                        'item_qty' => $qty,
                        'item_price' => $price
                        );
                         echo '<h6 id="godown"><a href="#bottom">Go to your order</a></h6>';
                         $_SESSION["cart"][$count] = $item_array;
                         
                     }else{
                         echo "Item Already Added!";
                         echo '<a href="women.php">Women</a>';
                     }
                    }
                    else{
                        $item_array = array(
                        'item_id' => $id,
                        'item_name' => $pname,
                        'item_qty' => $qty,
                        'item_price' => $price
                        );
                        $_SESSION["cart"][0] = $item_array;
                    }
                     
                    }
                   }
                    if(isset($_GET["action"])){
                        if($_GET["action"] == "delete"){
                            foreach($_SESSION["cart"] as $keys => $values){
                              if($values["item_id"] == $_GET["id"])  {
                                unset($_SESSION["cart"][$keys]);  
                              }
                            }
                        }
                    }
                    
                        if(isset($_GET["action"])){
                        if($_GET["action"] == "end_session"){
                       foreach($_SESSION["cart"] as $keys => $values){
                             
                                unset($_SESSION["cart"][$keys]);  
                              
                            }
                        }
                    }
                        
                    
                       if(!empty($_SESSION["cart"])){
                           $total = 0;
                           foreach($_SESSION["cart"] as $keys => $values){
                        
                    ?>
                    <tr>
                       
                        <td><?php echo $values["item_name"];?></td>
                        <td align="center"><?php echo $values["item_qty"]; ?></td>
                        <td>$ <?php echo $values["item_price"]; ?></td>
                        <td>$ <?php echo number_format($values["item_qty"] * $values["item_price"], 2); ?> </td>
                        <td><a href="women.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Remove</span></a></td>
                    
                    </tr>
                    <?php
                      $total = $total + ($values["item_qty"] * $values["item_price"] );
                           }
                           ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <th align="right">$ <?php echo number_format($total, 2); ?></th>
                        <td></td>
                    </tr>
                    <?php
                       }
                    ?>
                     </table>
			 <h6 class="endsession"><a href="women.php?action=end_session">End Session</a></h6>
                <div id="bottom"></div>
                 </main>
             <div style="clear: both"></div>
			<footer>
				Copyright &copy 2018 Made By <a href="contact.php">Shobaki</a>.
			</footer>	
		</body>
</html>