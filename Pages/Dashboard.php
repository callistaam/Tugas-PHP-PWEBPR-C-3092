<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pages/Dashboard.css">
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
        <h1>Dashboard</h1>
        <div class="search-box"> Search
            <img src="Pages/search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="Pages/notif.png" alt="" class="notif">
        <img src="Pages/profil.png" alt="" class="profil">
    </div>
    
    <div class="box4">
        <div class="box3">
            <a href="Restorancreate"> 
                <button class="btn-tambah">Tambah</button>
            </a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>No. Telepon</th>
                    <th>Nama Makanan</th>
                    <th>Total Harga</th>
                    <th>Tanggal Beli</th>
                    <th>Bukti Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php 
                for ($i=0; $i < count($data); $i++) { 
            ?>
            <tr>
                <td><?= $data[$i]['Kode_Transaksi'] ?></td>
                <td><?= $data[$i]['No_Telepon'] ?></td>
                <td><?= $data[$i]['Nama_Makanan'] ?></td>
                <td><?= $data[$i]['Total_Harga'] ?></td>
                <td><?= $data[$i]['Tanggal_Beli'] ?></td>
                <td><img style="width: 100px" src="Controller/uploads/<?= $data[$i]['Bukti']; ?>"></td>
                
                <td class="grp-btn">
                    <a href="/tugas2/Restoranupdate/<?= $data[$i]['Kode_Transaksi'] ?>">
                        <button class="btn-edit">Edit</button>  
                    </a>
                    <a href="/tugas2/deleteresto/<?= $data[$i]['Kode_Transaksi'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                        <button class="btn-hapus">Hapus</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>