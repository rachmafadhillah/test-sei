<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lokasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            margin-right: 10px;
            color: #ffffff;
            text-decoration: none;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .confirm-delete {
            color: #dc3545;
            background-color: red;
        }

        .confirm-delete:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Lokasi</h1>
    <a href="<?php echo site_url('lokasi/create'); ?>">Tambah Lokasi Baru</a>
    <a href="<?php echo site_url('proyek/index'); ?>">Proyek</a>
    <table>
        <thead>
            <tr>
                <th>Nama Lokasi</th>
                <th>Negara</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lokasi as $item): ?>
                <tr>
                    <td><?php echo $item['namaLokasi']; ?></td>
                    <td><?php echo $item['negara']; ?></td>
                    <td><?php echo $item['provinsi']; ?></td>
                    <td><?php echo $item['kota']; ?></td>
                    <td class="action-links">
                        <a href="<?php echo site_url('lokasi/edit/' . $item['id']); ?>">Edit</a>
                        <a href="<?php echo site_url('lokasi/delete/' . $item['id']); ?>" class="confirm-delete" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
