<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
        }

        .container {
            text-align: center;
        }

        .welcome {
            font-size: 48px;
            color: #333;
        }

        .welcome span {
            display: inline-block;
            opacity: 0;
            transform: translateX(100%); /* Mengatur posisi awal dari kanan */
            animation: slideIn 0.5s forwards;
        }

        .far {
            display: inline-block;
            opacity: 0;
            transform: translateX(-100%);
            animation: slideIn 0.5s forwards;
            cursor: pointer; /* Tambahkan cursor pointer */
        }

        .fade-out { /* Tambahkan animasi fade out */
            animation: fadeOut 0.5s forwards;
        }

        .welcome span:nth-child(1) {
            animation-delay: 0.2s; /* Delay untuk huruf pertama */
        }

        .welcome span:nth-child(2) {
            animation-delay: 0.4s; /* Delay untuk huruf kedua */
        }

        .welcome span:nth-child(3) {
            animation-delay: 0.6s; /* Delay untuk huruf ketiga */
        }

        .welcome span:nth-child(4) {
            animation-delay: 0.8s; /* Delay untuk huruf ketiga */
        }

        .welcome span:nth-child(5) {
            animation-delay: 1.0s; /* Delay untuk huruf ketiga */
        }

        .welcome span:nth-child(6) {
            animation-delay: 1.2s; /* Delay untuk huruf ketiga */
        }

        .welcome span:nth-child(7) {
            animation-delay: 1.4s; /* Delay untuk huruf ketiga */
        }

        .far {
            animation-delay: 1.6s;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeOut { /* Tambahkan keyframes untuk fade out */
            from {
                opacity: 1;
                transform: translateX(0); /* Ubah transformasi awal menjadi tidak berubah */
            }
            to {
                opacity: 0;
                transform: translateX(100%); /* Ubah transformasi menjadi menggeser ke kiri */
            }
        }
    </style>

    <script>
        function nextPage() {
            document.querySelector('.container').classList.add('fade-out'); /* Tambahkan class fade-out */
            setTimeout(function() {
                window.location.href = '/kamus';
            }, 500); /* Ubah waktu delay sesuai dengan animasi */
        }
    </script>
<body>
    <div class="container">
    <h1 class="welcome">
        <span>W</span>
        <span>E</span>
        <span>L</span>
        <span>C</span>
        <span>O</span>
        <span>M</span>
        <span>E</span>
    </h1>
    
    <a onclick="nextPage()">
        <i class="far fa-hand-point-right fa-lg"><a href="welcome2.php">Next</a></i>
    </a>
        </div>
</body>
</html>
