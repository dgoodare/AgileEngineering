<!DOCTYPE html>
<head>
        <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
        <script type="text/javascript">
            //jQuery script for sending data to a php script to be added to the database
            $(document).ready(function()
            {
                $('#update-button').click(function()
                    {
                        //retrieve values from form based on ID of input
                        var search = $('#search-input').val();
                        var title = $('#update-title').val();
                        var latitude = $('#update-latitude').val();
                        var longitude = $('#update-longitude').val();
                        var description = $('#update-description').val();
                        var number = $('#update-number').val();
                        var email = $('#update-email').val();
                        var goal = $('#update-goal').val();

                        //check that all fields have data
                        if (title != "" && latitude != "" && longitude != "" && description != "" && number != "" && email != "" && goal != "")
                        {
                            //create JSON to be sent using AJAX
                            $.ajax(
                                {
                                    url: "https://ac31007.azurewebsites.net/api/updatePage",
                                    type: "POST",
                                    data: {
                                        ID: search,
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
                                            $('#server-response').html('Activity updated successfully!');
                                        }
                                        else if (dataResult.statusCode == 201)
                                        {
                                            //send failure message
                                            $('#server-response').html('Activity could not be added');
                                        }
                                        else
                                        {
                                            //send unknown error message
                                            $('#server-response').html('An unknown error occurred');
                                        }
                                    },
                                    error: function() {
                                       alert('There was an error performing the AJAX call');
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
            });
        </script> 
    </head>

    <body>
        <div id="searchAndEdit">
            <div id='searchbar'>
                <form action="" method="GET">
                    <input id="search-input" type="text" placeholder="Enter the ID of an activity you would like to edit">
                    <button id="search-button" type="button" onclick="activitySearch()">Search</button>
                </form>
            </div>

            <script>
                //function that will search for activities
                function activitySearch()
                {
                    var searchTerm = document.getElementById("search-input").value;
                    //check that it isn't empty
                    if (searchTerm == "")
                    {
                        document.getElementById("").innerHTML = "No results, please enter a valid activity ID";
                        return;
                    }
                    else
                    {
                        //create new XML request
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function ()
                        {
                            if (this.readyState == 4 && this.status == 200) 
                            {
                                //display response text
                                document.getElementById("searchResults").innerHTML = this.responseText;
                                //display editing form
                                document.getElementById("editForm").style.display = "block";
                            }
                        };
                        //** The address on the next line of code is NOT CORRECT */
                        xmlhttp.open("GET","?searchInput="+searchTerm,true);
                        xmlhttp.send();
                    }
                }
            </script>

            <div id="searchResults">
                <!-- output from search will appear here -->
            </div>

            <form id="editForm" method="POST" style="display: none;">
            <!-- These fields will need to be updated to match any changes made to the database -->
                <p>Title:</p> <input id="update-title" type="text" name="update-title">
                <p>Latitude:</p> <input id="update-latitude" type="text" name="update-latitude">
                <p>Longitude:</p> <input id="update-longitude" type="text" name="update-longitude">
                <p>Description:</p> <input id="update-description" type="text" name="update-description">
                <p>Phone Number:</p> <input id="update-number" type="text" name="update-number">
                <p>Email:</p> <input id="update-email" type="text" name="update-email">
                <p>Associated Goal (between 1-17):</p> <input id="update-goal" type="number" min="1" max="17" name="update-Longitude">
                <button id="update-button" type="button">Update</button>
            </form>

            <div id="updateResults">
                <!-- results from update query will appear here -->
            </div>
        </div>
    </body>
</html>