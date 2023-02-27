<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- code untuk menghubungkan dengan css -->
    <title>Biodata Cara Lain||mengirim data</title>
</head>
<body>
    <!-- code untuk tampilan yang akan muncul/tampil -->
    <h1> Biodata dengan cara mengirimkan data dari route </h1>
    <h3><?= $nama; ?></h3> <!-- tampilan disini akan tampil apabila memanggil method yang ada pada route -->
    <p><?= $email; ?></p>
    <img src="img/<?= $image; ?>"alt="<?= $nama; ?>" width="200">


    <script src="js/script.js"></script> <!-- code yang menghubungkan dengan javascript untuk menampilakan alert/popup -->
</body>
</html>