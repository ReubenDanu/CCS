<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./ASSETS/CSS/login.css" />
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css" />
    <link rel="stylesheet" href="./ASSETS/CSS/register.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="icon"></div>
      <div class="title"><h1>Sign Up</h1></div>
      <form action="../LOGIC/register.php">
        <div class="box">
          <input
            type="text"
            name="nik"
            id="nik"
            class="input rectangle"
            placeholder="Enter your NIK"
          />
          <div class="warning hidden">Wrong Format</div>
        </div>
        <div class="box">
          <input
          type="email"
          name="email"
          id="email"
          class="input rectangle"
          placeholder="Enter your email"
          />
        </div>
        <div class="box">
          <input
          type="text"
          name="name"
          id="name"
          class="input rectangle"
          placeholder="Enter your Name"
          />
        </div>
        <div class="box">
          <input
          type="text"
          name="username"
          id="username"
          class="input rectangle"
          placeholder="Enter your username"
          />
        </div>
        <div class="box">
          <input
          type="password"
          name="password"
          id="password"
          class="input rectangle"
          placeholder="Enter your password"
          />
        </div>
        <div class="box">
          <input
          type="text"
          name="telp"
          id="telp"
          class="input rectangle"
          placeholder="Enter your phone number"
          />
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
      const inputNik = document.querySelector("[name='nik']");
      const inputTelp = document.querySelector("[name='telp']");
      const warning = document.querySelectorAll(".warning");
      // check the input only number are allowed
      let regex1 = /[a-zA-Z]/;
      let regex2 = /^(\+?\d+)$/;
;
      inputNik.addEventListener("input", (e) => {
        if(regex1.test(e.target.value) !== true){
          warning[0].parentElement.style.paddingBottom = "0";
          warning[0].classList.replace("visible", "hidden");
          
        } else {
          warning[0].classList.replace("hidden", "visible");
          warning[0].parentElement.style.paddingBottom = "58px";
        }
      });
      inputTelp.addEventListener("input", e=> {
        if(regex2.test(e.target.value) !== false || e.target.value == ""){
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
