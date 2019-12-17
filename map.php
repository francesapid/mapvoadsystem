
<!doctype html>
<html lang="en">

<head>
  <title>Map</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- Map JavaScript-->
  <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Agvytz8jwxkgDtH0ZuwSPyWA6EIRC3XB08G3i2AfZWny6fHaYJ1EVt79UY9lRlxu'></script>
  <script type='text/javascript'>
                var map = null, infobox, dataLayer;

                function loadMapScenario() {
                    map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                        center: new Microsoft.Maps.Location(10.3157, 123.8854) });
                    dataLayer = new Microsoft.Maps.EntityCollection();
                    map.entities.push(dataLayer);
                   
                    map.setOptions({
                    maxZoom: 18,
                    minZoom: 13
                });
                    var infoboxLayer = new Microsoft.Maps.EntityCollection();
                    map.entities.push(infoboxLayer);
                    infobox = new Microsoft.Maps.Infobox();
                    infoboxLayer.push(infobox);
                    addPinLocations();
                }

                function addPinLocations() {

                    var speed1 = "25kpH";
                    var pin1 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.299041, 123.881008), {
                        color: 'red',
                    });
                    pin1.Title = "70 Meters from Labangon Elementary";
                    pin1.Description = speed1;
                    Microsoft.Maps.Events.addHandler(pin1, 'click', displayInfobox);
                    dataLayer.push(pin1);

                    var pin2 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.301798, 123.895952), {
                        color: 'red'
                    });
                    pin2.Title = "100 Meters from Abellana National School";
                    pin2.Description = "35kpH";
                    Microsoft.Maps.Events.addHandler(pin2, 'click', displayInfobox);
                    dataLayer.push(pin2);

                    var pin3 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.307598, 123.894042), {
                        color: 'red'
                    });
                    pin3.Title = "60 Meters from Crown Regency Hotel";
                    pin3.Description = "30kpH";
                    Microsoft.Maps.Events.addHandler(pin3, 'click', displayInfobox);
                    dataLayer.push(pin3);

                    var pin4 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.327489, 123.906383), {
                        color: 'red'
                    });
                    pin4.Title = "IT Park";
                    pin4.Description = "20kpH";
                    Microsoft.Maps.Events.addHandler(pin4, 'click', displayInfobox);
                    dataLayer.push(pin4);
                }

                function displayInfobox(e){
                    if (e.targetType == 'pushpin') {
                        infobox.setLocation(e.target.getLocation());
                                
                        infobox.setOptions({
                            visible: true,
                            title: e.target.Title,
                            description: e.target.Description
                        });
                     }
                }
            
        </script>
</head>

<body onload = "loadMapScenario();">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <i class="material-icons">nfc</i> VOAD SYSTEM
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="vehicle.php">
              <i class="material-icons">directions_car</i>
              <p>Vehicles</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php">
              <i class="material-icons">people_alt</i>
              <p>Clients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="records.php">
              <i class="material-icons">tab</i>
              <p>Records</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Location Map</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <!-- <div class="container-fluid" id='myMap'> -->
          <!-- your content here -->
          <div id ='myMap' style='width: 79vw; height: 83vh;'></div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a> VOAD SYSTEM</a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by Team GLS <i class="material-icons"></i>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>

<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>
