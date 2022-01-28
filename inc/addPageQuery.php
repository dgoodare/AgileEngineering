<?php
    //Connection script
    include("dbconnect.php");

    //Form Data from AJAX
    $Title = "Test title";//$_POST['Title'];
    $Latitude = "123";//$_POST['Latitude'];
    $Longitude = "456";//$_POST['Longitude'];
    $Description = "Test description";//;$_POST['Description'];
    $Number = "1234567890";//$_POST['Number'];
    $Email = "test@test.com";//$_POST['Email'];
    $Goal = "1";//$_POST['Goal'];

    //convert to correct data types
    $Title = strval($Title);
    $Latitude = (float)$Latitude;
    $Longitude = (float)$Longitude;
    $Description = strval($Description);
    $Number = strval($Number);
    $Email = strval($Email);
    $Goal = (int)$Goal;

    /*
    //SQL insert query ** couldn't get access to database when writing this, so variable names might be wrong **
    $query = "INSERT INTO Events (Title, Latitude, Longitude, Description, `Phone Number`, Email, Goal)
              VALUES (:title, :latitude, :longitude, :desription, :phonenumber, :email, :goal)";

    //prepate statement and bind parameters
    $stmt = mysqli_prepare($db, $query);
    $stmt->bind_Param('title', $Title);
    $stmt->bind_Param('latitude', $Latitude);
    $stmt->bind_Param('longitude', $Longitude);
    $stmt->bind_Param('description', $Description);
    $stmt->bind_Param('phonenumber', $Number);
    $stmt->bind_Param('email', $Email);
    $stmt->bind_Param('goal', $Goal);

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
    */
?>

<div>
    Testing
</div>