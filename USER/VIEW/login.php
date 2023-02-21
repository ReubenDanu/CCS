<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./ASSETS/CSS/login.css" />
  <link rel="stylesheet" href="./ASSETS/CSS/reset.css" />
  <title>Login</title>
</head>
<?php
  include('../../BASE/session.php');
  session_start();
  if($_SESSION['login'] == 'login'){
    header('location:./'.$_SESSION['page']);
  }
?>
<body>
  <div class="container">
    <?php
      if(isset($_GET['user'])){
        ?>
          <div class="warning-banner" id="warning-banner">
            <span>Password yang anda masukan salah</span>
          </div>
        <?php
      }
    ?>
    <div class="icon"></div>
    <div class="title">
      <h1>Sign In</h1>
    </div>
    <form action="../LOGIC/login.php" method="post">
      <input type="text" name="username" id="username" class="input rectangle" placeholder="Enter your username" />
      <input type="password" name="password" id="password" class="input rectangle" placeholder="Enter your password" />
      <div class="main">
      </div>
      <button type="submit" class="button rectangle">Sign In</button>
      <div class="register">
        <span class="info">Tidak punya account?</span>
        <a href="./register.php" class="button rectangle">
          Daftar sekarang!</a>
      </div>
    </form>
  </div>

  <script defer>
    const warning = document.getElementById("warning-banner");
    warning.addEventListener("click", function(e){
      warning.style.display = "none";
      warning.style.visibility = "hidden";
    })
  </script>
</body>
</html>
