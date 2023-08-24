<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
<style>
	body{
		background-image: url('https://i.imgur.com/YtRPuwr.gif');
	background-position: center;
background-repeat: no-repeat;
background-size: cover;

	}
	.button {
background-color:black;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius:8px;
box-shadow: 0 8px 12px 0 rgba(1,5,0,0.2);
transition-duration:0.5s;

}
.button:hover{
  background-color:red;
  
}

.arrow{
  margin-top:160px;
}
</style>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "aish");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$gender = $_REQUEST['gender'];
		$Email = $_REQUEST['Email'];
		$Contact = $_REQUEST['Contact'];
		$address = $_REQUEST['address'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO first VALUES ('$Name',
			'$gender','$Email','$Contact','$address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h2>Successfully Confirmed Your Entry Ticket!!!."
				. "<br><br> Please visit our website for more details"
				. " Enjoy the event and give us your feedback</h2>";

			echo nl2br("<h3>\n$Name\n $gender\n "
				. "$Email\n $Contact\n $address</h3>");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
`	<div class="arrow">
<center>
    <a href="events.html"><button class="button">&laquo;</button></a>
<a href="contact.html"><button class="button">&raquo;</button></a></center>
  </div>`
</body>

</html>
<div class="content">
<h1>WELCOME TO<br> BEST MUSIC EVENT</h1><a href="About.html"><button class="button">CLICK HERE &raquo;</button></a>
</div>