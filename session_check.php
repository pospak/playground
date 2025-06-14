<?php
session_start(); 
if(!isset($_SESSION["logged"])){
header("Location: https://login.pospak.site/login/vspis");
}