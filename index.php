<?php 
try {
    $conn = new PDO("sqlsrv:server = tcp:rifkiystarkdicoding.database.windows.net,1433; Database = submis1", "rifkiystark", "Wakwaw123;");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>