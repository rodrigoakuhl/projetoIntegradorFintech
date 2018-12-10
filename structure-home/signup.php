<?php 
    //var_dump(isset($_REQUEST["signup"]));
    if(isset($_REQUEST["signup"])){
        $email = $_REQUEST["signup_email"];
        $password = $_REQUEST["signup_password"];
        $confirmPassword = $_REQUEST["signup_confirmPassword"];

        if($password !== $confirmPassword){
            header("location: index.php");
        } else {
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            if(file_exists("users.json")){
                $usersArray = json_decode(file_get_contents("users.json"), true);
                array_push($usersArray["users"], ["email" => $email, "password" => $hash_password]);
                $usersJson = json_encode($usersArray);
                $fp = fopen("users.json", "w");
                fwrite($fp, $usersJson);
                fclose($fp);
            } else {
                $usersArray = json_decode('{"users":{}}', true);                
                array_push($usersArray["users"], ["email" => $email, "password" => $hash_password]);
                $usersJson = json_encode($usersArray);
                $fp = fopen("users.json", "w");
                fwrite($fp, $usersJson);
                fclose($fp);
            }
            echo "<p>Usuário cadastrado com sucesso! enviamos um e-mail para $email, favor verificar para concluir o cadastro</p>";
            //var_dump($_REQUEST);
            //print_r(array_search('teste01@teste.com', array_column($usersArray["users"], 'email')));
            //$search = array_search('teste01@teste.com', array_column($usersArray["users"], 'email'));
            //print_r($usersArray["users"][$search]["email"]);
        }

    }

?>