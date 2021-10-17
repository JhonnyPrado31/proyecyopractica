<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:originmoqueguaproyect.database.windows.net,1433; Database = BaseMoquegua", "master", "LAvidaesmrd17");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>  