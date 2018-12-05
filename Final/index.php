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
				<img class="welcome" src="images/welcome1.jpeg">
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
            <br>
               <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	if (empty($_POST['email'])) 
	{
		 echo '<h3 class="error">You forgot to enter your email address.</h3>';
	} else 
	{
		echo '<h3 id="save">Thank You!</h3>';
	}
            }
            ?>
            
			<main>
                <br>
				<h1>Hello friends and welcome to Tulip Clothing!</h1><br><br>
				<div class="floatleft">
				<p>We offer you newer way to express yourself by wearing a unique and comfortable
				clothes from our brand Tulip Clothing.<br><br>In our website, you will find casual, formal and youth clothes from pants, shorts, 
				dresses, skirts, and jackets with creative style and a range of colors of your preference that you will love it!<br><br>
				We are confident that our style will inspire you!<br><br>Come in and start to enjoy our fashionable  clothes.</p>
				<a href="about.php"><button>Read More</button></a>
				</div>
				<div id="click">
				<a href="about.php"><img src="images/tulip.jpeg" alt="Tulip Picture" width="300" height="400" align="right"></a>
				</div>
			</main><br><br><br><br><br><br><br><br><br><br><br><br>
            <div style="clear: both"></div>
			<footer>
				<blink>SIGNUP FOR OUR NEWSLETTER</blink>
				<form method="post" action="index.php">
							
				<label for="myEmail">E-mail:</label>
				<input type="email" name="email"><br><br>
				<input type="submit" value="Submit" id="mySubmit">
				</form><br>
				Copyright &copy 2018 Made By <a href="contact.php">Shobaki</a>.
			</footer>	
         
		</body>
</html>