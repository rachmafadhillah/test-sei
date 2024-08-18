<!DOCTYPE html>
<html>

<head>
    <title>Edit Lokasi</title>
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
    <form action="<?php echo site_url('lokasi/edit/' . $lokasi['id']); ?>" method="post">
        <h1>Edit Lokasi</h1>

        <label>Nama Lokasi:</label>
        <input type="text" name="namaLokasi" value="<?php echo $lokasi['namaLokasi']; ?>" required>

        <label>Negara:</label>
        <input type="text" name="negara" value="<?php echo $lokasi['negara']; ?>" required>

        <label>Provinsi:</label>
        <input type="text" name="provinsi" value="<?php echo $lokasi['provinsi']; ?>" required>

        <label>Kota:</label>
        <input type="text" name="kota" value="<?php echo $lokasi['kota']; ?>" required>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>