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
              VALUES ('test', 'testing', 'University of Dundee', 'Dundee', '', '1234512345', 'test@gmail.com', "+$Latitude+", "+$Longitude;
    for($goal of $Goals){
        $query = $query+", "+"1";
    }
     $query = $query+")";
    
    //prepate statement and bind parameters
    if (mysqli_query($db, $query))
        echo json_encode(array("statusCode"=>200));
    }
    else {
        echo json_encode(array("statusCode"=>201));
    }

    mysqli_close($conn);
    
?>

<div>
    <?php
        echo "Test test test";
        echo $Title;
        echo $Description;
        echo $City;
    ?>
</div>
