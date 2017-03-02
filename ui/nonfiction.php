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
	margin-left: 350px;
	margin-top: 20px;
    width: 10%;
	position:absolute;
}

.b {
    padding: 14px 20px;
	margin-left: 443px;
	margin-top: 20px;
    width: 10%;
	position:absolute;
}


</style>
<script>
function Display(a)
{
	if(a==1)
	{
		document.getElementById('regbtn').style.display="block";
		document.getElementById('shopkprrgr').style.display="none";
		document.getElementById('custrgr').style.display="none";
		document.getElementById('regopt').style.display="block";
	}
	else if(a==2)
	{
		document.getElementById('loginbtn').style.display="block";
		document.getElementById('shopkprlgn').style.display="none";
		document.getElementById('custlgn').style.display="none";
		document.getElementById('logopt').style.display="block";
	}
	else
	{
		document.getElementById('regbtn').style.display="none";
		document.getElementById('loginbtn').style.display="none";
	}
}
function Display1(b)
{
	if(b==1)
	{
		document.getElementById('shopkprrgr').style.display="block";
		document.getElementById('custrgr').style.display="none";
		document.getElementById('regopt').style.display="none";
	}
	else if(b==2)
	{
		document.getElementById('shopkprrgr').style.display="none";
		document.getElementById('custrgr').style.display="block";
		document.getElementById('regopt').style.display="none";
	}
	else if(b==3)
	{
		document.getElementById('shopkprlgn').style.display="block";
		document.getElementById('custlgn').style.display="none";
		document.getElementById('logopt').style.display="none";
	}
	else if(b==4)
	{
		document.getElementById('shopkprlgn').style.display="none";
		document.getElementById('custlgn').style.display="block";
		document.getElementById('logopt').style.display="none";
	}
	else
	{}
}
</script>
<body>
<div id="container">
	<div id="header">
	<img width="8%" src="images/logo.png" alt="web developer directory">
        <h1><span class="blue-text">Bay</span> OfBooks</h1>
		<button class="ab" onclick="Display(2)" style="width:auto;">Login</button>
		<button class="b" onclick="Display(1)" style="width:auto;">Register</button>
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
		
		<form action="page11.php" method="post">
		<select name="taskOption" style="float:left;height:45px;margin-right:10px;margin-top:9px;padding:10px;background-color:#1c478e;color:white;border:0;
		border-radius:5px; cursor:pointer;">
			<option name="Title" value="Title">Title</option>
			<option name="Author" value="Author">Author</option>
			<option name="Shop" value="Shop">Shop</option>
			<option name="Location" value="Location">Location</option>
			<option name="Publication" value="Publication">Publication</option>
		</select>
			<input type="text" name="text1" placeholder="Search.." style="display:inline;float:left;margin-right:10px">
			<input type="submit" class="d" name="search" value="Search" style="display:inline;float:left;margin-top:9px;height:45px;"><br><br>
		</form>
		<center>
		
		<?php
			$sql = "SELECT * FROM books WHERE Category not in ('Romance','Children','Entertainment')";
		    $result = mysqli_query($connect,$sql);

			if($result!=false){
			if (mysqli_num_rows ($result) >0 )
			{
				echo '<br><br><br><br><h2 style="text-transform: uppercase;text-align:center;color:#1C478E">Non-Fiction Books<br></h2>';
				echo '<table style="margin-left:80px">';
				$r=0;
				while($row=mysqli_fetch_array($result))
				{
					if ($r%2==0)
						echo '<tr>';
					echo '<td style="padding:20px"><a href="page21.php?action='.$row[1].'"><img align=top width=200px class="abc" src="'.$row[9].'">';
					echo '<br><br><b>'.$row[1].'</b>';
					echo '<br><br><b>Author</b> : '.$row[2];
					echo '<br><br><b>Shopname</b> : '.$row[6];	
					echo '<br><br><b>Cost</b> : Rs'.$row[8].'</td>';
					$r++;
					if ($r%2==0)
						echo '</tr>';
					echo '</a>';
				}
				echo '</table>';
			}
			else
			{
				echo '<br><br><br><h2 style="color:#1C478E;text-transform:uppercase;text-align:center">No Non-Fiction books available </h2>';
			}
			}
		?>
	
	</div>
</div>

<div id="regbtn" class="modal">
  
  <div class="modal-content1 animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('regbtn').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>Sign Up</h2>
    </div>

    <div class="container">
	
	<div id="regopt">
	<button class="c" onclick="Display1(2)">Customer</button>
	<button class="c" onclick="Display1(1)">Shop Owner</button>
	</div>
	
	<form id="shopkprrgr" action="register_insert_shp.php" method="post">
		  
      <label for="name" >Owner Name</label>
      <input type="text" placeholder="Enter Name.." name="ownername" required><br>

      <label>Username</label>
      <input type="text" placeholder="Enter Username.." name="username" required><br>
	 
      <label>Email</label>
      <input type="email" placeholder="Enter Email.." name="email" required><br>
      
	  <label>Password</label>
	  <input type="password" placeholder="Enter Password.." name="pwd" required><br>	   
      
	  <label>Phone number</label>
      <input type="text" placeholder="Enter Phone number.." name="phone" required><br>	   
	  
	  <label>Shopname</label>
      <input type="text" placeholder="Enter Shop name.." name="shopname" required><br>
	  
	  <label>Shop Address</label>
      <input type="text" placeholder="Enter Address.." name="address" required><br>	   	   
      
      <label>City</label>
      <input type="text" placeholder="Enter City.." name="city" required><br>

      <label>State</label>
      <input type="text" placeholder="Enter State.." name="state" required><br>

      <label>Pin Code</label>
      <input type="text" placeholder="Enter Pin Code.." name="pin" required><br>
	  

	  <button class="c" type="submit">Register</button>
	  <button class="c"type="button" onclick="document.getElementById('regbtn').style.display='none'" >Cancel</button>
	</form>
	
	<form id="custrgr" action="register_insert.php" method="post">
	  
      <label for="name" >Name</label>
      <input type="text" placeholder="Enter Name.." name="name" required><br>

      <label>Username</label>
      <input type="text" placeholder="Enter Userame.." name="username" required><br>
	 
      <label>Email</label>
      <input type="email" placeholder="Enter Email.." name="email" required><br>
      
	  <label>Password</label>
	  <input type="password" placeholder="Enter Password.." name="pwd" required><br>	   
      
	  <label>Phone number</label>
      <input type="text" placeholder="Enter Phone number.." name="phone" required><br>	   
      
	  <label>Address</label>
      <input type="text" placeholder="Enter Address.." name="address" required><br>	   	   
      
      <label>City</label>
      <input type="text" placeholder="Enter City.." name="city" required><br>

      <label>State</label>
      <input type="text" placeholder="Enter State.." name="state" required><br>

      <label>Pin Code</label>
      <input type="text" placeholder="Enter Pin Code.." name="pin" required><br>
	  

	  <button class="c" type="submit">Register</button>
	  <button class="c"type="button" onclick="document.getElementById('regbtn').style.display='none'" >Cancel</button>
	</form>
	
  </div>
    
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('regbtn');
</script>

<div id="loginbtn" class="modal">
  
  <div class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('loginbtn').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>Log In</h2>
    </div>

    <div class="form-container">
	
	<div id="logopt">
	<button class="c" onclick="Display1(4)">Customer</button>
	<button class="c" onclick="Display1(3)">Shop Owner</button>
	</div>
	
	<form id="shopkprlgn" action="authenticate_shp.php" method="Post">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><br>
	 

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br>
        
      <button class="c" type="submit">Login</button>
	  <button class="c" type="button" onclick="document.getElementById('loginbtn').style.display='none'" >Cancel</button>
    </form>
	
	<form id="custlgn" action="authenticate.php" method="Post">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><br>
	 

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br>
        
      <button class="c" type="submit">Login</button>
	  <button class="c" type="button" onclick="document.getElementById('loginbtn').style.display='none'" >Cancel</button>
    </form>
	
	</div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('loginbtn');
</script>

</body>
</html>
