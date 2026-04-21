<?php
$nama = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website PHP Keren</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 0.8s ease;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(79,172,254,0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #f1f9ff;
            border-left: 5px solid #4facfe;
            border-radius: 8px;
            text-align: left;
            animation: slideUp 0.5s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        @keyframes slideUp {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

    </style>
</head>
<body>

<div class="container">
    <h2>✨ Form Input Keren</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Masukkan Nama" required>
        <textarea name="pesan" placeholder="Masukkan Pesan" required></textarea>
        <button type="submit">🚀 Kirim</button>
    </form>

    <?php if ($nama && $pesan): ?>
        <div class="hasil">
            <h3>📌 Hasil Input</h3>
            <p><b>Nama:</b> <?php echo $nama; ?></p>
            <p><b>Pesan:</b> <?php echo $pesan; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>