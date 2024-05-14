<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMUS INFORMATIKA | UPT TIKP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        main {
            background-image: url("bg2.png");
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            width: 100%;
            height: 90vh;
            position: relative;
            margin-top: 0px;
        }

        header {
            text-align: center;
            margin-top: 0px;
            position: relative; 
            z-index: 1; 
            color: white;
            padding-top: 30px;
        }

        img {
            width: 300px;
            height: 200px;
        }

        .container {
            padding-top: 100px;
        }
        .col-2 {
            background-color: #1E2E47; 
            padding: 5px 5px;
            border-radius: 10%;
        }

        a {
            color: #E1E3E5;
        }

        a:hover {
            color: #AAACAD;
        }

        .foot {
            text-align: center;
            margin-top: px;
            position: relative; 
            z-index: 1; 
            color: black;
            padding-top: 10px;
        }

        .about-link {
           margin-left: 1260px;
           
        }
        
    </style>
</head>
<body>
    <main> 
       <a href="about.php" class="about-link"><i class="fas fa-question-circle"></i></a>
        <header>
            <img src="bg3.png" alt="logo dispendik">
            <h2>KAMUS DIGITAL INFORMATIKA</h2>
        </header>

        <div class="container text-center">
            <div class="row justify-content-between">
                <div class="col-2" style="margin-left: 60px;"> <a href="form-input.php">TAMBAH KATA</a> </div>
                <div class="col-2" style="margin-left: 550px;"> <a href="list-kata.php">KAMUS</a> </div>
        ` </div>
        </div>
    </main>
</body>
<footer>
    <h2 style="" class="foot">UPT TIKP DINAS PENDIDIKAN JAWA TIMUR</h2>
</footer>
</html>
