<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="assets/css/form.css">
    <style>
        
        body {
            font-family: Poppins, sans-serif;
            background: url("https://wallpapercave.com/wp/wp12386266.jpg");
            background-size:cover;
            
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
        }   
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }
        label {
            display: block;
            color: white;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Biodata Mahasiswa</h1>
        <form action="<?php echo base_url('biodata/tampil'); ?>" method="POST">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nim">NIM :</label>
            <input type="number" id="nim" name="nim" required>
            
            <label for="no_hp">Nomor HP:</label>
            <input type="number" id="nohp" name="nohp" required>

            <label for="alamat">Alamat Lengkap :</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <input type="submit" value="Kirim"> <input type="reset" value="Batal">
        </form>
    </div>
</body>
</html>