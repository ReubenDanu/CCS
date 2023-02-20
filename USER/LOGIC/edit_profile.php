<?php
    if(session_status() == 0){
        session_start();
    }
    if(isset($_POST)){
        $base = "UPDATE community SET nik={nik}, name={name}, username={username}, password={password}, telp{telp}";

        foreach ($_POST as $key => $value) {
            $placeholder = '{' + $key + ']';
            str_replace($placeholder, $value, $base);
        }

        // var_dump($base);
    }else{
        header('location:../VIEW/'.$page);
    }


    var_dump($_POST);

?>