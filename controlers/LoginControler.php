<?php


class LoginControler extends Controler
{
    public function process(array $parameters): void
    {
        session_start();
        $this->head = array(
            "title" => "Přihlášení",
            "description" => "Přihlášení",
            "keywords"  => "Login, Přihlášení"
        );

        $this->view = "login";

        if(isset($_POST["submit"])){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = new User();
            if($user->login($username,$password)){
                
                $_SESSION["logged"] = $username;
                echo("<script>window.location.href='main'</script>");
            }else{
                echo("<script>alert('Něco se pokazilo')</script>");
            }

        }

    }
}
