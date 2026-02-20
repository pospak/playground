<?php

class UserControler extends Controler
{
    public function process(array $parameters): void
    {
        $connecion = Database::getConnection();
        $query = $connecion->prepare("SELECT * FROM students WHERE login = ?");
        $query->bind_param("s", User::getLoggedInUser());
        $query->execute();
        $get = $query->get_result();
        $result = $get->fetch_assoc();
        if ($parameters[0] == "osobni-informace-studenta" && $parameters[1] == "prehled") {
            $this->view = "overview";
            $this->head = array(
                "title" => "Osobní informace studenta",
                "description" => "Přehled uložených informací",
                "keywords"  => "Overview, přehled, profil"
            );
            if ($result) {
                $this->data["data"] = $result;
            }
        }
    }
}
