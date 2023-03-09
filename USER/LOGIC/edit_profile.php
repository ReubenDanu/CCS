<?php
    if(session_status() == 0 || session_status() == 1){
        session_start();
    }

    if(isset($_POST) && count($_POST) > 0){
        require_once("../../BASE/connection.php");
        $template = "UPDATE community SET nik='{nik}', name='{name}', username='{username}', password='{password}', telp='{telp}' WHERE nik='{nik}'";
        foreach ($_POST as $key => $value) {
            $placeholder = '{'. $key .'}';
            $template = str_replace($placeholder, $value, $template);
        }
        $result = $mysqli->query($template);

        $json_data = json_encode($_POST);
        if($result){
            $flag = 1;
        }else{
            $flag = 0;
        }
        // var_dump($template, $result);
    }


?>

<body>

</body>

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
