<!DOCTYPE html>
<html>
<head>
    <title>My Biodata</title>
    <style>
        /* Membuat baris sejajar kiri */
        .label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        /* Style untuk tombol kembali */
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #c62828;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
        }
        /* Hover Button */
        .back-button:hover {
            background-color: #b71c1c;
        }

        /* Style untuk tampilan container */
        .container {
            margin: 20px;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1>MY BIODATA</h1>
        <p>Silahkan Lihat Data Diri Anda di dalam cookies/session</p>

        <div>
            <span class="label">Nama Lengkap:</span>
            <span><?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : (isset($_COOKIE['nama']) ? $_COOKIE['nama'] : '-'); ?></span>
        </div>
        <div>
            <span class="label">Jenis Kelamin:</span>
            <span><?php echo isset($_SESSION['jenis_kelamin']) ? $_SESSION['jenis_kelamin'] : (isset($_COOKIE['jenis_kelamin']) ? $_COOKIE['jenis_kelamin'] : '-'); ?></span>
        </div>
        <div>
            <span class="label">Tempat, Tanggal Lahir:</span>
            <span><?php echo isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : (isset($_COOKIE['tempat_lahir']) ? $_COOKIE['tempat_lahir'] : '-'); ?>, <?php echo isset($_SESSION['tanggal_lahir']) ? $_SESSION['tanggal_lahir'] : (isset($_COOKIE['tanggal_lahir']) ? $_COOKIE['tanggal_lahir'] : '-'); ?></span>
        </div>
        <div>
            <span class="label">Agama:</span>
            <span><?php echo isset($_SESSION['agama']) ? $_SESSION['agama'] : (isset($_COOKIE['agama']) ? $_COOKIE['agama'] : '-'); ?></span>
        </div>
        <div>
            <span class="label">Alamat:</span>
            <span><?php echo isset($_SESSION['alamat']) ? $_SESSION['alamat'] : (isset($_COOKIE['alamat']) ? $_COOKIE['alamat'] : '-'); ?></span>
        </div>
        
        <a href="add_data.php" class="back-button">Kembali</a>
    </div>
</body>
</html>
