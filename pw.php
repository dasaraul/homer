<?php
// Memeriksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil nilai yang dikirimkan melalui form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Melakukan validasi login
  if ($username === "d4" && $password === "marves") {
    // Jika login berhasil, redirect ke halaman utama
    header("Location: data.html");
    exit();
  } else {
    // Jika login gagal, tampilkan pesan error
    echo '<script>
                        $(document).ready(function(){
                            $(".popup").show();
                        });
                  </script>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Proses Login</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

</head>
<center>
<body class="blank">
    <div class="color-line">
        <div class="back-link">
            <h3>Password yang Anda masukkan salah!</h3>
                <a href="index.html" class="btn btn-primary">Back to Login</a>
                </div>
            </div>
        </html>