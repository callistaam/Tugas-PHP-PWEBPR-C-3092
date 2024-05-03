<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tugas2/Pages/Update.css">
    <title>3092-pwebpr4</title>
</head>

<body>
    <div class="sidebar">
        <div class="resto">BITES</div>
        <div class="sidebar-box">
            <a href="/tugas2">
                <img src="/tugas2/Pages/dashboard.png" alt="" class="dashboard">
            </a>
            <a href="/tugas2/menu.php">
                <img src="/tugas2/Pages/menu.png" alt="" class="menu">
            </a>
        </div>
    </div>   
    
    <div class="box1">
        <h1>Edit Data</h1>
        <div class="search-box"> Search
            <img src="/tugas2/Pages/search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="/tugas2/Pages/notif.png" alt="" class="notif">
        <img src="/tugas2/Pages/profil.png" alt="" class="profil">
    </div>

    <div class="box2">
        <div class="box4">
            <?php foreach ($data as $row) { ?>
                <form method="POST" action="/tugas2/updateresto/<?= $row['Kode_Transaksi'] ?>" enctype="multipart/form-data">
                    <input value="<?= $row['Kode_Transaksi'] ?>" type="hidden" id="Kode_Transaksi" name="Kode_Transaksi">

                    <label for="No_Telepon">No. Telepon</label><br>
                    <input value="<?= $row['No_Telepon'] ?>" type="text" id="No_Telepon" name="No_Telepon" required><br><br>

                    <label for="Nama_Makanan">Nama Kasir</label><br>
                    <input value="<?= $row['Nama_Makanan'] ?>" type="text" id="Nama_Makanan" name="Nama_Makanan" required><br><br>

                    <label for="Total_Harga">Total Harga</label><br>
                    <input value="<?= $row['Total_Harga'] ?>" type="text" id="Total_Harga" name="Total_Harga" required><br><br>

                    <label for="Tanggal_Beli">Tanggal Beli</label><br>
                    <input value="<?= $row['Tanggal_Beli'] ?>" type="date" id="Tanggal_Beli" name="Tanggal_Beli" required><br><br>

                    <button type="submit">Update</button>
                </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
