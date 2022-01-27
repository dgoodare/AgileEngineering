<?php
    //Connection script
    inlcude("dbconnect.php");

    //Form Data from AJAX
    $Title = $_POST['Title'];
    $Latitude = $_POST['Latitude'];
    $Longitude = $_POST['Longitude'];
    $Description = $_POST['Description'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Goal = $_POST['Goal'];

    //convert to correct data types
    $Title = strval($Title);
    $Latitude = (float)$Latitude;
    $Longitude = (float)$Longitude;
    $Description = strval($Description);
    $Number = strval($Number);
    $Email = strval($Email);
    $Goal = (int)$Goal;

    //SQL insert query ** couldn't get access to database when writing this, so variable names might be wrong **
    $query = "INSERT INTO Events (title, latitude, longitude, description, phonenumber, email, goal)
              VALUES (:title, :latitude, :longitude, :desription, :phonenumber, :email, :goal)"

    //prepate statement and bind parameters
    $stmt = $db->prepare($query);
    $stmt->bindParam('title', $Title);
    $stmt->bindParam('latitude', $Latitude);
    $stmt->bindParam('longitude', $Longitude);
    $stmt->bindParam('description', $Description);
    $stmt->bindParam('phonenumber', $Number);
    $stmt->bindParam('email', $Email);
    $stmt->bindParam('goal', $Goal);

    //execute query
    $stmt->execute();

    //return success/failure code
    if($stmt)
    {
        //success
        echo json_encode(array("statusCode"=>200));
    }
    else
    {
        //failure
        echo json_encode(array("statusCode"=>201));
    }
?>