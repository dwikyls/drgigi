<!DOCTYPE html>
<html>
<head>
    <title>Dr. Gigi Indonesia</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body{
    	font-family: 'Times New Roman', Times, serif;
    	color: #000d33;
	}

	img{
		max-width:20000px;
		position:fixed;
	}

	h1{
		font-size: 50px;
		float: left;
		position:absolute;
		left: 100px;
	}

	.container{
		color: white;
		font-size: 15px;
		border-radius: 20px;
		background-color: #0388fc;
		position: absolute;
		padding-left: 10px;
		padding-right:10px;
		padding-bottom:10px;
		margin-left: 1000px;
		max-width: 300px;
		float: left;
	}
	</style>
</head>
<body>
<img src="gambar1.jpg" style=" ">
	<h1 style="border: 2px solid black; padding: 10px; color: white;  border-radius: 10px;">Dr. Gigi Indonesia</h1>
	<div class="container">
	<h3>Silahkan Login</h3>
		<form action="login.php" method="post">	
			<table>
				<tr>
					<td style="font-family: Lucida Sans Unicode; font-size: 15px">Username</td>
					<td><input type="text" name="username" style="
					border-radius: 5px;
					height: 20px; 
					outline: none; 
					border: none; 
					width: 170px;
					"></td>
				</tr>
				<tr>
					<td style="font-family: Lucida Sans Unicode; font-size: 15px;">Password</td>
					<td><input type="password" name="password" style="
					border-radius: 5px;
					height: 20px; 
					outline: none; 
					border: none; 
					width: 170px;
					"></td>
				</tr>
				<tr>
					<td><a href="register.php" style="
					text-decoration: none; 
					font-size: 20px;  
					border-radius: 5px; 
					background-color: #fc4e03; 
					color: white; 
					padding: 4px; 
					font-family: Baloo;
					
					">Sign-up</a></td>
					
					<td><input type="submit" name="login" value="Log In" style="
					border-radius: 5px; 
					font-size: 20px;
					outline: none; 
					font-family: Baloo; 
					color: white; 
					background-color: #fc4e03; 
					border: none; 
					height: 40px; 
					width: 170px;
					"></td>
					
				</tr>
				<tr>
					<td><a href="lupapw.php" style=" text-decoration: none; color: white; font-size: 15px">lupa password?</a></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>