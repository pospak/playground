<?php include "session_check.php";
        session_destroy();
        header("Location: /index.php");