<!DOCTYPE html>
<html>
<head>
    <title>Tambah Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        p {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php if ($this->session->flashdata('error')): ?>
        <p><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <form action="<?php echo site_url('proyek/create'); ?>" method="post">
        <h1>Tambah Proyek Baru</h1>
        <label>Nama Proyek:</label>
        <input type="text" name="namaProyek" required>
        
        <label>Client:</label>
        <input type="text" name="client" required>
        
        <label>Tanggal Mulai:</label>
        <input type="date" name="tglMulai" required>
        
        <label>Tanggal Selesai:</label>
        <input type="date" name="tglSelesai" required>
        
        <label>Pimpinan Proyek:</label>
        <input type="text" name="pimpinanProyek" required>
        
        <label>Keterangan:</label>
        <textarea name="keterangan" required></textarea>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
