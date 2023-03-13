<?php
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
if (count($_POST) == 0) {
    header('location:myprofile.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./ASSETS/CSS/edit_profile.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
</head>

<body>
    <?php
    require_once('./COMPONENT/sidebar.php');
    ?>
    <main>
        <?php
        require_once('../../BASE/connection.php');
        require_once('../../BASE/auth.php');

        ?>
     
        <div class="container">
            <div class="profile">
                <img class="profile-avatar" alt="Reuben Danu"
                    src="https://cdn.dribbble.com/users/12989289/avatars/normal/data?1661947896">
                <div>
                    <span>
                        <?php echo $_POST['name'] ?>
                    </span>
                    <a href="./myprofile.php" id="edit">Cancel edit?</a>

                </div>
            </div>
 <div class="banner">
                <?php 
                    if(isset($_GET['success'])){
                        if($_GET['success'] == 'true'){
                        ?>
                            <div class="success" id="notify">Data telah berhasil di edit !</div>
                        <?php
                        }else{
                            ?>
                            <div class="failed" id="notify">Data gagal di edit !</div>
                            <?php
                        }
                    }
                
                ?>
            </div>
            <div class="data">
                <form action="../LOGIC/edit_profile.php" method="post">
                    <div>
                        <label><span class="label">ID :</span> <input class="data" name="id_staff" value="<?php echo $_POST["id_staff"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Name :</span> <input class="data" name="name" value="<?php echo $_POST["name"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Username :</span> <input class="data" name="username" value="<?php echo $_POST["username"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Password :</span> <input class="data" name="password" value="<?php echo $_POST["password"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Telephone :</span> <input class="data" name="telp" value="<?php echo $_POST["telp"] ?>">
                            </input>
                        </label>
                    </div>

                    <div>
                        <button type="submit">Confirm Edit</button>
                    </div>

                </form>


            </div>
        </div>
    </main>
       <script defer>
            let currentUrl = new URL(window.location);
            if(currentUrl.searchParams.has("success")){
                let banner = document.getElementById('notify');
                banner.addEventListener('click', function(e){
                banner.style.display = "none";
                banner.style.visibility = "hidden";
                const url = new URL(window.location);

                // Remove the "param" parameter
                url.searchParams.delete("success");

                // Replace the current URL with the new URL
                window.history.replaceState(null, null, url);
            })

            banner.addEventListener("mouseover", function(e){
                banner.style.cursor = "pointer";
            })
            }
        </script>
    <?php
    include('./COMPONENT/footer.php.html');
    ?>
</body>

</html>