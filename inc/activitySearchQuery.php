<?php
    //database connection script
    include("dbconnect.php");

    //GET value of user input
    $search = $_GET['searchInput'];
    //SQL query
    $query = "SELECT * FROM activities WHERE ID LIKE '$search' OR Title LIKE '$search'";

    //prepare statement
    $stmt = $stmt = mysqli_prepare($db, $query);
    //execute statement
    mysqli_stmt_execute($stmt);
    //bind results
    mysqli_stmt_bind_result($stmt, $ID, $Title, $Description, $StreetAddress, $City, $Postcode, $PhoneNumber, $Email);

    //output results
    while(mysqli_stmt_fetch($stmt))
    {
        echo "<p>ID:</p>". $ID;
        echo "<p>Title:</p>". $Title;
        echo "<p>Description:</p>". $Description;
        echo "<p>Street Address:</p>". $StreetAddress;
        echo "<p>City:</p>". $City;
        echo "<p>Postcode:</p>". $Postcode;
        echo "<p>Phone Number:</p>". $PhoneNumber;
        echo "<p>Email:</p>". $Email;
    }
?>