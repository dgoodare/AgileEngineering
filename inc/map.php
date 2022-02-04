<?php
    //open connection to mysql db
    include(dbconnect.php);

    //fetch table rows from mysql db
    $sql = "select * from activities";
    $result = mysqli_query($db, $sql);

    //create an array
    $emparray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>