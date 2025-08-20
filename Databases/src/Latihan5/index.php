<?php
session_start();

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000000;
}

$saldo = $_SESSION['saldo'];
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pilihan = $_POST['pilihan'];

    if ($pilihan == 1) {
        $pesan = "Sisa saldo Anda: Rp. " . number_format($saldo, 0, ',', '.');
    }
    elseif ($pilihan == 2) {
        $jumlah = $_POST['jumlah'] ?? 0;
        $_SESSION['saldo'] += $jumlah;
        $saldo = $_SESSION['saldo'];
        $pesan = "Saldo berhasil ditambahkan.<br>Jumlah ditambahkan: Rp. " . number_format($jumlah, 0, ',', '.') . 
                 "<br>Sisa saldo: Rp. " . number_format($saldo, 0, ',', '.');
    }
    elseif ($pilihan == 3) {
        $jumlah = $_POST['jumlah'] ?? 0;
        if ($jumlah > $saldo) {
            $pesan = "Saldo tidak mencukupi! Saldo Anda: Rp. " . number_format($saldo, 0, ',', '.');
        } else {
            $_SESSION['saldo'] -= $jumlah;
            $saldo = $_SESSION['saldo'];
            $pesan = "Saldo berhasil dikurangi.<br>Jumlah diambil: Rp. " . number_format($jumlah, 0, ',', '.') . 
                     "<br>Sisa saldo: Rp. " . number_format($saldo, 0, ',', '.');
        }
    }
    else {
        $pesan = "Pilihan tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Latihan IF Pilihan - ATM</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Latihan IF Pilihan - ATM</h2>
  <p>Pilihan menu ATM:</p>
  <ul>
    <li>1. Cek Saldo</li>
    <li>2. Setor Uang</li>
    <li>3. Ambil Uang</li>
  </ul>

  <form method="post">
    <label>Tulis Nomor yang anda pilih:</label>
    <input type="number" name="pilihan" required>

    <?php if (isset($_POST['pilihan']) && ($_POST['pilihan'] == 2 || $_POST['pilihan'] == 3)) { ?>
        <label>Masukkan jumlah:</label>
        <input type="number" name="jumlah" required>
    <?php } ?>

    <button type="submit">Proses</button>
  </form>

  <?php if (!empty($pesan)) { ?>
    <div class="hasil">
      <p><?php echo $pesan; ?></p>
    </div>
  <?php } ?>
</div>
</body>
</html>
