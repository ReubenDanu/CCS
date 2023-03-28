<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK</title>
    <link rel="stylesheet" href="./ASSETS/CSS/table.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
    <link rel="stylesheet" href="./ASSETS/CSS/data.css">
</head>
<style>
button{
    position: absolute;
    top: 50px;
    left: 30%;
    background: white;
    border: none;
    outline:none;
    box-shadow: 0 0 2px black;
    border-radius: 6px;
    padding: 10px 12px;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    max-width: 100%;
    width: 80%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    text-align: center;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.styled-table tbody tr td .photo{
    max-width: 50%;
        display: block;
        height: auto;
        width: 80px;
        margin:auto;
}

main{
    padding: 40px 0;
}

h1,
h2,
h3{
    width: fit-content;
    margin: auto;
}

main .styled-table{
    margin: auto;
    margin-top: 30px;
}

.operation-link{
    text-decoration: none;
    color: #009879;
}

.box{
    margin-top: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.empty{
    font-weight: 500;
    font-size: 1.6rem;
    margin: auto;
    display: block;
    width: fit-content;
}

.more.operation-link{
    text-decoration: none;
        color: #009879;
        display: block;
        margin: auto;
        text-align: center;
}

span.report{
    width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        margin:auto;
}

.styled-table .photo{
    max-width: 100%;
    width: 80px;
    height: auto;
    display: block;

}
    </style>
<body>
    <button type="button" style="position: relative;
z-index: 100; cursor: pointer;" class="btn btn-warning" onclick="frames['frame'].print();">
<i class="fa fa-print"></i>
Cetak Data
</button>
<iframe src="./report.php" name="frame" style="width: 100%; margin-left: auto; right: 0;
position: absolute; z-index: -90" height="100%" frameborder="0"></iframe>
</body>
</html>