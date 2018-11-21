<?php 
    if(isset($_POST)){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if($password !== $confirmPassword){
            header("location: index.php/#signupModal");
        } else {
            if(file_exists("users.json")){
                $usersArray = json_decode(file_get_contents("users.json"), true);
                array_push($usersArray["users"], $email);
                // array_push($usersArray["email"][$email]["passwrod"], $password);
                $usersJson = json_encode($usersArray);
                $fp = fopen("users.json", "w");
                fwrite($fp, $usersJson);
                fclose($fp);
            } else {
                $usersArray = ["users" => [$email]];
                $usersJson = json_encode($usersArray);
                $fp = fopen("users.json", "w");
                fwrite($fp, $usersJson);
                fclose($fp);
            }
            echo "<p>Usuário cadastrado com sucesso! enviamos um e-mail para $email, favor verificar para concluir o cadastro</p>";
            var_dump($_POST);
        }

    }    

?>