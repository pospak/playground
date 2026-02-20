<?php

class UserControler extends Controler
{
    public function process(array $parameters): void
    {
        session_start();
        $connecion = Database::getConnection();
        $query = $connecion->prepare("SELECT * FROM students WHERE login = ?");
        $query->bind_param("s", User::getLoggedInUser());
        $query->execute();
        $get = $query->get_result();
        $result = $get->fetch_assoc();


        $this->head = array(
            "title" => "Osobní informace studenta",
            "description" => "Přehled uložených informací",
            "keywords"  => "Overview, přehled, profil"
        );
        if ($result) {
            $this->data["data"] = $result;
        }
        $this->view = "overview";
    }
}
