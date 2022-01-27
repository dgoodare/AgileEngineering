<!DOCTYPE html>
    <!-- *****Right now there is no styling whatsoever, but this should be easily fixed once we have the look for the rest of the website finalised*****-->
    <head>
        <script>
            //jQuery script for sending data to a php script to be added to the database
            jQuery( document ).ready(function( $ ))
            {
                $('#create-button').click(function()
                    {
                        //retrieve values from form based on ID of input
                        var title = $('#create-title').val();
                        var latitude = $('#create-latitude').val();
                        var longitude = $('#create-longitude').val();
                        var description = $('#create-description').val();
                        var number = $('#create-number').val();
                        var email = $('#create-email').val();
                        var goal = $('#create-goal').val();

                        //check that all fields have data
                        if (title != "" && latitude != "" && longitude != "" && description != "" && number != "" && email != "" && goal != "")
                        {
                            //create JSON to be sent using AJAX
                            $.ajax(
                                {
                                    url: "addPageQuery.php",
                                    type: "POST",
                                    data: {
                                        Title: title,
                                        Latitude: latitude,
                                        Longitude: longitude,
                                        Description: description,
                                        Number: number,
                                        Email: email,
                                        Goal: goal
                                    },

                                    cache: false,

                                    success: function(dataResult)
                                    {
                                        var dataResult = JSON.parse(dataResult);
                                        //check if the data was added successfully
                                        if (dataResult.statusCode == 200)
                                        {
                                            //send success message 
                                            $('#server-response').html('New event added successfully!');
                                        }
                                        else if (dataResult.statusCode == 201)
                                        {
                                            //send failure message
                                            $('#server-response').html('Event could not be added');
                                        }
                                        else
                                        {
                                            //send unknown error message
                                            $('#server-response').html('An unknown error occurred');
                                        }
                                    }

                                }
                            );
                        }
                        else
                        {
                            //prompt user to fill in all fields
                            alert('Please make sure you enter data into ALL fields');
                        }
                    }
                );
            }
        </script>
    </head>

    <body>
            <h2>Please enter the information for a new event</h2>
            <div id="create-form">
                <p>Title:</p> <input id="create-title" type="text" name="create-title">
                <p>Latitude:</p> <input id="create-latitude" type="text" name="create-latitude">
                <p>Longitude:</p> <input id="create-longitude" type="text" name="create-longitude">
                <p>Description:</p> <input id="create-description" type="text" name="create-description">
                <p>Phone Number:</p> <input id="create-number" type="text" name="create-number">
                <p>Email:</p> <input id="create-email" type="text" name="create-email">
                <p>Associated Goal (between 1-17):</p> <input id="create-goal" type="number" min="1" max="17" name="create-Longitude">
                <button id="create-button">Submit</button>
            </div>

            <div id="server-response">
                <!-- response from server will be shown here -->
            </div>
    </body>
</html>