<h1 align="center">Pesan Produk</h1>
<?php
// Inisialisasi variabel untuk menyimpan pesan produk
$pesan_produk = "";

// Daftar produk beserta harga satuan
$daftar_produk = array(
    "Triple Peach Americano" => 45000, 
    "Iced Classic Latte" => 32000, 
    "Nutty Oat Latte" => 40000, 
    "Iced Salted Caramel Mocha" => 31000, 
);

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang di-submit dari form
    $nama_produk = $_POST["nama_produk"];
    $jumlah = $_POST["jumlah"];
    $alamat_pengiriman = $_POST["alamat_pengiriman"];
    
    // Hitung total harga berdasarkan pilihan produk dan jumlah yang dimasukkan oleh pengguna
    $total_harga = $daftar_produk[$nama_produk] * $jumlah;
    
    // Proses pesanan produk
    // Di sini Anda dapat menambahkan logika untuk menyimpan pesanan ke dalam database atau melakukan tindakan lainnya
    
    // Set pesan sukses
    $pesan_produk = "Pesanan Anda untuk $jumlah $nama_produk telah diterima. Akan segera dikirim ke alamat $alamat_pengiriman. Total harga: Rp " . number_format($total_harga, 0, ',', '.') . ".";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"], textarea, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pesan Produk</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nama_produk">Pilih Produk:</label>
            <select id="nama_produk" name="nama_produk" required>
                <option value="">Pilih Produk</option>
                <?php
                // Loop melalui daftar produk dan menambahkan pilihan untuk setiap produk
                foreach ($daftar_produk as $produk => $harga) {
                    echo "<option value='$produk'>$produk (Rp " . number_format($harga, 0, ',', '.') . ")</option>";
                }
                ?>
            </select>
            
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" required>
            
            <label for="alamat_pengiriman">Alamat Pengiriman:</label>
            <textarea id="alamat_pengiriman" name="alamat_pengiriman" required></textarea>
            
            <input type="submit" value="Pesan">
        </form>
        <p><?php echo $pesan_produk; ?></p>
    </div>
</body>
</html>
