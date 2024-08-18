<!DOCTYPE html>
<html>

<head>
    <title>Edit Proyek</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="<?php echo site_url('proyek/edit/' . $proyek['id']); ?>" method="post">
        <h1>Edit Proyek</h1>

        <label>Nama Proyek:</label>
        <input type="text" name="namaProyek" value="<?php echo $proyek['namaProyek']; ?>" required>

        <label>Client:</label>
        <input type="text" name="client" value="<?php echo $proyek['client']; ?>" required>

        <label>Tanggal Mulai:</label>
        <input type="date" name="tglMulai" value="<?php echo isset($proyek['tglMulai']) ? $proyek['tglMulai'] : ''; ?>"
            required>

        <label>Tanggal Selesai:</label>
        <input type="date" name="tglSelesai"
            value="<?php echo isset($proyek['tglSelesai']) ? $proyek['tglSelesai'] : ''; ?>" required>


        <label>Pimpinan Proyek:</label>
        <input type="text" name="pimpinanProyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required>

        <label>Keterangan:</label>
        <textarea name="keterangan" required><?php echo $proyek['keterangan']; ?></textarea>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>