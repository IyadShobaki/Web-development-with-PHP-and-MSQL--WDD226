<!DOCTYPE html>
<html lang="en">
		<head>
			<title>Tulip Clothing Store</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1.0" >
			<link rel="stylesheet" href="css/tulip.css">
			<style>
				p {
					text-align:center;
					max-width:80%;
					margin:auto;
				}
			</style>
		</head>
		<body>
			<header>
				<img class="welcome" src="images/about1.jpeg" alt="Store Picture">
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
                <br>
				<h1 id="about">About Us</h1>
                <br>
                <?php
               echo '<p>';
                $paragraph =
				 'Our story began long time ago. With lack of equipment, our brand was born.Our ambitious for a unique design brought our vision, and products to life.<br>
				We create something very special. We believe in quality, care, and creating unique products all our customers can enjoy.
				Colorful, creative, and inspired by what we see everyday. We hope they’ll inspire you too.
				We’re committed to inspiring personal style and helping our community and customers feel like the best version of themselves.';
                
                echo $paragraph;
                echo "</p>";
                    ?>
			</main>
            <div style="clear: both"></div>
			<footer>
				Copyright &copy 2018 Made By <a href="contact.php">Shobaki</a>.
			</footer>
		</body>
</html>