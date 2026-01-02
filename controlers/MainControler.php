<?php

class MainControler extends Controler
{
    public function process(array $parameters): void
    {

        $this->head = array(
            "title" => "Úvod",
            "description" => "Úvodní stránka",
            "keywords"  => "Main, Úvod"
        );

        $this->view = "main";

        // $connect = mysqli_connect("","us011225","Skorpik444","db011225");
        // $query = "SELECT * FROM posts WHERE public = 1 ORDER BY date DESC";
        // $merge = mysqli_query($connect,$query);
        // $results = mysqli_fetch_all($merge, MYSQLI_ASSOC);
        
        // echo "<script>if (Notification.permission !== 'granted')
        // Notification.requestPermission();</script>";
        
        // $this->data["posts"] = $results;

    }





}
