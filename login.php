<?php 

include "session_check.php";

$id = $_GET["uuid"];

$connect = new mysqli("pdb1035.batcave.net", "4410028_vspis", "Pospak444","4410028_vspis");

$sql = "SELECT * FROM users WHERE uuid = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("s",$id);
$stmt->execute();
$result = $stmt->get_result();	
        $row = $result->fetch_assoc();
        if ($row){
$_SESSION["logged"] = $row["username"];
header("Location: /index.php");


        } 