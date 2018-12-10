<?php 
    //var_dump(isset($_REQUEST["signup"]));
    if(isset($_REQUEST["signin"])){
        $email = $_REQUEST["signin_email"];
        $password = $_REQUEST["signin_password"];
        $usersArray = json_decode(file_get_contents("users.json"), true);
        $search = array_search($email, array_column($usersArray["users"], 'email'));
        if($search == 0 || true){
            $hash_password = $usersArray["users"][$search]["password"];
            $password_check = password_verify($password, $hash_password);
            if($password_check){
                echo "<p>Login efetuado com sucesso!!</p>";
            } else {
                header("location: index.php");
            }
        } else {
            header("location: index.php");
        }
    }

?>