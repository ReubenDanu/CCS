<?php

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
</head>

<body>
    <?php
    require_once('../../BASE/connection.php');
    require_once('./COMPONENT/navbar.php.html');
    require_once('../../BASE/auth.php');
    ?>
    <main>
        <?php
        // fetch data from database based on nik
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

            <div class="data">
                <form action="../LOGIC/edit_profile.php">
                    <div>
                        <label><span class="label">Nik :</span> <input class="data" value="<?php echo $_POST["nik"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Name :</span> <input class="data" value="<?php echo $_POST["name"] ?>">
                            </input>
                        </label>
                    </div>
                    <div>
                        <label><span class="label">Username :</span> <input class="data" value="<?php echo $_POST["username"] ?>">
                            </input>
                    </div>
                    </label>
                    <div>
                        <label><span class="label">Password :</span> <input class="data" value="<?php echo $_POST["password"] ?>">
                            </input>
                    </div>
                    </label>
                    <div>
                        <label><span class="label">Telephone :</span> <input class="data" value="<?php echo $_POST["telp"] ?>">
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
    <?php
    include('./COMPONENT/footer.php.html');
    ?>
</body>

</html>