<?php
    //database connection script
    include("dbconnect.php");

    //Form Data from AJAX
    $ID = $_POST['ID'];
    $Title = $_POST['Title'];
    $Latitude = $_POST['Latitude'];
    $Longitude = $_POST['Longitude'];
    $Description = $_POST['Description'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Goal = $_POST['Goal'];

    //convert to correct data types
    $ID = (int)$ID;
    $Title = strval($Title);
    $Latitude = (float)$Latitude;
    $Longitude = (float)$Longitude;
    $Description = strval($Description);
    $Number = strval($Number);
    $Email = strval($Email);
    $Goal = (int)$Goal;

    $query = "UPDATE Events SET ......
              WHERE ID = ....."
?>