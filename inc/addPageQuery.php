<?php
    //Connection script
    include("dbconnect.php");

    
    //Form Data from AJAX
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $StreetAddress = $_POST['StreetAddress'];
    $City = $_POST['City'];
    $Postcode = $_POST['Postcode'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Goals = $_POST['Goals'];
    $Latitude = $_POST['Latitude'];
    $Longitude = $_POST['Longitude'];
    
    //convert to correct data types
    $Title = strval($Title);
    $Description = strval($Description);
    $StreetAddress = strval($StreetAddress);
    $City = strval($City);
    $Postcode = strval($Postcode);
    $Number = strval($Number);
    $Email = strval($Email);
    $Latitude = (int)$Latitude;
    $Longitude = (int)$Longitude;

    for ($i=0; $i < 17; $i++)
    {
        $Goals[$i] = (int)$Goals[$i];
    }

    
    //SQL query
    $query = "INSERT INTO activities (Title, Description, StreetAddress, City, Postcode, PhoneNumber, Email, Latitude, Longitude,
                noPoverty, zeroHunger, goodHealth, qualityEducation, genderEquality, cleanWater, affordableEnergy, economicGrowth, 
                industryAndInfrastructure, reducedInequalities, sustainableCommunities, responsibleProduction, climateAction, waterLife, 
                landLife, peaceJustice, partnershipGoals)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    echo $Title;
    //prepate statement and bind parameters
    $stmt = mysqli_prepare($db, $query);
    
    mysqli_stmt_bind_param($stmt, 'sssssssiiiiiiiiiiiiiiiiiii', $Title,  $Description, $StreetAddress, $City, $Postcode, $Number, $Email, $Latitude, $Longitude, $Goals[0], $Goals[1], $Goals[2], $Goals[3], $Goals[4], $Goals[5], $Goals[6], $Goals[7], $Goals[8], $Goals[9], $Goals[10], $Goals[11], $Goals[12], $Goals[13], $Goals[14], $Goals[15], $Goals[16]);

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
    <?php
        echo "Test test test";
        echo $Title;
        echo $Description;
        echo $City;
    ?>
</div>
