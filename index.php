<!DOCTYPE html>
<html>
<head>
    <title>Dr. Gigi Indonesia</title>
    <style type="text/css">
    	.container{
    		width: 300px;
    		padding: 10px;
    		margin-top: 150px;
    		margin-left: 500px;
    		font: bold 15px/24px "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
		    font-size: 15px;
    	}
    	.container tr td input{
    		height: 40px;
    		background-color: #d8ebe9;
    		outline: none;
    		border: none;
    		width: 400px;
    		border-radius: 5px;
    	}
    	.container td button{
    		height: 40px;
    		font-size: 15px;
    		color: white;
    		background-color: #2f87ad;
    		outline: none;
    		border: none;
    		width: 100px;
    		border-radius: 5px;
    		cursor: pointer;
    		font-family: Baloo;
    	}
    </style>
</head>
<body>
	<a href="jadwal.php" style="position: absolute; text-decoration: none; border-radius: 5px; background-color: #2f87ad; color: white; height: 25px; width: 100px; font-family: Baloo; font-size: 15px; text-align: center; padding: 10px;">Jadwal Dokter</a>
	<p  style="margin-left: 1150px;">Belum daftar?<a href="register.php" style="text-decoration: none;"> Join</a></p>
	<div class="container">
	<h1>Login to Gigi</h1>
		<form action="login.php" method="post">	
			<table>
				<td>Username</td>
				<tr>
					<td><input type="text" name="username"></td>
				</tr>
				<td>Password</td>
				<tr>
					<td><input type="password" name="password"></td>
				</tr>
				<td><button>Login</button></td>
			</table>
		</form>
	</div>
</body>
</html>