<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Biodata</title>
    <link rel="stylesheet" href="assets/css/form.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: url("https://wallpapercave.com/wp/wp12386266.jpg");
            background-size: cover;

        }
        .container {
            padding: 20px;
            background-color: white;
            border-radius: 10px;           
            width: 500px;
            margin: 130px auto;
            
            
    
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: red;
            font-size: 19px;
        }
        .container p {
            margin-bottom: 10px;
            color: blue;
            font-size: 14px;
        }
        .container p strong {
            font-weight: bold;
            color: blue;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <p><strong>Nama :</strong> <?php echo $nama; ?></p>
        <p><strong>NIM :</strong> <?php echo $nim; ?></p>        
        <p><strong>No.HP :</strong> <?php echo $nohp; ?></p>
        <p><strong>Alamat :</strong> <?php echo $alamat; ?></p>
        <p><strong>Email :</strong> <?php echo $email; ?></p>
        <p><strong>Tanggal Lahir :</strong> <?php echo $tgl_lahir; ?></p>
    </div>
</body>
</html>