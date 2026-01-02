<?php


class LoginControler extends Controler
{
    public function process(array $parameters): void
    {
        $this->head = array(
            "title" => "Přihlášení",
            "description" => "Přihlášení",
            "keywords"  => "Login, Přihlášení"
        );

        $this->view = "login";

        if(isset($_POST["submit"])){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            

        }

    }
}
