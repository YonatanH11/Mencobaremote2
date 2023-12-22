<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <section>
        <?php
            // Ganti informasi pengguna dengan informasi yang sesuai
            $nama = "John Doe";
            $umur = 25;
            $pekerjaan = "Web Developer";
            $alamat = "Jl. Contoh No. 123, Kota Contoh";
        ?>

        <h1><?php echo $nama; ?></h1>
        <p>Umur: <?php echo $umur; ?> tahun</p>
        <p>Pekerjaan: <?php echo $pekerjaan; ?></p>
        <p>Alamat: <?php echo $alamat; ?></p>
    </section>

</body>
</html>