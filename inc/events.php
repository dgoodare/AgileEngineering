<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--import bootstrap css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/master.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet"> 

  <!-- favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

  <!-- link to manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- webpage title -->
  <title>Events</title>
  <!--<title>☼ 😂😂😂😂😂😂 ☼</title>-->
</head>

<body>
  <div id="fb-root"></div>
  <div class="pageheight">
    <!-- header containing the navigation bar -->
    <header>
      <!-- navigation bar containing a logo, title and a link to each page -->
      <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
        <span class="navbar-brand">
          <img src="assets/susDundee1.png" alt="" width="40" height="40">
        </span>
        <span class="navbar-brand">Sustainable Dundee</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="https://ac31007.azurewebsites.net/api/homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ac31007.azurewebsites.net/api/goals.php">Goals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ac31007.azurewebsites.net/api/events.php">Events</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- (main class containg Lorem ipsum to be replaced)-->
    <main class="container">
      <h1>Home</h1>
      <br>
      <h2>Events in Dundee</h2>

        <br>
        <br>
        <p>Sustainable Dundee are an organisation endeavouring to help the local people of Dundee to live a more healthy and sustainable life in their local city. Planning and advertising events to bring the local community together at the same time saving our planet. We aim to do the following:
          <br>
          <br>
          •    Reduced fuel poverty
          <br>
          •    Improved air quality and human health
          <br>
          •    Reduced CO2 emissions and other greenhouse gases
          <br>
          •    Greater employment, apprenticeship opportunities, skills and supply chain development
          <br>
          •    Engaging with communities
          <br>
          •    Collaborative partnerships between public and private sector
          <br>
          •    Creating a knowledge and skills base
          <br>
        •    A secure local energy supply which supports the local economy</p>
        <br>
      </main>
    </div>
  </div>


  <!-- This is the map-->
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
  <style>
    .map { /*Use this to style the map*/
        width: 100vw; 
        height: 40vh;
        margin-left: auto;  
        margin-right: auto;
    }
  </style>
  <script>
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
  </script>
  <a onclick="toggle_visibility('map1');" href="#">Goal 1</a>
  <div class="map" id='map1'>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoiam9obmhhcnJvdzE1IiwiYSI6ImNrMnhqY2NleTBjYzgzZ3RhZXVrZ2toYnIifQ.Bd6-bNYAwA9_T_AR9c2bDA';
        var map = new mapboxgl.Map({
            container: 'map1',
            style: 'mapbox://styles/mapbox/streets-v11', //Options : satellite-v9, light-v10, dark-v10, streets-v11, outdoors-v11
            center: [-2.970721, 56.462018],
            zoom: 12
        });
        map.addControl(new mapboxgl.NavigationControl());

        map.on('load', () => {
            map.addSource('places', {
                //This is where we are going to have to figure out how to take items from the database and put their values into the description and co-ordinates
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': [
                        {
                                'type': 'Feature',
                                'properties': {
                                    'description':
                                    '<p>Implement Dundee Fairness Strategy and Action Plan</p>',
                                'icon': 'park-15',
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [-2.970721, 56.462018]
                            }
                        },
                        {
                                'type': 'Feature',
                                'properties': {
                                    'description':
                                    '<p>Test a new model of advice on welfare benefits and budgeting to decrease the number of people affected by debt.</p>',
                                'icon': 'car-15'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [-2.970721, 56.464118]
                            }
                        },
                        {
                                'type': 'Feature',
                                'properties': {
                                    'description':
                                    '<p>Increase the number of Dundee organisations and businesses signed up to the Scottish Living Wage and seek to have Dundee accredited as a Living Wage City.</p>',
                                'icon': 'park-15'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [-2.980721, 56.462018]
                            }
                        }
                    ]
                }
            });


            // Add a layer showing the places.
            map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    'icon-image': '{icon}',
                    'icon-allow-overlap': true, 
                    'icon-size': 1 //Can use this to change size of icon
                }
            });
            
            map.on('click', 'places', (e) => {
                // Copy coordinates array.
                const coordinates = e.features[0].geometry.coordinates.slice();
                const description = e.features[0].properties.description;
                
                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
            
                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });
            
            // Change the cursor to a pointer when the mouse is over the places layer.
            map.on('mouseenter', 'places', () => {
                map.getCanvas().style.cursor = 'pointer';
            });
            
            // Change it back to a pointer when it leaves.
            map.on('mouseleave', 'places', () => {
                map.getCanvas().style.cursor = '';
            });
        }); 
</script>
</div>




  <!--import bootstrap JavaScript (needs to be moved to separtate JS file)-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} </script>

<a href="https://twitter.com/intent/tweet?button_hashtag=sustainableDundee&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-text="I&#39;m living a more sustainable life in" data-hashtags="#sustainableDundee" data-show-count="false">Tweet #sustainableDundee</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<footer class="container-fluid">
  <div class="row">
    <p class="col-8 my-auto">Terms and conditions: be sustainable in Dundee.</p>
    <p class="col-4 text-right my-auto">© Sustainable Dundee</p>
  </div>
</footer>
</body>
</html>
