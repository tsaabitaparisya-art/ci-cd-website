<?php
// Proses form
$nama = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website PHP Sederhana</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            background: white;
            padding: 20px;
            margin: 50px auto;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 5px;
        }
        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .hasil {
            margin-top: 20px;
            background: #e7f3ff;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Sederhana PHP</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Masukkan Nama" required><br>
        <textarea name="pesan" placeholder="Masukkan Pesan" required></textarea><br>
        <button type="submit">Kirim</button>
    </form>

    <?php if ($nama && $pesan): ?>
        <div class="hasil">
            <h3>Hasil Input:</h3>
            <p><b>Nama:</b> <?php echo $nama; ?></p>
            <p><b>Pesan:</b> <?php echo $pesan; ?></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>