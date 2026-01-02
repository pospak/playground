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

        if(User::isLoggedIn()){
            $this->redirect("main");
        }else{
            $this->view = "login";
        }

        if(isset($_POST["submit"])){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = new User();
            if($user->login($username,$password)){
                
                $_SESSION["logged"] = $username;
                $this->redirect("main");
            }else{
                echo("<script>alert('Něco se pokazilo')</script>");
            }

        }

    }
}
