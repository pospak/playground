<?php

class LogoutControler extends Controler{
    public function process(array $parameters): void
    {
        if(User::logout())$this->redirect("login");
    }
}