<?php 
	include 'database.php' ;
	$qr="select * from shout";
	$sh=mysqli_query($con,$qr);
		
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Shout It </title>
		<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	</head>
	
	<body>
		<div id="container">
			<header>
				<h1> Shout IT! Shout Box </h1>
			</header>
			<div id="shouts">
				<ul>
				<?php while($row = mysqli_fetch_assoc($sh)): ?> 
					<li class="shout"><span><?php echo $row['time']?></span> - <span> <?php echo $row['user']?> :<strong> <?php echo $row['msg']?> </strong></span> </li>
				
				 <?php  endwhile; ?>
				</ul>
			</div>
			<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif; ?>
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter your Name" />
					<input type="text" name="msg" placeholder="Enter your message" />
					<br>
					<input class="shout-btn" type="Submit" name="submit"  value="Shout It Out" />
					
				</form>
			</div>
		</div>
	</body>
</html>