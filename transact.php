<?php

session_start();
include 'connection.php';

if (isset($_GET['Name'])) {
	$Name = $_GET['Name'];
}

$q = "SELECT * From customer WHERE Name='$Name'";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
$_SESSION['senderName'] = $Name;
?>

<html>

<head>
	<title>transact</title>
	<link rel="stylesheet" type="text/css" href="buttons.css">
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
            width: 100%;
            height: 100vh;
            background-image: url(transfermoney.jpg);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #e6e7f5;

        }

		table {
			font-family: 'Lato', sans-serif;
			;
			border-collapse: collapse;
			width: 100%;
		}

		h1 {
			font-family: 'Lato', sans-serif;
			;
			font-size: 40px;
		}

		td,
		th {
			border: 1px solid black;
			text-align: center;
			padding: 8px;
		}

		tr {
			background-color: #e6e7f5;
		}

		nav {
			/*this is the navigation bar*/
			width: 100%;
			background-color: grey;
			overflow: hidden;
		}

		nav ul {
			list-style-type: none;
			/*this is to remove the bullet pts*/
			float: right;
			margin-top: 7px;
		}

		nav ul li {
			display: inline-block;
			/*elements will be shown in a single line*/

		}

		nav ul li a {
			/*styling anchors*/
			text-decoration: none;
			padding: 20px 35px;
			text-align: center;
			color: white;
			display: block;
			font-weight: 700;
		}

		nav ul li a:hover {
			color: #FAFA33;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: black;
			color: white;
			text-align: center;
			padding: 10px;

		}

		.logo {
			float: left;
			padding: 10px;
		}
	</style>
</head>

<body>
	<nav>
		<div class="logo">
			<img src="logo3.png" width="50" height="50">
		</div>
		<ul>
			<li><a href="#">HOME</a></li>

			<li><a href="display.php">View Customers</a></li>

			<li><a href="transfermoney.php">Transfer Money </a></li>
			<li><a href="transactionhistory.php">View Transaction History</a></li>
		</ul>
		<div style="float:left;"><ul>
        <li><a href='#'>BANK OF WAKANDA </a></li>
        </ul></div>
	</nav>
	<br>

	<div>
		<h2 style="text-align: center;color:#014d4e;font-family:'Times New Roman', Times, serif;font-size:40px">Account Details</h2>
		<br>
		<br>
		<table style="background-color:#d2fdfe;">
			<th>CUSTOMER ID</th>
			<th>NAME </th>
			<th>EMAIL</th>
			<th>CURRENT BALANCE</th>
			<tr>

				<?php
				$row = mysqli_fetch_array($result)
				?>


				<td><?php echo  $row["id"]; ?></td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["balance"]; ?></td>
			</tr>

		</table>
	</div>

	<?php echo "<form method='post' action='transaction.php?Name=$Name'>" ?>
	<br><br>
	<h3 style="font-family: roboto;color:	FireBrick;color:#014d4e">Transfer money to:</h3>
	<br>
	<table border="0px" style="background-color:#d2fdfe;">
		<tr>
			<td>Transfer To:</td>
			<td><select name="user">
					<option>--Select--</option>

					<?php
					$q1 = "select * from customer";
					$result1 = mysqli_query($con, $q1);
					while ($row = mysqli_fetch_array($result1)) {
					?>

						<option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

					<?php }
					?>

				</select></td>
		</tr>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="Amount"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color:white; font-weight: bold;"></td>
		</tr>
	</table>

	</form>

	<div class="footer">
		<p>Designed By Anshul Gupta!
		</p>
	</div>


</body>

</html>