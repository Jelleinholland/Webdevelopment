<?php
if(getenv('DATABASE_URL') != ""){
    $dbtops = parse_url(getenv('DATABASE_URL'));
    $type = "pgsql";
    $servername = $dbtops["host"];
    $username = $dbtops["user"];
    $password = $dbtops["pass"];
    $database = ltrim($dbtops["path"], '/');
}
else{
    $type = "mysql"
    $servername = "mysql";
    $username = "root";
    $password = "secret123";
    $database = "developmentdb";
}
?>