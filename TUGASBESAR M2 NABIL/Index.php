<?php

$katalog_buku = [
    [
        'judul' => 'Pengenalan Algoritma dan Pemrograman',
        'penulis' => 'Siti Rahma',
        'kategori' => 'Buku Pelajaran',
        'tahun' => 2023,
        'stok' => 8
    ],
    [
        'judul' => 'Komik Spiderman',
        'penulis' => 'Stan Lee',
        'kategori' => 'Komik',
        'tahun' => 2022,
        'stok' => 4
    ]
];

$pesan_sukses = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_baru    = htmlspecialchars($POST['judul']);
    $penulis_baru  = htmlspecialchars($POST['penulis']);
    $kategori_baru = htmlspecialchars($POST['kategori']);
    $tahun_baru    = htmlspecialchars($POST['tahun']);
    $stok_baru     = htmlspecialchars($POST['stok']);

    $katalog_buku[] = [
        'judul'    => $judul_baru,
        'penulis'  => $penulis_baru,
        'kategori' => $kategori_baru,
        'tahun'    => $tahun_baru,
        'stok'     => $stok_baru
    ];

    $pesan_sukses = "Data buku berhasil ditambahkan ke katalog perpustakaan!";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Katalog - Perpustakaan Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px auto;
            max-width: 850px;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 25px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #27ae60;
            padding-bottom: 10px;
        }
        .alert {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px 12px;
            text-align: left;
        }
        th {
            background-color: #2c3e50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn-tambah {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-tambah:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Display Katalog Perpustakaan Digital</h2>

        <?php if (!empty($pesan_sukses)): ?>
            <div class="alert">
                <strong>Sukses:</strong> <?php echo $pesan_sukses; ?>
            </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor = 1;
                foreach ($katalog_buku as $item): 
                ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><strong><?php echo $item['judul']; ?></strong></td>
                        <td><?php echo $item['penulis']; ?></td>
                        <td><?php echo $item['kategori']; ?></td>
                        <td><?php echo $item['tahun']; ?></td>
                        <td><?php echo $item['stok']; ?> eks</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="form_buku.php" class="btn-tambah">+ Tambah Buku Lagi</a>
    </div>

</body>
</html>