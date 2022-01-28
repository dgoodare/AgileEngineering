<?php
    //Connection script
    include("dbconnect.php");

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
    $query = "INSERT INTO Events (Title, Latitude, Longitude, Description, `Phone Number`, Email, Goal)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    //prepate statement and bind parameters
    $stmt = mysqli_prepare($db, $query);
    
    mysqli_stmt_bind_param($stmt, 'sddsssi', $Title, $Latitude, $Longitude, $Description, $Number, $Email, $Goal);

    //execute query
    mysqli_stmt_execute($stmt);
    
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

<div>
    Testing
</div>