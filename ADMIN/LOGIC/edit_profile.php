<?php
    if(session_status() == 0){
        session_start();
    }
    if(isset($_POST)){
        require_once("../../BASE/connection.php");

        $base = "UPDATE `staff` SET `id_staff`='{id_staff}', `name`='{name}', `username`='{username}', `password`='{password}', `telp`='{telp}' WHERE `id_staff`='{id_staff}'";

        foreach ($_POST as $key => $value) {
            $placeholder = '{' . $key . '}';
            $base = str_replace($placeholder, $value, $base);
        }
    $result = $mysqli->query($base);

    $json_data = json_encode($_POST);
    if ($result) {
        $flag = 1;
    } else {
        $flag = 0;
    }
    }else{
        // header('location:../VIEW/'.$page);
    }

?>

<body>
      <script defer>
        let ikan = "ikan";
            function processJsonData(params) {
                let data = JSON.parse(params)
                let form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "../VIEW/edit_profile.php?success=false");
                if('<?php echo $flag?>' == 1){
                    form.setAttribute("action", "../VIEW/edit_profile.php?success=true");
                }
                
                Object.keys(data).forEach(key => {
                    let input = document.createElement("input");
                    input.setAttribute("type", "hidden");
                    input.setAttribute("readonly", "");
                    input.setAttribute("name", key);
                    input.setAttribute("value", data[key]);
                    form.append(input);
                });
                console.log(form);
                form.style.display = "none";
                form.style.visibility = "hidden";
                document.body.append(form);
                
                form.submit();            
            }        
            processJsonData('<?php echo $json_data?>');
            
    </script>
</body>