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
			<a href="index1.php" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Authors</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="#">Agatha Christie</a></td>
						<td><a href="#">Albert Camus</a></td>
						<td><a href="#">Alexandre Dumas</a></td>
						<td><a href="#">Ankit Fadia</a></td>
					</tr>
					<tr>
						<td><a href="#">Amish Tripathi</a></td>
						<td><a href="#">Amitav Ghosh</a></td>
						<td><a href="#">Anita Nair</a></td>
						<td><a href="#">Ayn Rand</a></td>
					</tr>
					<tr>
						<td><a href="#">Anton Chekhov</a></td>
						<td><a href="#">Aparna Jain</a></td>
						<td><a href="#">Arundhati Roy</a></td>
						<td><a href="#">Douglas Adams</a></td>
					</tr>
					<tr>
						<td><a href="#">Charles Dickens</a></td>
						<td><a href="#">Chetan Bhagat</a></td>
						<td><a href="#">Devdutt Pattanaik</a></td>
						<td><a href="#">George Eliot</a></td>
					</tr>
					<tr>
						<td><a href="#">Douglas Adams</a></td>
						<td><a href="#">Ernest Hemingway</a></td>
						<td><a href="#">Fyodor Dostoevsky</a></td>
						<td><a href="#">Joseph Heller</a></td>
					</tr>
					<tr>
						<td><a href="#">Harper Lee</a></td>
						<td><a href="#">John Steinbeck</a></td>
						<td><a href="#">Joseph Conrad</a></td>
						<td><a href="#">Mark Twain</a></td>
					</tr>
					<tr>
						<td><a href="#">Jules Verne</a></td>
						<td><a href="#">Jane Smiley</a></td>
						<td><a href="#">Khushwant Singh</a></td>
						<td><a href="#">Robert Mighall</a></td>
					</tr>
					<tr>
						<td><a href="#">Meghana Gulzar</a></td>
						<td><a href="#">Durjoy Datta</a></td>
						<td><a href="#">Oscar Wilde</a></td>
						<td><a href="#">R. K. Narayan</a></td>
					</tr>
					<tr>
						<td><a href="#">Paulo Coelho</a></td>
						<td><a href="#">Preeti Shenoy</a></td>
						<td><a href="#">Premchand</a></td>
						<td><a href="#">Ruskin Bond</a></td>
					</tr>
					<tr>
						<td><a href="#">Michael Gorra</a></td>
						<td><a href="#">Ramachandra Guha</a></td>
						<td><a href="#">Robin Sharma</a></td>
						<td><a href="#">Shobha De</a></td>
					</tr>
					<tr>
						<td><a href="#">Salman Rushdie</a></td>
						<td><a href="#">Satyajit Ray</a></td>
						<td><a href="#">Shashi Tharoor</a></td>
						<td><a href="#">Vladimir Nabokov</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Publisher</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="#">Arihant Publications</a></td>
						<td><a href="#">PHI Learning</a></td>
						<td><a href="#">Notion Press</a></td>
					</tr>
					<tr>
						<td><a href="#">Taxmann Publications</a></td>
						<td><a href="#">Rupa Publications</a></td>
						<td><a href="#">Nair Publications</a></td
					</tr>
					<tr>
						<td><a href="#">Navneet Publications</a></td>
						<td><a href="#">Var India</a></td>
						<td><a href="#">Dinakaran</a></td>
					</tr>
					<tr>
						<td><a href="#">Compare Infobase</a></td>
						<td><a href="#">Pitara Kids</a></td>
						<td><a href="#">Techmax Publications</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Indian Writing</a>
			<div class="dropdown-content">
				<table>
					<tr>
						<td><a href="#">Hindi</a></td>
						<td><a href="#">Marathi</a></td>
						<td rowspan="4" style="padding-right:10px"><img src="images/publishers/indian-writing.jpg" alt="languages"></td>
					</tr>
					<tr>
						<td><a href="#">Bengali</a></td>
						<td><a href="#">Telegu</a></td>
					</tr>
					<tr>
						<td><a href="#">Tamil</a></td>
						<td><a href="#">Kannada</a></td>
					</tr>
					<tr>
						<td><a href="#">Malayalam</a></td>
						<td><a href="#">Gujrati</a></td>
					</tr>
				</table>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Fiction</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">Non-Fiction</a>
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
		$Ownername = $_POST['ownername'];
		$Username = $_POST['username'];
		$Email = $_POST['email'];
		$Password = $_POST['pwd'];
		$PhoneNumber = $_POST['phone'];
		$Shopname = $_POST['shopname'];
		$Address = $_POST['address'];
		$City = $_POST['city'];
		$State = $_POST['state'];
		$PinCode = $_POST['pin'];
		
		$sql_shopowner = "INSERT INTO shopowner(Ownername,Username,Email,Password,PhoneNumber,Shopname,Address,City,State,PinCode) VALUES ('$Ownername','$Username','$Email','$Password','$PhoneNumber','$Shopname','$Address','$City','$State','$PinCode')";
		if(mysqli_query($connect,$sql_shopowner))
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