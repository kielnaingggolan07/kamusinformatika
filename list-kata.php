<?php include("config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" integrity="sha384-4oVW0JyHm6CAU8EzgktZtCGUZfRTB9cGr4kN5tF4UIh6V6Wg0N0XG5w3xVSdKt5j" crossorigin="anonymous">
	<style>
		body {
			margin: 0;
			padding: 0;
			/* background: url('bg5.jpg') ; */
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: sans-serif;
			background-color: #E1ACAC;
			
		}

		.list {
			position: fixed;
			top: 35%;
			left: 30.5%;
			transform: translate(-30%, -50%);
			background-color: #A87676;
			padding: 50px;
			width: 90%;
			box-shadow: 0px 0px 25px 10px black;
			border-radius: 15px;
			color: white;
			margin-top: 50px;
			margin-left: 23px;
		}

		.container{
			display: flex;
  			/* justify-content: flex-end; */
		}

		.tambah i {
			margin-right: 20px;
			margin-left: 20px;
			font-size: 20px;
			margin-top: 8px;
		}

		h1 {
			text-align: center;
		}

		/* Style the search field */
		form.example input[type=text] {
			padding: 10px;
			font-size: 17px;
			border: 1px solid grey;
			float: left;
			background: #f1f1f1;
			border-radius: 5px;
		}

		/* Style the submit button */
		form.example button {
			float: left;
			padding: 10px;
			background: #2196F3;
			color: white;
			font-size: 17px;
			border: 1px solid grey;
			border-left: none; /* Prevent double borders */
			border-radius: 5px;
			margin-left: 10px;
			cursor: pointer;
		}

		/* form.example button:hover {
			background: #0b7dda;
		} */

		/* Clear floats */
		/* form.example::after {
			content: "";
			clear: both;
			display: table;
		} */

		* {
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div class="list">
		<a href="welcome2.php"><i class="fas fa-arrow-left" style="font-size: 20px; margin-left: 20px;"></i></a>
		<h1>Daftar Kosa Kata Kamus Informatika Digital</h1>
		<div class="box">
			<div class="container">
				<a href="form-input.php" class="tambah" ><i class="fas fa-plus"></i></a>
				 	<form action="" method="GET" class="example">
						<input type="text" placeholder="Search.." name="keyword" style="width: 940px;">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
			</div>
		</div>
		<br>
		
		<table border="1">
		<thead>
			<tr>
				<th style="width: 50px;">ID</th>
				<th style="width: 150px;">Nama Kata</th>
				<th>Keterangan</th>
				<th style="width: 100px;">Action</th>
			</tr>
		</thead>
		<tbody>
			
			 <?php

				$keyword = "";


				if(isset($_GET['keyword'])) {

					$keyword = $_GET['keyword'];


					$sql = "SELECT * FROM kamus WHERE Nama_Kata LIKE '%$keyword%'";
				} else {

					$sql = "SELECT * FROM kamus";
				}

				$query = mysqli_query($db, $sql);
				
				while($kamus = mysqli_fetch_array($query)){
					echo "<tr>";
					echo "<td style='text-align: center;'>".$kamus['id']."</td>";
					echo "<td>".$kamus['Nama_Kata']."</td>";
					echo "<td>".$kamus['Keterangan']."</td>";
					echo "<td style='text-align: center;'>";
					echo "<a href='form-edit.php?id=".$kamus['id']."'><i class='fas fa-edit'></i></a> | "; // Menggunakan ikon edit dari Font Awesome
					echo "<a href='hapus.php?id=".$kamus['id']."'><i class='fas fa-trash-alt'></i></a>"; // Menggunakan ikon delete dari Font Awesome
					echo "</td>";
					echo "</tr>";
				}
				
			?>
		</tbody>
		</table>
		
		<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</body>
</html>