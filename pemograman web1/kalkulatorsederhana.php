<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Aplikasi Kalkulator Sederhana</h2>
    <form method="post">
        Masukkan Bilangan Pertama: <input type="number" name="bilangan1" required><br><br>
        Masukkan Bilangan Kedua: <input type="number" name="bilangan2" required><br><br>
        Pilih Operasi: <br>
        <input type="radio" name="operasi" value="tambah" required> Penjumlahan (+)<br>
        <input type="radio" name="operasi" value="kurang"> Pengurangan (-)<br>
        <input type="radio" name="operasi" value="kali"> Perkalian (*)<br>
        <input type="radio" name="operasi" value="bagi"> Pembagian (/)<br><br>
        <input type="submit" name="submit" value="Hitung"><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case "tambah":
                $hasil = $bilangan1 + $bilangan2;
                break;
            case "kurang":
                $hasil = $bilangan1 - $bilangan2;
                break;
            case "kali":
                $hasil = $bilangan1 * $bilangan2;
                break;
            case "bagi":
                if ($bilangan2 != 0) {
                    $hasil = $bilangan1 / $bilangan2;
                } else {
                    echo "Pembagian dengan nol tidak diperbolehkan.";
                    exit;
                }
                break;
        }

        echo "Hasil Perhitungan: $hasil";
    }
    ?>
</body>
</html>
