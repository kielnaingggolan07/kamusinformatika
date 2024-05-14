<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" integrity="sha384-4oVW0JyHm6CAU8EzgktZtCGUZfRTB9cGr4kN5tF4UIh6V6Wg0N0XG5w3xVSdKt5j" crossorigin="anonymous">

	<style>
		body {
			margin: 0;
			padding: 0;
			background: url('bg4.jpg') ;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: sans-serif;
		}
		.tambah {
			position: fixed;
			top: 50%;
			left: 18%;
			transform: translate(-30%, -50%);
			background: rgba(4, 29, 23, 0.5);
			padding: 50px;
			width: 600px;
			box-shadow: 0px 0px 25px 10px black;
			border-radius: 15px;
		}
		.avatar {
			font-size: 30px ;
			background: #E59866;
			width: 50px;
			height: 50px;
			line-height: 50px;
			position: fixed;
			left: 50%;
			top: 0;
			transform: translate(-50%, -50%);
			text-align: center;
			border-radius: 50%;
		}
		.tambah h2 {
			text-align: center;
			color: white;
			font-size: 30px;
			font-family: sans-serif;
			letter-spacing: 3px;
			padding-top: 0;
			margin-top: -20px;
		}
		.box-login {
			
			justify-content:space-between;
			margin: 10px;
			border-bottom: 2px solid white;
			padding: 8px 0;
		}
		.box-login i {
			font-size: 23px;
			color: white;
			padding: 5px 0;
		}
		.box-login input {
			width: 85%;
			padding: 5px 0;
			background: none;
			border: none;
			outline: none;
			color: white;
			font-size: 18px;
			margin-left: 30px;
		}

		.box-login textarea {
			margin-left: 56px;
			width: 510px;
			height: 200px;
			margin-top: -30px;
			background: none;
			border: 3px solid white;
			border-radius: 5px;
			font-size: 18px;
			color: white;
		}

		.box-login input::placeholder {
			color: white;
		}

		.box-login textarea::placeholder {
			color: white;
		}

		.btn-login
		.box-login input:hover{
			background: rgba(10, 10, 10,s 0.5);
		}

		.btn-login {
			margin-left: 22px;
			margin-top: 5px;
			margin-bottom: 20px;
			background: none;
			border: 1px solid white;
			width: 92.5%;
			padding: 10px;
			color: white;
			font-size: 18px;
			letter-spacing: 3px;
			cursor: pointer;
		}
		.btn-login:hover{
			background: rgba(12, 30, 15, 0.5);
		}
		.bottom {
			margin-left: 10px;
			margin-right: 10px;
			display: flex;
			justify-content: space-between;
		}
		.bottom a {
			color: white;
			font-size: 15px;
			text-decoration: none;
		}
		.bottom a:hover {
			text-decoration: underline;
		}
	</style>
      <div class="tambah">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>
          <h2>Tambahkan Kata Kamus Digital</h2>
		  <form action="proses-insert.php" method="POST">
			<div class="box-login">
				<i class="fas fa-envelope-open-text"></i>
				<input type="text" placeholder="Kosa Kata" name="Nama_Kata">
			</div>

			<div class="box-login">
				<i class="far fa-edit"></i>
				<textarea name="Keterangan" placeholder="Deskripsi"></textarea>
			</div>

          	<button type="submit" name="add" class="btn-login">Tambahkan</button>
		  </form>
      </div>
  </head>
  </html>





<!-- <!DOCTYPE html>
<html>
<head>
	<title>Formulir Tambah Kata | TIKP Jawa Timur</title>
</head>

<body>
	<header>
		<h3>Formulir Tambah Kata</h3>
	</header>
	
	<form action="proses-insert.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="Nama_Kata">Nama Kata : </label>
			<input type="text" name="Nama_Kata" placeholder="Nama Kata" />
		</p>
		<p>
			<label for="Keterangan">Keterangan: </label>
			<textarea name="Keterangan"></textarea>
		</p>
		<p>
			<input type="submit" value="Daftarkan" name="daftarkan" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html> -->
