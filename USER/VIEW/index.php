<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
  <?php
  include('../../BASE/auth.php');
  ?>
  <!-- create navbar horizontal -->
  <!-- make a user interaction can be a rendering a html or just changing some style to more alive -->
  <!-- such as hover, click, scroll, -->
  <!-- use icon for better imagery -->
  <!-- blackness easy on eyes -->
  <!-- font style -->
  <!-- sizing -->
  <!-- positioning -->

  <!-- i don't use colourfull element, i don't use any animation yet, position doesn't generous complicated mine is basic row and col not dynamic -->
  <?php
  if ($_SESSION['login'] == 'login') {
    require_once('./COMPONENT/navbar.php.html');
  } else {
    require_once('./COMPONENT/landing-page-nav.php.html');
  }
  ?>


  <main class="container" id="home">
    <div class="main-title">
      <p>
        <strong>Layanan Aspirasi dan Pengaduan Online Rakyat</strong><br />
        <span class="second">Sampaikan laporan Anda langsung kepada instansi pemerintah
          berwenang</span>
      </p>
    </div>

    <form action="./confirmation.php" method="post" enctype="multipart/form-data">
      <h1 class="title">Sampaikan Laporan Anda</h1>

      <span class="mini-guide">Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar
        <a href="#guide">Guide</a></span>

      <div class="complaint-input-category">
        <input placeholder="Masukkan judul laporan anda*" name="title" required="true" type="text" class="input-form" />
      </div>
      <div class="complaint-input-category">
        <textarea placeholder="Masukkan isi laporan anda*" name="content" required="true" type="text-area"
          class="input-form"></textarea>
      </div>
      <div class="complaint-input-category date-group">
        <input type="text" class="date-picker-x-input" name="input-date" placeholder="Masukkan tanggal kejadian*" />
      </div>
      <div class="complaint-input-category">
        <input placeholder="Lampirkan media*" name="files" type="file" accept=".pdf,.jpeg,.png,.zip" multiple
          class="input-form" />
      </div>
      <div class="form-button">
        <button type="submit">Lapor!</button>
      </div>
    </form>

    <div class="guide" id="guide">
      <h1>Guide</h1>

      <div class="container">
        <div class="step 1">
          <span class="icon">
            <i class="fa-solid fa-pen-to-square"></i>
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
          </span>
          <div class="title">Tulis Laporan</div>
          <div class="description">
            Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap
          </div>
        </div>
        <div class="step 2">
          <span class="icon">
            <i class="fa-solid fa-share"></i>
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
          </span>
          <div class="title">Proses Verifikasi</div>
          <div class="description">
            Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada
            instansi berwenang
          </div>
        </div>
        <div class="step 3">
          <span class="icon">
            <i class="fa-solid fa-comments"></i>
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
          </span>
          <div class="title">Proses Tindak Lanjut</div>
          <div class="description">
            Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan
            Anda
          </div>
        </div>
        <div class="step 4">
          <span class="icon">
            <i class="fa-regular fa-comment-dots"></i>
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
          </span>
          <div class="title">Beri Tanggapan</div>
          <div class="description">
            Anda dapat menanggapi kembali balasan yang diberikan oleh instansi
            dalam waktu 10 hari
          </div>
        </div>
        <div class="step 5">
          <span class="icon"> <i class="fa-solid fa-check"></i> </span>
          <div class="title">Selesai</div>
          <div class="description">
            Laporan Anda akan terus ditindaklanjuti hingga terselesaikan
          </div>
        </div>
      </div>
    </div>
    <div class="about" id="about">
      <h1>About</h1>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat
        repellendus est, tempora nesciunt assumenda consequuntur, veritatis
        voluptates ut facere distinctio pariatur odit, commodi illum sapiente
        quas quam expedita omnis?
      </p>
    </div>

    <div class="faq" id="faq">
      <h1>FAQ</h1>
      <div class="container">
        <div class="box 1">
          <div class="header hidden">
            Kenapa Harus Lapor?
            <span class="icon hidden"><i class="fa-solid fa-angle-up hidden"></i>
            </span>
            <div class="bg"></div>
          </div>
          <div class="content hidden">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi
            fugit molestias corporis voluptates sequi et quos alias tempore
            eum hic. Minus optio earum reiciendis amet officia vel corporis
            quas dolorem.
          </div>
        </div>
        <div class="box 2">
          <div class="header hidden">
            Apakah saya aman dari ancaman saat melapor?
            <span class="icon hidden"><i class="fa-solid fa-angle-up hidden"></i>
            </span>
            <div class="bg"></div>
          </div>
          <div class="content hidden">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quibusdam amet velit culpa eius, voluptate recusandae natus nobis
            similique eaque tempora commodi nesciunt, cumque, ut maxime.
            Quibusdam itaque amet harum sunt!
          </div>
        </div>
        <div class="box 3">
          <div class="header hidden">
            Berapa lama laporan di proses?
            <span class="icon hidden"><i class="fa-solid fa-angle-up hidden"></i>
            </span>
            <div class="bg"></div>
            </span>
          </div>
          <div class="content hidden">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
            rerum eaque non deserunt ad aperiam quis ducimus, qui nesciunt
            illum nostrum quos ea expedita, minima tenetur architecto totam
            itaque, repellendus.
          </div>
        </div>
        <div class="box 4">
          <div class="header hidden">
            Apakah diluar daerah trirenggo bisa?
            <span class="icon hidden"><i class="fa-solid fa-angle-up hidden"></i>
            </span>
            <div class="bg"></div>

            </span>
          </div>
          <div class="content hidden">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa ab
            voluptatum ex aperiam fuga non, iusto quae quo commodi. Similique
            aliquam eligendi dolorum, rem aperiam eum laborum sint voluptas a!
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="banner" id="contact">
      <img src="./ASSETS/IMAGE/trirenggo.png" alt="trirenggo-img" />
      <p>Kecamatan Trirenggo - Kota Bantul</p>
      <div class="contact">
        <a href="#" target="_blank"> <i class="fa-solid fa-envelope"></i><span>Email</span>
        </a><a href="#" target="_blank"> <i class="fa-brands fa-facebook"></i><span>Facebook</span>
        </a><a href="#" target="_blank"> <i class="fa-brands fa-instagram"></i><span>Instagram</span>
        </a><a href="#" target="_blank"> <i class="fa-brands fa-twitter"></i><span>Twitter</span>
        </a>
      </div>
    </div>
  </footer>
  <script>
    const dateInput = document.querySelector("[name=input-date]");

    const faqBoxes = document.querySelectorAll(".box .header");
    const contents = document.querySelectorAll(".box .content");

    const regex = /^[0-9]{4}[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/;

    faqBoxes.forEach(function (box, pos) {
      box.addEventListener("click", (e) => {
        let clear = box.classList.value.substring(6).trim();

        document
          .querySelectorAll(".faq .box")
          .forEach(function (element, index) {
            element.children[1].classList.add("hidden");
            element.children[0].classList.add("hidden");
            element.children[0].children[0].classList.add("hidden");
            element.children[0].children[0].children[0].classList.add("hidden");
          });

        if (clear == "hidden") {
          console.log("yes");
          box.parentElement.children[1].classList.remove("hidden");
          box.parentElement.children[0].classList.remove("hidden");
          box.children[0].classList.remove("hidden");
          box.children[0].children[0].classList.remove("hidden");
          console.log(box.children);
        } else {
          console.log("no");
          box.children[0].classList.add("hidden");
          box.parentElement.children[1].classList.add("hidden");
          box.parentElement.children[0].classList.add("hidden");
          box.children[0].children[0].classList.add("hidden");
        }
      });

      // box.parentElement.childNodes[1].classList.toggle("hidden", "show")
    });

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


      // console.log(faqBoxes)
      // faqBoxes.addEventListener("click", e=>{
      // })
  </script>
</body>
</html>
<?php
include('../LOGIC/auth.php');
include('../LOGIC/page.php');
var_dump($_SESSION['login'], $_SESSION['page'], $_SESSION['user'])
?>
