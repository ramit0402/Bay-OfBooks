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
		<a href="carts.php"><img width="20px" src="cart.png" style="margin-left:587px;margin-top:-25px;"></a>
        <h3 style="color:white">
		<?php
			include 'connect.php';
			session_start();
			if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']) 
			{
				echo '<br><br><div style="margin-left:380px;position:absolute; color:#001e4f">Welcome to Bay Of Books, '.$_SESSION['name'].'</div>';
				echo '<a href="orders.php"><div class="ab" style="font-size:15px; position:absolute;margin-left:680px;width:auto;margin-top:-15px;">My Orders</div></a>';
				echo '<a href="addbooks.php"><div class="ab" style="font-size:15px; position:absolute;margin-left:775px;margin-top:-15px;width:auto">Add Books</div></a>';
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
			<a href="index.php" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Authors</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="authors.php?action=Agatha Christie">Agatha Christie</a></td>
						<td><a href="authors.php?action=Adolf Hitler">Adolf Hitler</a></td>
						<td><a href="authors.php?action=B. K. Karkra">B. K. Karkra</a></td>
						<td><a href="authors.php?action=Bruce Barnbaum">Bruce Barnbaum</a></td>
					</tr>
					<tr>
						<td><a href="authors.php?action=Chetan Bhagat">Chetan Bhagat</a></td>
						<td><a href="authors.php?action=Chitra Banerjee">Chitra Banerjee </a></td>
						<td><a href="authors.php?action=Dalai Lama">Dalai Lama</a></td>
						<td><a href="authors.php?action=Dale Carnegie">Dale Carnegie</a></td>
					</tr>
					<tr>
						<td><a href="authors.php?action=Good Earth">Good Earth</a></td>
						<td><a href="authors.php?action=H.C. Verma">H.C. Verma</a></td>
						<td><a href="authors.php?action=J.K.Rowling">J.K.Rowling</a></td>
						<td><a href="authors.php?action=Karnika Seth">Karnika Seth</a></td>
					</tr>
					<tr>
						<td><a href="authors.php?action=Mahesh M Goyani">Mahesh M Goyani</a></td>
						<td><a href="authors.php?action=Markus Zusak">Markus Zusak</a></td>
						<td><a href="authors.php?action=Norman Vincent">Norman Vincent</a></td>
						<td><a href="authors.php?action=Rick Riordan">Rick Riordan</a></td>
					</tr>
					<tr>
						<td><a href="authors.php?action=Robin Sharma">Robin Sharma</a></td>
						<td><a href="authors.php?action=Sanjeev Kapoor">Sanjeev Kapoor</a></td>
						<td><a href="authors.php?action=Saraswati Nagpal">Saraswati Nagpal</a></td>
						<td><a href="authors.php?action=Shipra Khanna">Shipra Khanna</a></td>
					</tr>
					<tr>
						<td><a href="authors.php?action=Sidney Sheldon">Sidney Sheldon</a></td>
						<td><a href="authors.php?action=Stephenie Meyer">Stephenie Meyer</a></td>
						<td><a href="authors.php?action=Walter Isaacson">Walter Isaacson</a></td>
						<td><a href="authors.php?action=William Shakespeare">William Shakespeare</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Publisher</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="publications.php?action=Arihant">Arihant</a></td>
						<td><a href="publications.php?action=Bharati Bhawan">Bharati Bhawan</a></td>
						<td><a href="publications.php?action=Bloomsbury">Bloomsbury</a></td>
					</tr>
					<tr>
						<td><a href="publications.php?action=Brown">Brown</a></td>
						<td><a href="publications.php?action=Campfire">Campfire</a></td>
						<td><a href="publications.php?action=Fingerprint">Fingerprint</a></td>
					</tr>
					<tr>
						<td><a href="publications.php?action=Harper">Harper</a></td>
						<td><a href="publications.php?action=Hodder And Stoughton">Hodder And Stoughton</a></td>
						<td><a href="publications.php?action=Jaico">Jaico</a></td>
					</tr>
					<tr>
						<td><a href="publications.php?action=Lexis Nexis">Lexis Nexis</a></td>
						<td><a href="publications.php?action=Pan Macmillan">Pan Macmillan</a></td>
						<td><a href="publications.php?action=Penguin">Penguin</a></td>
					</tr>
					<tr>
						<td><a href="publications.php?action=Rajpal & Sons">Rajpal & Sons</a></td>
						<td><a href="publications.php?action=RHUK">RHUK</a></td>
						<td><a href="publications.php?action=Rupa">Rupa</a></td>
					</tr>
					<tr>
						<td><a href="publications.php?action=Tech Max">Tech Max</a></td>
						<td><a href="publications.php?action=Westland">Westland</a></td>
						<td><a href="publications.php?action=Wiley">Wiley</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Languages</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="languages.php?action=Hindi">Hindi</a></td>
						<td><a href="languages.php?action=English">English</a></td>
					</tr>
					<tr>
						<td><a href="languages.php?action=Bengali">Bengali</a></td>
						<td><a href="languages.php?action=Telugu">Telegu</a></td>
					</tr>
					<tr>
						<td><a href="languages.php?action=Tamil">Tamil</a></td>
						<td><a href="languages.php?action=Marathi">Marathi</a></td>
					</tr>
					<tr>
						<td><a href="languages.php?action=Malayalam">Malayalam</a></td>
						<td><a href="languages.php?action=Gujrati">Gujrati</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="fictions.php" class="dropbtn">Fiction</a>
		</li>
		<li class="dropdown">
			<a href="nonfictions.php" class="dropbtn">Non-Fiction</a>
		</li>
		<li class="dropdown">
			<a href="contacts.html" class="dropbtn">Contact Us</a>
		</li>
	</ul>
	
	 <div id="leftmenu">
        <h3>Categories</h3>
        <ul>
            <li><a href="browses.php?action=Art and Photography">Art & Photography</a></li>
            <li><a href="browses.php?action=Biography">Biography</a></li>
            <li><a href="browses.php?action=Children">Children's Book</a></li>
            <li><a href="browses.php?action=College Text">College Text & Reference</a></li>
            <li><a href="browses.php?action=Computer">Computer & Internet</a></li>
            <li><a href="browses.php?action=Cooking">Cooking</a></li>
            <li><a href="browses.php?action=Educational">Educational & Professional</a></li>
            <li><a href="browses.php?action=Entertainment">Entertainment</a></li>
			<li><a href="browses.php?action=Romance">Romance</a></li>
			<li><a href="browses.php?action=Personality Development">Personality Development</a></li>
            <li><a href="browses.php?action=Others">Others</a></li>
        </ul>
    </div><!--leftmenu end-->
	
	<div id="content">
		<!--CONTENT HERE-->
		
		<form action="page1s.php" method="post">
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
			$quantity=$_POST['quantity'];
			$var=$_SESSION['bookname'];
			$sql = "SELECT * FROM books WHERE Bookname = '$var'";
		    $result = mysqli_query($connect,$sql);

			if (mysqli_num_rows ($result) >0 )
			{
				while($row=mysqli_fetch_array($result))
				{
					echo '<br><br><br><br><br>';
					echo '<img style="float:left;" align=top width=30% class="abc" src="'.$row[9].'">';
					echo '<div style="margin-left:100px;padding-left:150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$row[1].'</b>';
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Author</b> : '.$row[2];
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Publication</b> : '.$row[3];
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Category</b> : '.$row[4];
					echo '<br><br><div style="display:inline-block;width:400px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Description</b> : '.$row[7].'</div>';
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Shopname</b> : '.$row[6];
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Unicost</b> : Rs'.$row[8];
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Quantity</b> : '.$quantity;
					echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Subcost</b> : Rs'.($row[8]*$quantity);
					echo '<br style="clear:left;display:inline;";></div>';
				}
			}

	?>
		
	<?php
		$var=$_SESSION['bookname'];
		$sql = "SELECT * FROM books WHERE Bookname = '$var'";
		$result = mysqli_query($connect,$sql);

			if (mysqli_num_rows ($result) >0 )
			{
				while($row=mysqli_fetch_array($result))
				{
					$_SESSION['quantity']=$_POST['quantity'];
					echo '<br><br><a href="page3s.php?action='.$row[0].'"><h2 style="margin-left:200px">Add to Cart</h2></a>';
					echo '<a href="indexs.php"><h2 style="margin-left:360px;margin-top:-23px">Cancel</h2></a>';
				}
			}
	?>
				
	
	
	</div>
	</div>
	</body>
	</html>