<?php
  $nama = "Gibral Haikal Faiz";
  $kampus = "Politeknik Manufaktur Bandung";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $nama ?></title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class="efek-foto" src="Pict/Spider-Man.jpg" alt="Spider-Man" /><br />
    <h1><?= $nama ?></h1>
    <p class="deskripsi">
      Halo! Saya <?= $nama ?>, Mahasiswa semester 3 di <?= $kampus ?>
    </p>

    <h2>Pendidikan</h2>
    <table class="table">
      <tr>
        <th>Nama</th>
        <th>Sekolah</th>
        <th>Tahun</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Ma Al-Ihsan</td>
        <td>2021-2024</td>
      </tr>
      <tr>
        <td>2</td>
        <td><?= $kampus ?></td>
        <td>2024-Sekarang</td>
      </tr>
    </table>

    <h2>Social Media</h2>
    <a href="https://www.instagram.com/gbrlhf?igsh=bTRtNW9sZmhrd3Jh">
      <img class="Instagram" src="/Pict/IG.jpeg" alt="Instagram" />@gbrlhf<br />
    </a>

    <a href="https://www.linkedin.com/in/gibral-haikal-faiz-46449a319/">
      <img class="LinkedIn" src="/Pict/linkedin.jpeg" alt="LinkedIn" /><?= $nama ?>
    </a>

    <h2>Hobi</h2>
    <ul>
      <li>Olahraga</li>
      <li>Belajar HTML</li>
      <li>Belajar CSS</li>
    </ul>

    <h2>Pengalaman Organisasi</h2>
    <ol>
      <li>HIMAMO Family</li>
      <li>Sekretaris DPM-KM</li>
      <li>Sekretaris OSIS MA-Al-ihsan</li>
    </ol>
  </body>
</html>
