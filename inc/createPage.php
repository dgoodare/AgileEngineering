<!DOCTYPE html>
    <!-- *****Right now there is no styling whatsoever, but this should be easily fixed once we have the look for the rest of the website finalised*****-->
    <head>
        <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
        <script type="text/javascript">
            //jQuery script for sending data to a php script to be added to the database
            $(document).ready(function()
            {
                $('#create-button').click(function()
                    {
                        //retrieve values from form based on ID of input
                        var search = $('#search-input').val();
                        var title = $('#create-title').val();
                        var description = $('#create-description').val();
                        var streetAddress = $('#create-address').val();
                        var city = $('#create-city').val();
                        var postcode = $('#create-postcode').val();
                        var number = $('#create-number').val();
                        var email = $('#create-email').val();
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
                                    url: "https://ac31007.azurewebsites.net/api/addPage",
                                    type: "POST",
                                    data: {
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
            <h2>Please enter the information for a new event</h2>
            <div id="create">
                <form id="create-form" method="POST">
                <p>Title:</p> <input id="create-title" type="text" name="create-title">
                <p>Description:</p> <textarea id="create-description" type="text" name="create-description" rows="5" cols="75"></textarea>
                <p>Street Address:</p> <input id="create-address" type="text" name="create-address">
                <p>City:</p> <input id="create-city" type="text" name="create-city">
                <p>Post Code:</p> <input id="create-postcode" type="text" name="create-postcode">
                <p>Phone Number:</p> <input id="create-number" type="text" name="create-number">
                <p>Email:</p> <input id="create-email" type="text" name="create-email">
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
                    <button id="create-button" type="button">Submit</button>
                </form>
            </div>

            <div id="server-response">
                <!-- response from server will be shown here -->
            </div>
    </body>
</html>
