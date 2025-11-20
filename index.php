<?php
	session_start();
	include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<header>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
                *{
                    margin: 0;
                    padding: 0;
                }
                body{
                    background-color: lightgray;
                    font-family: Arial, sans-serif;
                }
				.login{
					/* display:inline-block; */
					display:grid;
					border:2px solid red;
					padding:20px;
					/* margin-left:30vw; */
                    margin:auto;
					margin-top:50px;
					/* float:left; */
					background-color:lightblue;
					justify-items:center;
				}
				#clock{
					color: red;
				}
			
                .versi{
					justify-items: left;
                    /* text-justify: left; */
                    font-size: 10px;
                }
			</style>      
</header>
<body>
	
	<div class="login">	
		<div class="versi">ver_25_05</div>
		<?php echo date("l, d-M-Y"); ?>
		<div id="clock"></div>	<br>
		<h3>Data Asset BSU</h3>
		<form action="indexproses.php" method="post">
		<table align="centre">
			<tr>
				<th colspan="2" height="40">LOGIN FORM</th>
			</tr>
			<tr>
				<td width="100">Username</td>
				<td> <input type="password" name="username"> </td>
			</tr>
			<tr>
				<td> Password </td>
				<td> <input type="password" name="password"> </td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" value="login" name="proseslog"> </td>
			</tr>
		</table>
		</form>
	</div>
	<script src="waktu.js"></script>			
	
</body>
</html>