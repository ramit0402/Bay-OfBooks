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
		<a href="cart.php"><img width="3%" src="cart.png" style="margin-left:720px;margin-top:-30px;"></a>
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
						<td><a href="author.php?action=Agatha Christie">Agatha Christie</a></td>
						<td><a href="author.php?action=Adolf Hitler">Adolf Hitler</a></td>
						<td><a href="author.php?action=B. K. Karkra">B. K. Karkra</a></td>
						<td><a href="author.php?action=Bruce Barnbaum">Bruce Barnbaum</a></td>
					</tr>
					<tr>
						<td><a href="author.php?action=Chetan Bhagat">Chetan Bhagat</a></td>
						<td><a href="author.php?action=Chitra Banerjee">Chitra Banerjee </a></td>
						<td><a href="author.php?action=Dalai Lama">Dalai Lama</a></td>
						<td><a href="author.php?action=Dale Carnegie">Dale Carnegie</a></td>
					</tr>
					<tr>
						<td><a href="author.php?action=Good Earth">Good Earth</a></td>
						<td><a href="author.php?action=H.C. Verma">H.C. Verma</a></td>
						<td><a href="author.php?action=J.K.Rowling">J.K.Rowling</a></td>
						<td><a href="author.php?action=Karnika Seth">Karnika Seth</a></td>
					</tr>
					<tr>
						<td><a href="author.php?action=Mahesh M Goyani">Mahesh M Goyani</a></td>
						<td><a href="author.php?action=Markus Zusak">Markus Zusak</a></td>
						<td><a href="author.php?action=Norman Vincent">Norman Vincent</a></td>
						<td><a href="author.php?action=Rick Riordan">Rick Riordan</a></td>
					</tr>
					<tr>
						<td><a href="author.php?action=Robin Sharma">Robin Sharma</a></td>
						<td><a href="author.php?action=Sanjeev Kapoor">Sanjeev Kapoor</a></td>
						<td><a href="author.php?action=Saraswati Nagpal">Saraswati Nagpal</a></td>
						<td><a href="author.php?action=Shipra Khanna">Shipra Khanna</a></td>
					</tr>
					<tr>
						<td><a href="author.php?action=Sidney Sheldon">Sidney Sheldon</a></td>
						<td><a href="author.php?action=Stephenie Meyer">Stephenie Meyer</a></td>
						<td><a href="author.php?action=Walter Isaacson">Walter Isaacson</a></td>
						<td><a href="author.php?action=William Shakespeare">William Shakespeare</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Publisher</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="publication.php?action=Arihant">Arihant</a></td>
						<td><a href="publication.php?action=Bharati Bhawan">Bharati Bhawan</a></td>
						<td><a href="publication.php?action=Bloomsbury">Bloomsbury</a></td>
					</tr>
					<tr>
						<td><a href="publication.php?action=Brown">Brown</a></td>
						<td><a href="publication.php?action=Campfire">Campfire</a></td>
						<td><a href="publication.php?action=Fingerprint">Fingerprint</a></td>
					</tr>
					<tr>
						<td><a href="publication.php?action=Harper">Harper</a></td>
						<td><a href="publication.php?action=Hodder And Stoughton">Hodder And Stoughton</a></td>
						<td><a href="publication.php?action=Jaico">Jaico</a></td>
					</tr>
					<tr>
						<td><a href="publication.php?action=Lexis Nexis">Lexis Nexis</a></td>
						<td><a href="publication.php?action=Pan Macmillan">Pan Macmillan</a></td>
						<td><a href="publication.php?action=Penguin">Penguin</a></td>
					</tr>
					<tr>
						<td><a href="publication.php?action=Rajpal & Sons">Rajpal & Sons</a></td>
						<td><a href="publication.php?action=RHUK">RHUK</a></td>
						<td><a href="publication.php?action=Rupa">Rupa</a></td>
					</tr>
					<tr>
						<td><a href="publication.php?action=Tech Max">Tech Max</a></td>
						<td><a href="publication.php?action=Westland">Westland</a></td>
						<td><a href="publication.php?action=Wiley">Wiley</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Languages</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="language.php?action=Hindi">Hindi</a></td>
						<td><a href="language.php?action=English">English</a></td>
					</tr>
					<tr>
						<td><a href="language.php?action=Bengali">Bengali</a></td>
						<td><a href="language.php?action=Telugu">Telegu</a></td>
					</tr>
					<tr>
						<td><a href="language.php?action=Tamil">Tamil</a></td>
						<td><a href="language.php?action=Marathi">Marathi</a></td>
					</tr>
					<tr>
						<td><a href="language.php?action=Malayalam">Malayalam</a></td>
						<td><a href="language.php?action=Gujrati">Gujrati</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="fiction.php" class="dropbtn">Fiction</a>
		</li>
		<li class="dropdown">
			<a href="nonfiction.php" class="dropbtn">Non-Fiction</a>
		</li>
		<li class="dropdown">
			<a href="contact.html" class="dropbtn">Contact Us</a>
		</li>
	</ul>
	
    <div id="leftmenu">
        <h3>Categories</h3>
        <ul>
            <li><a href="browse.php?action=Art and Photography">Art & Photography</a></li>
            <li><a href="browse.php?action=Biography">Biography</a></li>
            <li><a href="browse.php?action=Children">Children's Book</a></li>
            <li><a href="browse.php?action=College Text">College Text & Reference</a></li>
            <li><a href="browse.php?action=Computer">Computer & Internet</a></li>
            <li><a href="browse.php?action=Cooking">Cooking</a></li>
            <li><a href="browse.php?action=Educational">Educational & Professional</a></li>
            <li><a href="browse.php?action=Entertainment">Entertainment</a></li>
			<li><a href="browse.php?action=Romance">Romance</a></li>
			<li><a href="browse.php?action=Personality Development">Personality Development</a></li>
            <li><a href="browse.php?action=Others">Others</a></li>
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
		$Name = $_POST['name'];
		$Username = $_POST['username'];
		$Email = $_POST['email'];
		$Password = $_POST['pwd'];
		$PhoneNumber = $_POST['phone'];
		$Address = $_POST['address'];
		$City = $_POST['city'];
		$State = $_POST['state'];
		$PinCode = $_POST['pin'];
		
		$sql_users = "INSERT INTO users(Name,Username,Email,Password,PhoneNumber,Address,City,State,PinCode) VALUES ('$Name','$Username','$Email','$Password','$PhoneNumber','$Address','$City','$State','$PinCode')";
		if(mysqli_query($connect,$sql_users))
		{
			echo "<script>window.open('index.php','_self','')</script>";
		}
		else
		{
			echo "Registration unsuccessful, please try again ";
			echo "<a href='index.php' name='a'>Go to Homepage</a>";
		}
		?>

	</div>
	</div>
</body>
</html>