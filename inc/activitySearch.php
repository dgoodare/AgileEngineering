<!DOCTYPE html>
    <head>

    </head>

    <body>
        <div id='searchbar'>
            <form action="" method="GET">
                <input id="search-input" type="text" placeholder="Enter the ID or Title of an activity you would like to view">
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
                        document.getElementById("searchResults").innerHTML = "No results, please enter another ID or Title";
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
                        xmlhttp.open("GET","https://ac31007.azurewebsites.net/api/activitySearch?searchInput="+searchTerm, true);
                        xmlhttp.send();
                    }
                }
            </script>

            <div id="searchresults">
                <!-- output from search will appear here -->
            </div>

    </body>
</html>