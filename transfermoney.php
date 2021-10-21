<?php
session_start();
include 'connection.php';

$q = "select * from customer";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
?>

<html>

<head>
	<title>Customer Details</title>
	<link rel="stylesheet" type="text/css" href="buttons.css">
	<style>
		* {
			margin: 0;
			padding: 0;
			font-family: 'Lato', sans-serif;
		}
		body {
            width: 100%;
            height: 100vh;
            background-image: url(transfermoney.jpg);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-color: brown;

        }

		table {
			font-family: 'Lato', sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		h2 {
			font-family: 'Lato', sans-serif;
			font-size: 45px;
            text-align: center;
            
		}

		td,
		th {
			border: 1px solid black;
			text-align: center;
			padding: 8px;
		}

		tr:nth-child(odd) {
			background-color: #e6e7f5;
		}

		nav {
			/*this is the navigation bar*/
			width: 100%;
			background-color: rgba(0, 0, 0, 0.6);
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
			background-color:rgba(0, 0, 0, 0.6);
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
			
			<li><a href="home.php">HOME</a></li>

			<li><a href="display.php">View Customers</a></li>

			<li><a href="transfermoney.php">Transfer Money </a></li>
			<li><a href="transactionhistory.php">View Transaction History</a></li>
		</ul>
		<div style="float:left;"><ul>
        <li><a href="#">BANK OF WAKANDA </a></li>
        </ul></div>
	</nav>
	<br>
	<h2 style="color:black;text-align: center;font-family:times new roman;">Click on the user name to transfer money from </h2>
	<br>
	<table class="flat-table flat-table-1" align=center style="font-family: 'Lato', sans-serif;;color:black;font-weight: bold;">
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>BALANCE</th>
		</thead>
		<tbody>
			<tr align=center>

				<?php
				while ($row = mysqli_fetch_array($result)) {
				?>

					<td><?php echo  $row["id"]; ?></td>
					<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>"; ?>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["balance"]; ?></td>
			<tr align=center>

			<?php }
			?>

			</tr>


		</tbody>
	</table>
	<br><br>

	<div class="footer">
		<p>Designed By Anshul Gupta!
		</p>
	</div>

</body>

</html>