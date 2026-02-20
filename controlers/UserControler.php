<?php



class UserControler extends Controler{
    public function process(array $parameters): void
    {
        if($parameters[0] == "osobni-informace-studenta" && $parameters[1] == "prehled"){
            $this->view = "overview";
            $this->head = array(
                "title" => "Osobní informace studenta",
                "description" => "Přehled uložených informací",
                "keywords"  => "Overview, přehled, profil"
            );
        }
    }
}