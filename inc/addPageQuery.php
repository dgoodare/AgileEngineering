<?php
    //Connection script
    include("dbconnect.php");

    //receive raw data from POST request
    $json = file_get_contents('php://input');
    //convert to php json object
    $data = json_decode($json);

    $Title = $data->Title;
    $Description = $data->Description;
    $StreetAddress = $data->StreetAddress;
    $City = $data->City;
    $Postcode = $data->Postcode;
    $Number = $data->Number;
    $Email = $data->Email;
    $Goals = $data->Goals;
    $Latitude = $data->Latitude;
    $Longitude = $data->Longitude;

    /*
    //Form Data from AJAX
    $Title = "Test Title";//$_POST['Title'];
    $Description = "This is a description for testing purposes";//$_POST['Description'];
    $StreetAddress = "123 Test Street";//$_POST['StreetAddress'];
    $City = "Test City";//$_POST['City'];
    $Postcode = "TEST";//$_POST['Postcode'];
    $Number = "0123456789";//$_POST['Number'];
    $Email = "test@testmail.com";//$_POST['Email'];
    $Goals = [1,1,1,0,1,0,1,1,0,0,0,0,0,0,0,0,0];//$_POST['Goals'];
    $Latitude = 123;//$_POST['Latitude'];
    $Longitude = 456;//$_POST['Longitude'];
    */
    //convert to correct data types
    $Title = strval($Title);
    $Description = strval($Description);
    $StreetAddress = strval($StreetAddress);
    $City = strval($City);
    $Postcode = strval($Postcode);
    $Number = strval($Number);
    $Email = strval($Email);
    $Latitude = (float)$Latitude;
    $Longitude = (float)$Longitude;

    for ($i=0; $i < 17; $i++)
    {
        $Goals[$i] = (int)$Goals[$i];
    }

    
    //SQL query
    $query = "INSERT INTO Activities (Title, Description, StreetAddress, City, Postcode, PhoneNumber, Email, Latitude, Longitude,
                noPoverty, zeroHunger, goodHealth, qualityEducation, genderEquality, cleanWater, affordableEnergy, economicGrowth, 
                industryAndInfrastructure, reducedInequalities, sustainableCommunities, responsibleProduction, climateAction, waterLife, 
                landLife, peaceJustice, partnershipGoals)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    //prepate statement and bind parameters
    $stmt = mysqli_prepare($db, $query);
    
    mysqli_stmt_bind_param($stmt, 'sssssssddddddddddddddddddd', $Title,  $Description, $StreetAddress, $City, $Postcode, $Number, $Email, $Latitude, $Longitude, $Goals[0], $Goals[1], $Goals[2], $Goals[3], $Goals[4], $Goals[5], $Goals[6], $Goals[7], $Goals[8], $Goals[9], $Goals[10], $Goals[11], $Goals[12], $Goals[13], $Goals[14], $Goals[15], $Goals[16]);

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