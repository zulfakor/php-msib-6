<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }
        .card-header h1 {
            margin-bottom: 0;
        }
        .card-body {
            padding: 2rem;
        }
        .card-text strong {
            width: 150px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Profile Saya</h1>
            </div>
            <div class="card-body">
                <?php
                $name = "Ahmad Ali Zulfakor";
                $email = "Zulfakor30@gmail.com";
                $phone = "081288975678";
                $umur = "21 Tahun";
                $_pekerjaan = "Mahasiswa";
                $additional_info = "Halo Semua Saya Ahmad Ali Zulfakor Saya tinggal di Bekasi Utara. Saat ini saya sedang Menjalankan program Akademik Fullstack Web Developer Di Mitra PT. Nurul Fikri Cipta Inovasi, Saat ini Saya Berada di semester 6, Aktivitas yang sedang saya lakukan sekarang adalah melakukan Studi Independent dan mancari hal-hal menarik di Luar Kampus.";
                ?>
                <p class="card-text"><strong>Nama:</strong> <?php echo $name; ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo $email; ?></p>
                <p class="card-text"><strong>Nomor Telepon:</strong> <?php echo $phone; ?></p>
                <p class="card-text"><strong>Umur:</strong> <?php echo $umur; ?></p>
                <p class="card-text"><strong>Pekerjaan:</strong> <?php echo $_pekerjaan; ?></p>
                <p class="card-text"><strong>Informasi Pribadi:</strong> <?php echo $additional_info; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
