<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Online Book Shopping</title>
<link rel="icon" type="image/png" href="images/logo.png" sizes="16x16">
<link rel="icon" type="image/png" href="images/logo.png" sizes="32x32">
</head>

<body>
<div id="container">
	<div id="header">
	<img width="8%" src="images/logo.png" alt="web developer directory">
        <h1><span class="blue-text">Bay</span> OfBooks</h1>
		<a href="cart.php"><img width="20px" src="cart.png" style="margin-left:680px;margin-top:-25px;"></a>
        <h3 style="color:white">
		<?php
			include 'connect.php';
			session_start();
			if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']) 
			{
				echo '<br><br><div style="margin-left:380px;position:absolute; color:#001e4f">Welcome to Bay Of Books, '.$_SESSION['name'].'</div>';
				echo '<a href="order.php"><div class="ab" style="font-size:15px; position:absolute;margin-left:775px;margin-top:-15px;width:auto">My Orders</div></a>';
				echo '<a href="session_destroy.php"><div class="ab" style="font-size:15px;position:absolute;margin-left:870px;margin-top:-15px; width:auto">Logout</div></a>';
			}
			else
			{
				echo "<br><br>Welcome to Bay Of Books, Guest";
				echo"<script>window.open('index.php','_self','')</script>";	
			}
		?>
		</h3>
     </div><!--header end-->
	 
	  <ul class="menu">
		<li class="dropdown">
			<a href="index1.php" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Authors</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="author1.php?action=Agatha Christie">Agatha Christie</a></td>
						<td><a href="author1.php?action=Adolf Hitler">Adolf Hitler</a></td>
						<td><a href="author1.php?action=B. K. Karkra">B. K. Karkra</a></td>
						<td><a href="author1.php?action=Bruce Barnbaum">Bruce Barnbaum</a></td>
					</tr>
					<tr>
						<td><a href="author1.php?action=Chetan Bhagat">Chetan Bhagat</a></td>
						<td><a href="author1.php?action=Chitra Banerjee">Chitra Banerjee </a></td>
						<td><a href="author1.php?action=Dalai Lama">Dalai Lama</a></td>
						<td><a href="author1.php?action=Dale Carnegie">Dale Carnegie</a></td>
					</tr>
					<tr>
						<td><a href="author1.php?action=Good Earth">Good Earth</a></td>
						<td><a href="author1.php?action=H.C. Verma">H.C. Verma</a></td>
						<td><a href="author1.php?action=J.K.Rowling">J.K.Rowling</a></td>
						<td><a href="author1.php?action=Karnika Seth">Karnika Seth</a></td>
					</tr>
					<tr>
						<td><a href="author1.php?action=Mahesh M Goyani">Mahesh M Goyani</a></td>
						<td><a href="author1.php?action=Markus Zusak">Markus Zusak</a></td>
						<td><a href="author1.php?action=Norman Vincent">Norman Vincent</a></td>
						<td><a href="author1.php?action=Rick Riordan">Rick Riordan</a></td>
					</tr>
					<tr>
						<td><a href="author1.php?action=Robin Sharma">Robin Sharma</a></td>
						<td><a href="author1.php?action=Sanjeev Kapoor">Sanjeev Kapoor</a></td>
						<td><a href="author1.php?action=Saraswati Nagpal">Saraswati Nagpal</a></td>
						<td><a href="author1.php?action=Shipra Khanna">Shipra Khanna</a></td>
					</tr>
					<tr>
						<td><a href="author1.php?action=Sidney Sheldon">Sidney Sheldon</a></td>
						<td><a href="author1.php?action=Stephenie Meyer">Stephenie Meyer</a></td>
						<td><a href="author1.php?action=Walter Isaacson">Walter Isaacson</a></td>
						<td><a href="author1.php?action=William Shakespeare">William Shakespeare</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Publisher</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="publication1.php?action=Arihant">Arihant</a></td>
						<td><a href="publication1.php?action=Bharati Bhawan">Bharati Bhawan</a></td>
						<td><a href="publication1.php?action=Bloomsbury">Bloomsbury</a></td>
					</tr>
					<tr>
						<td><a href="publication1.php?action=Brown">Brown</a></td>
						<td><a href="publication1.php?action=Campfire">Campfire</a></td>
						<td><a href="publication1.php?action=Fingerprint">Fingerprint</a></td>
					</tr>
					<tr>
						<td><a href="publication1.php?action=Harper">Harper</a></td>
						<td><a href="publication1.php?action=Hodder And Stoughton">Hodder And Stoughton</a></td>
						<td><a href="publication1.php?action=Jaico">Jaico</a></td>
					</tr>
					<tr>
						<td><a href="publication1.php?action=Lexis Nexis">Lexis Nexis</a></td>
						<td><a href="publication1.php?action=Pan Macmillan">Pan Macmillan</a></td>
						<td><a href="publication1.php?action=Penguin">Penguin</a></td>
					</tr>
					<tr>
						<td><a href="publication1.php?action=Rajpal & Sons">Rajpal & Sons</a></td>
						<td><a href="publication1.php?action=RHUK">RHUK</a></td>
						<td><a href="publication1.php?action=Rupa">Rupa</a></td>
					</tr>
					<tr>
						<td><a href="publication1.php?action=Tech Max">Tech Max</a></td>
						<td><a href="publication1.php?action=Westland">Westland</a></td>
						<td><a href="publication1.php?action=Wiley">Wiley</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Languages</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="language1.php?action=Hindi">Hindi</a></td>
						<td><a href="language1.php?action=English">English</a></td>
					</tr>
					<tr>
						<td><a href="language1.php?action=Bengali">Bengali</a></td>
						<td><a href="language1.php?action=Telugu">Telegu</a></td>
					</tr>
					<tr>
						<td><a href="language1.php?action=Tamil">Tamil</a></td>
						<td><a href="language1.php?action=Marathi">Marathi</a></td>
					</tr>
					<tr>
						<td><a href="language1.php?action=Malayalam">Malayalam</a></td>
						<td><a href="language1.php?action=Gujrati">Gujrati</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="fiction1.php" class="dropbtn">Fiction</a>
		</li>
		<li class="dropdown">
			<a href="nonfiction1.php" class="dropbtn">Non-Fiction</a>
		</li>
		<li class="dropdown">
			<a href="contact1.html" class="dropbtn">Contact Us</a>
		</li>
	</ul>
	 	 
	<div id="leftmenu">
        <h3>Categories</h3>
        <ul>
            <li><a href="browse1.php?action=Art and Photography">Art & Photography</a></li>
            <li><a href="browse1.php?action=Biography">Biography</a></li>
            <li><a href="browse1.php?action=Children">Children's Book</a></li>
            <li><a href="browse1.php?action=College Text">College Text & Reference</a></li>
            <li><a href="browse1.php?action=Computer">Computer & Internet</a></li>
            <li><a href="browse1.php?action=Cooking">Cooking</a></li>
            <li><a href="browse1.php?action=Educational">Educational & Professional</a></li>
            <li><a href="browse1.php?action=Entertainment">Entertainment</a></li>
			<li><a href="browse1.php?action=Romance">Romance</a></li>
			<li><a href="browse1.php?action=Personality Development">Personality Development</a></li>
            <li><a href="browse1.php?action=Others">Others</a></li>
       </ul>
    </div><!--leftmenu end-->
	
	<div id="content">
		<!--CONTENT HERE-->
		
		<form action="page1.php" method="post">
		<select name="taskOption" style="float:left;height:45px;margin-right:10px;margin-top:9px;padding:10px;background-color:#1c478e;color:white;border:0;
		border-radius:5px; cursor:pointer;">
			<option name="Title" value="Title">Title</option>
			<option name="Author" value="Author">Author</option>
			<option name="Shop" value="Shop">Shop</option>
			<option name="Location" value="Location">Location</option>
			<option name="Publication" value="Publication">Publication</option>
		</select>
			<input type="text" name="text1" placeholder="Search.." style="display:inline;float:left;margin-right:10px">
			<input type="submit" class="d" name="search" value="Search" style="display:inline;float:left;margin-top:9px;height:45px;">
		</form>
		<center>
		
		<?php
			if (isset($_GET['action'])) {
			$var=$_GET['action'];
			$sql = "SELECT * FROM books WHERE Bookid = '$var'";
		    $result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_array($result);	
			$var3=$_SESSION['quantity'];
			$var2=$row[5];
			$var1=$_SESSION['username'];
			$sql_books = "INSERT INTO cart(Username,Bookid,Shopid,Quantity) VALUES ('$var1','$var','$var2','$var3')";
			if(mysqli_query($connect,$sql_books))
			{
				echo '<br><br><br><br><br><br><b style="margin-left:240px;text-transform: uppercase;">Book successfully added to cart</b>';
				$sql_books1 = "INSERT INTO cart1(Username,Bookid,Shopid,Quantity) VALUES ('$var1','$var','$var2','$var3')";
				mysqli_query($connect,$sql_books1);
			}	
			else
					echo '<br><br><br><br><br><Br><b style="margin-left:300px;text-transform: uppercase;">ERROR</b>';
			}
		?>
		
		</div>
	</div>
	</body>
	</html>