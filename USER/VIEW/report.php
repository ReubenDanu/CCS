<?php
// include('auth.php');
// include('page.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSERT REPORT</title>
  <script src="../../DatePickerX/dist/js/DatePickerX.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../DatePickerX/dist/css/DatePickerX.min.css">
  <link rel="stylesheet" href="./ASSETS/CSS/reset.css" />
  <link rel="stylesheet" href="./ASSETS/CSS/insert_report.css">
</head>

<body>
  <?php
  require_once('./COMPONENT/navbar.php.html');
  require_once('../../BASE/auth.php');
  ?>
  <main>
    <h1>Laporkan Keluhan Anda</h1>
    <form action="../LOGIC/report.php" method="post" enctype="multipart/form-data">
      <h1 class="title">Sampaikan Laporan Anda</h1>
      <span class="mini-guide">Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar
        <a href="./index.php#guide">Guide</a></span>
      <div class="complaint-input-category">
        <input placeholder="Masukkan judul laporan anda*" name="title" required="true" type="text" class="input-form" />
      </div>
      <div class="complaint-input-category">
        <textarea placeholder="Masukkan isi laporan anda*" name="content" required="true" type="text" class="input-form" ></textarea>
      </div>
      <div class="complaint-input-category date-group">
        <input type="text" class="date-picker-x-input" name="date_report" placeholder="Masukkan tanggal kejadian*" />
      </div>
      <div class="complaint-input-category">
        <input placeholder=i"Lampirkan media*" name="photo" type="file" accept=".pdf,.jpeg,.png,.zip" multiple
          class="input-form" />
      </div>
      <div class="form-button">
        <button type="submit" name="submit" value="submit">Lapor!</button>
      </div>
    </form>
  </main>

  <?php
  require_once('./COMPONENT/footer.php.html');

  ?>

  <script>
    const dateInput = document.getElementsByName("date_report")[0];
    window.addEventListener('DOMContentLoaded', function () {
      dateInput.DatePickerX.init({
        mondayFirst: false,
        minDate: null,
        maxDate: function () {
          let date = new Date();
          return date;
        },
        clearButton: true
      });

    });
  </script>
</body>

</html>