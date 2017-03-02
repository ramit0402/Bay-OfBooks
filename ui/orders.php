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
		<a href="carts.php"><img width="20px" src="cart.png" style="margin-left:680px;margin-top:-25px;"></a>
       <h3 style="color:white">
		<?php
			include 'connect.php';
			session_start();
			if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']) 
			{
				echo '<br><br><div style="margin-left:380px;position:absolute; color:#001e4f">Welcome to Bay Of Books, '.$_SESSION['name'].'</div>';
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
	
		<?php
			echo '<br><br><h2 style="text-transform: uppercase">My Orders</h2><br><br>';
			$username=$_SESSION['username'];
			$sql = "SELECT * FROM orders o JOIN cart1 c on o.Cartid=c.Cartid JOIN books b on c.Bookid=b.Bookid where c.Username = '$username'";
			$result = mysqli_query($connect,$sql);
			$total=0;
		if (mysqli_num_rows ($result)>0 )
		{
			$r=0;
			$counter=1;
			while($row=mysqli_fetch_array($result))
			{
				if($r>0)
					echo '<br><br><br><br><br>';
				echo '<div style="padding-top:20px">'.++$r.'.';
				echo '<b style="margin-left:20px">'.$row[10].'</b>';
				echo '<br><br>';
				echo '<img align=top width=200px class="abc" src="'.$row[18].'">';
				echo '<br><br><b>Author</b> : '.$row[11];
				echo '<br><br><b>Publication</b> : '.$row[12];
				echo '<br><br><b>Shopname</b> : '.$row[15];
				echo '<br><br><b>Date of Ordering</b> : '.$row[3];
				echo '<br><br><b>Quantity</b> : '.$row[8];
				echo '<br><br><b>Unicost</b> : Rs'.$row[17];		
				echo '<br><br><b>Subcost</b> : Rs'.($row[17]*$row[8]);	
				$from=date_create(date('Y-m-d'));
				$to=date_create($row[3]);
				$diff=date_diff($to,$from);
				$diffint = (integer)$diff->format('%m');
				echo '<br><br><b>Time elapsed : </b>'.$diff->format("%y year %m months %d days").'</div>';
				if($diffint>=1)
				{
					$cost=($row[17]*$row[8]);
					echo '<br><br><div id="butret"><button class="ab" style="margin:10px" id="refund" onclick="calcrefund('.$cost.')">Return</button></div>'; 
					echo '<br><br><div id="return">';
					date_add($to,date_interval_create_from_date_string("7 days"));
					echo '<b>Our official will visit you by</b> '.date_format($to,"Y-m-d");
					echo '<br><br><b>Amount paid</b> : Rs'.$cost;
					echo '<br><br><b>55% will be refunded</b>';
					echo '<br><br><b>Amount to be refunded</b> : Rs</div>';
					echo '<br><br><div id="butconfret"><button class="ab" style="margin:10px" id="confirmret" onclick="displaymsg()">Confirm</button></div>';
					echo '<br><br><div id="confirmedret"><b></b></div>';
					echo '<br><br><div id="invoiceret">';
					$sql_user = "SELECT * FROM orders o JOIN cart1 c on o.Cartid=c.Cartid JOIN books b on c.Bookid=b.Bookid join shopowner s on c.Username=s.Username where c.Username = '$username'";
					$result_user = mysqli_query($connect,$sql_user);
					if (mysqli_num_rows ($result_user)>0 )
					{
						$res=mysqli_fetch_array($result_user);
						$shopemail="SELECT * FROM shopowner where Shopid='$res[7]'";
						$result_shop = mysqli_query($connect,$shopemail);
						if(mysqli_num_rows ($result_shop)>0) 
						{	
							echo '<div class="cd" style="display:none">';
							$shp=mysqli_fetch_array($result_shop);
							require 'class.phpmailer.php';
							$mail = new PHPMailer(); // create a new object
							$mail->IsSMTP(); // enable SMTP
							$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
							$mail->SMTPAuth = true; // authentication enabled
							$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
							$mail->Host = "smtp.gmail.com";
							$mail->Port = 465; // or 587
							$mail->IsHTML(true);
							$mail->Username = "bayofbooks25@gmail.com";
							$mail->Password = "bayofbooks";
							$mail->SetFrom("bayofbooks25@gmail.com");
							$mail->Subject = ("Invoice of return request of Orderid ".$res[0]);
							$mail->Body = ("The return request for Book '".$res[10]."' bought on '".$res[3]."' has been submitted.<br>Our official will visit you in the next 7 days.<br>Amount to be refunded : Rs".(0.55*$res[17]));
							$mail->AddAddress($res[22]);
							$mail->AddAddress($shp[2]);	
							if(!$mail->Send()) {
								echo "Mailer Error: ";
							} else {	
								echo "Message has been sent";
							}
							echo '</div>';
						}
					}
					echo '</div>';
				}
				
				
			}
		}
		else
		{
			echo '<h2 style="text-transform: uppercase;color:#1c478e">No orders yet</h2>';
			echo "<a href='indexs.php' name='a'><h2>Go to Home</h2></a>";
		}
	
		?>
		<script>
		document.getElementById('return').style.display="none";
		function calcrefund(cost,counter)
		{	
				document.getElementById('butret').style.display="none";
				document.getElementById('return').style.display="block";
				document.getElementById('return').innerHTML += 0.55*cost + '<br/>'
				document.getElementById('butconfret').style.display="block";
		}
		document.getElementById('invoiceret').style.display="none";		
		document.getElementById('butconfret').style.display="none";
		function displaymsg()
		{
			document.getElementById('butconfret').style.display="none";
			document.getElementById('confirmedret').style.display="block";
			document.getElementById('confirmedret').innerHTML += 'Return request has been submitted' + '<br/>'
			document.getElementById('invoiceret').style.display="block";		
		}
		</script>

	</div>
	</div>
</body>
</html>