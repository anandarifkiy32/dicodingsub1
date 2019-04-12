<?php 
    $connectionInfo = array("UID" => "rifkiystark@rifkiystarkdicoding", "pwd" => "Wakwaw123;", "Database" => "submis1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:rifkiystarkdicoding.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $sql = "INSERT INTO Users (UserId, Name, Email) VALUES (?, ?, ?)";
    $params = array(1, "Kiki", "Ganteng");

    sqlsrv_query( $conn , $sql, $params);
?>