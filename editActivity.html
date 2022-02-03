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
                        var description = $('#update-description').val();
                        var streetAddress = $('#update-address').val();
                        var city = $('#update-city').val();
                        var postcode = $('#update-postcode').val();
                        var number = $('#update-number').val();
                        var email = $('#update-email').val();
                        var goals = [];

                        //get boolean values from checkbox fields
                        $('#editForm input[type=checkbox]').each(function()
                        {
                            if(this.checked)
                            {
                                goals.push(1);
                            }
                            else
                            {
                                goals.push(0);
                            }
                        });

                        //check that all fields have data
                        if (title != "" && latitude != "" && longitude != "" && description != "" && number != "" && email != "" && goals.length != 0)
                        {
                            //create JSON to be sent using AJAX
                            $.ajax(
                                {
                                    url: "https://ac31007.azurewebsites.net/api/updatePage",
                                    type: "POST",
                                    data: {
                                        ID: search,
                                        Title: title,
                                        Description: description,
                                        StreetAddress: streetAddress,
                                        City: city, 
                                        Postcode: postcode,
                                        Number: number,
                                        Email: email,
                                        Goals: goals
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
        <style>
            body{
                font-family: 'Nunito', sans-serif;
            }

            .goalCheckboxes{
                display: block;
            }
        </style>

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
                        document.getElementById("searchResults").innerHTML = "No results, please enter an ID";
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
                        xmlhttp.open("GET","https://ac31007.azurewebsites.net/api/editSearch?searchInput="+searchTerm, true);
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
                <p>Description:</p> <textarea id="update-description" type="text" name="update-description" rows="5" cols="75"></textarea>
                <p>Street Address:</p> <input id="update-address" type="text" name="update-address">
                <p>City:</p> <input id="update-city" type="text" name="update-city">
                <p>Post Code:</p> <input id="update-postcode" type="text" name="update-postcode">
                <p>Phone Number:</p> <input id="update-number" type="text" name="update-number">
                <p>Email:</p> <input id="update-email" type="text" name="update-email">
                <p>Associated Goals:</p>
                <div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="noPoverty" value="noPoverty">
                        <label for="noPoverty">No Poverty</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="zeroHunger" value="zeroHunger">
                        <label for="zeroHunger">Zero Hunger</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="goodHealth" value="goodHealth">
                        <label for="goodHealth">Good Health and Well-Being</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="qualityEducation" value="qualityEducation">
                        <label for="qualityEducation">Quality Education</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="genderEquality" value="genderEquality">
                        <label for="genderEquality">Gender Equality</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="cleanWater" value="cleanWater">
                        <label for="cleanWater">Clean Water</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="affordableEnergy" value="affordableEnergy">
                        <label for="affordableEnergy">Affordable and Clean Energy</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="economicGrowth" value="economicGrowth">
                        <label for="economicGrowth">Decent Work and Economic Growth</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="industryAndInfrastructure" value="industryAndInfrastructure">
                        <label for="industryAndInfrastructure">Industry, Innovation and Infrastructure</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="reducedInequalities" value="reducedInequalities">
                        <label for="reducedInequalities">Reduced Inequalities</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="sustainableCommunities" value="sustainableCommunities">
                        <label for="sustainableCommunities">Sustainable Cities and Communities</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="responsibleProduction" value="responsibleProduction">
                        <label for="responsibleProduction">Responsible Consumption and Production</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="climateAction" value="climateAction">
                        <label for="climateAction">Climate Action</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="waterLife" value="waterLife">
                        <label for="waterLife">Life Below Water</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="landLife" value="landLife">
                        <label for="landLife">Life on Land</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="peaceJustice" value="peaceJustice">
                        <label for="peaceJustice">Peace, Justice and Strong Institutions</label>
                    </div>
                    <div class="goalCheckboxes">
                        <input type="checkbox" id="partnershipGoals" value="partnershipGoals">
                        <label for="partnershipGoals">Partnership for The Goals</label>
                    </div>
                </div>
                <button id="update-button" type="button">Update</button>
            </form>

            <div id="updateResults">
                <!-- results from update query will appear here -->
            </div>
        </div>
    </body>
</html>