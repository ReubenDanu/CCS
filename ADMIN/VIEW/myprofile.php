<?php
if(session_status() != 2){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./ASSETS/CSS/myprofile.css">
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
            require_once('../../BASE/authAdmin.php');
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM `staff` WHERE `id_staff` = '$id'";
            $result = $mysqli->query($sql);
            $data = $result->fetch_assoc();
            $json_data = json_encode($data);
        ?>
            <div class="container">
                <div class="profile">
                    <img class="profile-avatar" alt="Reuben Danu" src="https://cdn.dribbble.com/users/12989289/avatars/normal/data?1661947896">
                    <div>
                        <span><?php echo $data['name']; ?></span>
                        <a href="./edit_profile.php" id="edit">Edit Profile</a>
                    </div>
                </div>

                <div class="data">
                    <table>
                        <tbody>
                            <tr>
                                <td><span class="label">ID :</span> <span class="data"><?php echo $data['id_staff']?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Name :</span> <span class="data"><?php echo $data['name']?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Username :</span> <span class="data"><?php echo $data['username']?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Password :</span> <span class="data"><?php echo $data['password']?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Telephone :</span> <span class="data"><?php echo $data['telp']?></span></td>
                            </tr>
                            <tr>
                                <td><span class="label">Level :</span> <span class="data"><?php echo $data['level']?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
         <script defer>
         function processJsonData(json) {
            let data = JSON.parse(json);
            let form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", "./edit_profile.php");
            
            Object.keys(data).forEach(key => {
                let input = document.createElement("input");
                input.setAttribute("type", "hidden");
                input.setAttribute("readonly", "");
                input.setAttribute("name", key);
                input.setAttribute("value", data[key]);
                form.append(input);
            });
            form.style.display = "none";
            document.body.append(form);
            
            form.submit();            
        }

        // Attach an event listener to the button
        document.getElementById('edit').onclick = function(e) {
            // Call the function with the JSON string as an argument
            e.preventDefault();
            processJsonData('<?php echo $json_data; ?>');
        }
    </script>
    <?php
        require_once('./COMPONENT/footer.php.html');
    ?>
    </body>
    </html>