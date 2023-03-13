<?php
if(session_status() != 2){
    session_start();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./ASSETS/CSS/sidebar.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>    
    <nav>
        <div class="head">
            <div class="title">
                <h1>CCS</h1>
                <a href="./dashboard.php" class="button">Dashboard</a>
            </div>

            <ul class="links">
                <li><a class="dropdown" href="#data-show"><i class="fa-solid fa-database"></i><span>Data</span><i class="fa-solid fa-angle-right"></i></a><ul class="sub-link">
                    <li class="link"><a href="community.php"><i class="fa-solid fa-users"></i>community</a></li>
                    <li class="link"><a href="report.php"><i class="fa-solid fa-flag"></i>report</a></li>
                    <li class="link"><a href="response.php"><i class="fa-solid fa-reply"></i>response</a></li>
                    <li class="link"><a href="staff.php"><i class="fa-solid fa-user-gear"></i>staff</a></li>
                </ul></li>
                <li><a href="getReports"><i class="fa-solid fa-file"></i><span>Lihat Laporan</span><i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="verify.php"><i class="fa-solid fa-check"></i><span>Verifikasi & Validasi</span><i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="respond.php"><i class="fa-solid fa-reply"></i><span>Tanggapi Laporan</span><i class="fa-solid fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="tail">
            <div class="profile">

                <a href="myprofile.php" class="inner"><img src="https://cdn.dribbble.com/users/12989289/avatars/normal/data?1661947896" alt="profile">

                    <span class="name"><?php echo $_SESSION['user'] ?></span></i></a>
                <a href="../LOGIC/logout.php" class="outter"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
    </nav>

    <script defer>
        const dropdown = document.getElementsByClassName('dropdown');
        const hiddenList = document.getElementsByClassName('sub-link');
        console.log(dropdown);
        for(let item of dropdown) {
            item.addEventListener('click',function(e){
                for (const item of hiddenList) {
                    console.log(item);
                    item.classList.toggle('show');
                }
                
            })
        }
    </script>
</body>
</html>