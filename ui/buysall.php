<?php 
include 'connect.php';
require 'class.phpmailer.php';
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
		<a href="carts.php"><img width="3%" src="cart.png" style="margin-left:600px;margin-top:-30px;"></a>
       <h3 style="color:white">
		<?php
			include 'connect.php';
			session_start();
			if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']) 
			{
				echo '<br><br><div style="margin-left:380px;position:absolute">Welcome to Bay Of Books, '.$_SESSION['name'].'</div>';	
				echo '<a href="orders.php"><div class="ab" style="position:absolute;margin-left:340px;width:90px;margin-top:-30px;">My Orders</div></a>';
				echo '<a href="addbooks.php"><div class="ab" style="position:absolute;margin-left:430px;margin-top:-30px;width:90px">Add Books</div></a>';
				echo '<a href="session_destroy.php"><div class="ab" style="position:absolute;margin-left:505px;margin-top:-15px;">Logout</div></a>';
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
			<a href="indexs.php" class="dropbtn">Home</a>
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
		$username=$_SESSION['username'];
		$sqlcart = " SELECT * from cart where Username='$username'";
		$resultcart = mysqli_query($connect,$sqlcart);
		$total=0;
		if($resultcart === FALSE) 
		{ 
			yourErrorHandler(mysqli_error($mysqli));
		}
		else
		{

			echo '<br><br><h2 style="padding:20px;text-transform: uppercase;">'.$username.'s order invoice</h2><br><br>';
			$total=0;
			while($rows=mysqli_fetch_array($resultcart))
			{
				$cartid=$rows[0];
				$date=date("y-m-d");
				$sql_orders = "INSERT INTO orders (Username,Cartid,DateOrdered) VALUES ('$username','$cartid','$date')";
				if(mysqli_query($connect,$sql_orders))
				{
				$sql = "SELECT * FROM orders o join cart c on o.Cartid=c.Cartid join books b on c.Bookid=b.Bookid where c.Username = '$username'";
				$result = mysqli_query($connect,$sql);
				if($result === FALSE) 
				{ 
					echo "Order unsuccessful, please try again ";	
					echo "<a href='cart.php' name='a'>Go to Cart</a>";
				}
				else
				{
					echo '<table style="margin-left:80px">';
					$r=0;
					while($row=mysqli_fetch_array($result))
					{
					if ($r%2==0)
						echo '<tr>';
					echo '<td style="padding:20px"><img align=top width=200px class="abc" src="'.$row[18].'">';
					echo '<br><br><b>Orderid</b>'.$row[0];
					echo '<br><br><b>'.$row[10].'</b>';
					echo '<br><br><b>Author</b> : '.$row[11];
					echo '<br><br><b>Publication</b> : '.$row[12];
					echo '<br><br><b>Shopname</b> : '.$row[15];
					echo '<br><br><b>Date Ordered</b> : '.$row[3];
					echo '<br><br><b>Quantity</b> : '.$row[8];
					echo '<br><br><b>Unicost</b> : Rs'.$row[17];		
					echo '<br><br><b>Subcost</b> : Rs'.($row[17]*$row[8]);	
					$total+=($row[17]*$row[8]);
					$r++;				
					if ($r%2==0)
						echo '</tr>';
					echo '<div id="invoicebuy" >';
			if($result!=false)
			{
				$useremail="SELECT * FROM shopowner where Username ='$username'";
				$emailuser = mysqli_query($connect,$useremail);
				if($emailuser!=false){
				$usr=mysqli_fetch_array($emailuser);
				echo $usr[2];
				$shopemail="SELECT * FROM shopowner where Shopid='$row[7]'";
				$result_shop = mysqli_query($connect,$shopemail);
				if($result_shop!=false)
				{
					echo '<div class="cd" style="display:none">';
					$shp=mysqli_fetch_array($result_shop);
					echo $shp[2];
					$mail = new PHPMailer(); // create a new object
					$mail->IsSMTP(); // enable SMTP
					$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
					$mail->SMTPAuth = true; // authentication enabled
					$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465; // or 587
					$mail->IsHTML(true);
					$mail->Username = "bayofbooks25@gmail.com";
					$mail->Password = "shreyshraavuramit";
					$mail->SetFrom("bayofbooks25@gmail.com");
					echo $row[10];
					$mail->Subject = ("Invoice of Orderid ".$row[0]);
					$mail->Body = ("Book '".$row[10]."' bought on '".$row[3]."' from the shop '".$row[15]."'.<br>Cost : Rs".($row[17]).".<br>Quantity : ".$row[8]."<br>Total Cost: Rs".($row[17]*$row[8])."The order will be delivered in the next 3-4 working days on the address : ".$usr[5]." ".$usr[6]." ".$usr[7].".");
					$mail->AddAddress($usr[2]);
					$mail->AddAddress($shp[2]);	
					if(!$mail->Send()) {
						echo "Mailer Error: ";
					} else {	
						echo "Message has been sent";
					}
					echo '</div>';
				}
				}}
				echo '</div>';
				}
				echo '</table>';
				$sql_cart = "Delete FROM cart WHERE Cartid = '$cartid'";
				$result_cart = mysqli_query($connect,$sql_cart);
				}
			}
			}
			echo '<br><h3 style="margin-left:102px"> Total Cost : '.$total.'</h3><br><br>';
		}
		?>
</div>
</div>
</body>
</html>