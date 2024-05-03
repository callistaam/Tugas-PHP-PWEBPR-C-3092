<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pages/Insert.css">
    <title>3092-pwebpr4</title>
</head>

<body>
    <div class="sidebar">
        <div class="resto">BITES</div>
        <div class="sidebar-box">
            <a href="/tugas2">
                <img src="Pages/dashboard.png" alt="" class="dashboard">
            </a>
            <a href="/tugas2/menu.php">
                <img src="Pages/menu.png" alt="" class="menu">
            </a>
        </div>
    </div>    
    
    <div class="box1">
        <h1>Insert Data</h1>
        <div class="search-box"> Search
            <img src="Pages/search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="Pages/notif.png" alt="" class="notif">
        <img src="Pages/profil.png" alt="" class="profil">
    </div>

    <div class="box2">
        <h2>Tambah Data</h2>
        <form method="POST" action="createresto" enctype="multipart/form-data">
            <div class="box4">
                <input type="hidden" id="kode_transaksi" name="Kode_Transaksi" value="Auto Generated" disabled>

                <label for="no_telepon">No. Telepon</label><br>
                <input type="text" id="no_telepon" name="No_Telepon" required><br><br>

                <label for="Nama_Makanan">Nama Makanan</label><br>
                <input type="text" id="Nama_Makanan" name="Nama_Makanan" required><br><br>

                <label for="total_harga">Total Harga</label><br>
                <input type="number" id="total_harga" name="Total_Harga" required><br><br>

                <label for="tanggal_beli">Tanggal Beli</label><br>
                <input type="date" id="tanggal_beli" name="Tanggal_Beli" required><br><br>

                <label for="Bukti">Bukti Transaksi</label><br>
                <input type="file" id="Bukti" name="Bukti" required><br><br>

                <button type="submit">Tambah</button>
            </div>
        </form>
    </div>
</body>
</html>