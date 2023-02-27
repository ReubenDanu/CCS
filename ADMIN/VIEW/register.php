<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./ASSETS/CSS/reset.css" />
  <link rel="stylesheet" href="./ASSETS/CSS/register.css" />
  <title>Login</title>
</head>

<body>
  <div class="container">
    <?php
      if(isset($_GET['invalid'])){
        ?>
          <div class="warning-banner" id="warning-banner">
            <span>Password yang anda masukan salah</span>
          </div>
        <?php
      }
    ?>
    <div class="icon"></div>
    <div class="title">
      <h1>Admin</h1><h1>Sign Up</h1>
    </div>
    <form action="../LOGIC/register.php" method="POST">
      <div class="box">
        <input type="text" name="name" id="name" class="input rectangle" placeholder="Enter your name" />
        <div class="warning hidden">Wrong Format</div>
      </div>
      <div class="box">
        <input type="username" name="username" id="username" class="input rectangle"
          placeholder="Enter your username" />
      </div>

      <div class="box">
        <input type="password" name="password" id="password" class="input rectangle"
          placeholder="Enter your password" />
      </div>
      <div class="box">
        <input type="text" name="telp" id="telp" class="input rectangle" placeholder="Enter your phone number" />
        <div class="warning hidden">Wrong Format</div>
      </div>

      <button type="submit" class="button rectangle">Sign Up</button>
      <div class="register">
        <span class="info">Sudah punya account?</span>
        <a href="./login.php" class="button rectangle"> Masuk</a>
      </div>
    </form>
  </div>
  <script>
    
    const inputTelp = document.querySelector("[name='telp']");
    const warning = document.querySelectorAll(".warning");
    // check the input only number are allowed
    let regex2 = /^(\+?\d+)$/;
    ;
    inputTelp.addEventListener("input", e => {
      if (regex2.test(e.target.value) !== false || e.target.value == "") {
        warning[1].parentElement.style.paddingBottom = "0";
        warning[1].classList.replace("visible", "hidden");

      } else {
        warning[1].classList.replace("hidden", "visible");
        warning[1].parentElement.style.paddingBottom = "58px";
      }
    })
  </script>
</body>

</html>