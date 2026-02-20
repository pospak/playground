<?php


class Database
{
    public static function getConnection()
    {
        $servername = "fdb1031.batcave.net";
        $username = "4476678_isvspj";
        $password = "MP838it356";
        $dbname = "4476678_isvspj";
        return new mysqli($servername, $username, $password, $dbname);
    }
}
