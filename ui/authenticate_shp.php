<?php 
include 'connect.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Online Book Shopping</title>
<link rel="icon" type="image/png" href="images/logo.png" sizes="16x16">
<link rel="icon" type="image/png" href="images/logo.png" sizes="32x32">
</head>

<style>
.ab {
    padding: 14px 20px;
	margin-left: 800px;
	margin-top: -50px;
    width: 10%;
	
}


</style>

<body>
<div id="container">
	<div id="header">
	<img width="8%" src="images/logo.png" alt="web developer directory">
        <h1><span class="blue-text">Bay</span> OfBooks</h1>
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
-				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="fictions.php" class="dropbtn">Fiction</a>
		</li>
		<li class="dropdown">
			<a href="nonfictions.php" class="dropbtn">Non-Fiction</a>
		</li>
		<li class="dropdown">
			<a href="contact.html" class="dropbtn">Contact Us</a>
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

		<div class="w3-content w3-display-container" style="max-width:800px;margin-top:100px">
			<img class="mySlides" src="book3.png" style="width:100%; height:300px">
			<img class="mySlides" src="book0.jpg" style="width:100%;height:300px">
			<img class="mySlides" src="book1.jpg" style="width:100%;height:300px">
			<img class="mySlides" src="book.jpg" style="width:100%;height:300px">
			<img class="mySlides" src="book2.jpg" style="width:100%; height:300px">
			<img class="mySlides" src="book3.png" style="width:100%; height:300px">
		</div>
		</center>
		<script>
			var myIndex = 0;
			carousel();
	
			function carousel() 
			{
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) 
				{
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 4000); 
			}
		</script>
	
		<?php

		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$sql_shopowner = "SELECT * FROM shopowner WHERE Username = '$username'
		AND Password = '$password' ";

		$result_shopowner = mysqli_query($connect,$sql_shopowner);
		if($result_shopowner!=false){
		if (mysqli_num_rows ($result_shopowner) <=0)
		{
			echo "<h2>No user found with such username and password</h2>" ;
			session_destroy();
		}
		else
		{
			$row_shopowner = mysqli_fetch_assoc($result_shopowner);	
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $row_shopowner['Ownername'];
			$_SESSION['shopid'] = $row_shopowner['Shopid'];
			$_SESSION['shopname'] = $row_shopowner['Shopname'];
			$_SESSION['isloggedin']=true;
			echo"<script>window.open('indexs.php','_self','')</script>";	
		}
		}
		?>

	</div>
	</div>
	</body>
	</html>