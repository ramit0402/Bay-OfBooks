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
		<a href="cart.php"><img width="20px" src="cart.png" style="margin-left:740px;margin-top:-25px;"></a>
        <h3 style="color:white">
		<?php
			include 'connect.php';
			session_start();
			if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']) 
			{
				echo '<br><br><div style="margin-left:380px;position:absolute; color:#001e4f">Welcome to Bay Of Books, '.$_SESSION['name'].'</div>';
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
					echo '<br><br><div id="butconfret"><a href="invoice.php" class="ab" style="margin:10px">Confirm</a></div>';
				}
			}
		}
		else
		{
			echo '<h2 style="text-transform: uppercase;color:#1c478e">No orders yet</h2>';
			echo "<a href='index1.php' name='a'><h2>Go to Home</h2></a>";
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
		document.getElementById('butconfret').style.display="none";
		
		</script>
	
	</div>
	</div>
</body>
</html>