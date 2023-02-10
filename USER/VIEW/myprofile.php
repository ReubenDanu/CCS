<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./ASSETS/CSS/myprofile.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
</head>
<body>
    <?php
        include('./COMPONENT/navbar.php.html');
    ?>
    <main>
        <?php
            // fetch data from database based on nik
        ?>
            <div class="container">
                <div class="profile">
                    <img class="profile-avatar" alt="Reuben Danu" src="https://cdn.dribbble.com/users/12989289/avatars/normal/data?1661947896">
                    <div>
                        <span><?php //$name ?>Reuben Danu Arbito</span>
                        <a href="./edit_profile">Edit Profile</a>
                    </div>
                </div>

                <div class="data">
                    <table>
                        <tbody>
                            <tr>
                                <td><span class="label">Nik :</span> <span class="data">sdfsdfsdf<?php $nik?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Name :</span> <span class="data">asdfasfd<?php $name?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Username :</span> <span class="data">adfa<?php $username?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Password :</span> <span class="data">asdf<?php $password?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Email :</span> <span class="data">adsf<?php $email?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Telephone :</span> <span class="data">asdf<?php $telephone?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    <?php
        include('./ASSETS/CSS/footer.php.html');
    ?>
    </body>
    </html>
