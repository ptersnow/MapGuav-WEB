<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="icon" href="img/icon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('/css/stylish-portfolio.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/estilo.css') }}" rel="stylesheet">
   
   
    <title>MapGuav</title>
   
   
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 94.3%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <header class="cabecalho">
      <div class="barra-titulo">
      <!-- Navigation -->
      <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar-wrapper" class="menu">
          <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <a class="js-scroll-trigger" href="/#home">MAP Guav</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#home">Página inicial</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#guavira">Guavira</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/gastro">Gastronomia</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#info">Dicas para Cultivar</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#equipe">Equipe</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/mapa">Mapa</a>
            </li>
            
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#contato">Contato</a>
            </li>
          </ul>
        </nav>
      </div>

    </header>

    <div id="map"></div>

    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-21.4835097, -56.1827858 ),
          zoom: 14
        });

        var iconBase = 'img/';
        var icons = {
          escola: {
            icon: iconBase + 'guavira-35.png'
          }
        };

        var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP or XML file
        downloadUrl('http://mapguav.herokuapp.com/api/markers/', function(data) {
          console.log(data.response);

          var markers = JSON.parse(data.response);
          markers.forEach(function(markerElem, index) {
            console.log(markerElem);

            var id = markerElem['id'];
            var name = markerElem['name'];
            var address = markerElem['address'];

            var point = new google.maps.LatLng(
              parseFloat(markerElem['lat']),
              parseFloat(markerElem['lng'])
            );

            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = address
            infowincontent.appendChild(text);
            /*var icon = customLabel[type] || {};*/
            var marker = new google.maps.Marker({
              map: map,
              position: point,
              /*label: icon.label,*/
              icon: icons["escola"].icon
            });

            marker.addListener('click', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
            });
          });
        });
      }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnmKd0skc82FY_EMLeT50ZTChTuQiwh9o&callback=initMap">
    </script>

     <!-- Bootstrap core JavaScript -->
     <script
      src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!-- Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="{{ url('/js/stylish-portfolio.min.js') }}"></script>


  </body>
</html>