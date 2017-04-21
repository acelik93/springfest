<?php 
include 'header.php';
?>

</head>

<body class="map">
 <header class="map">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in" style = "color: #900C3F">Laurea Spring Fest 2017!</div>
                <div class="intro-heading" style = "color: #900C3F">Come as you are</div>
            </div>
        </div>
    </header> 
     
    
        <!-- Map Section -->
    <section id="map">
        <br><div class="row">
    <div class="col-sm-12">
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <div style='overflow:hidden;height:440px;width:700px; margin: 0 auto;'><div id='gmap_canvas' style='height:440px;width:700px;'>
        </div>>
        
        </div>
        <script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(60.22121708393828,24.84512407332159),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(60.22121708393828,24.84512407332159)});infowindow = new google.maps.InfoWindow({content:'<strong>Laurea University of Applied Sciences, Leppävaara</strong><br>Vanha maantie 9 02650 Espoo Finland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        <h3> How to come here: </h3> 
        <ul style="list-style-type:none">
            <li>
                Via bus, from Leppävaaran Asema; 110, 21, 24, 29, 51, 3, 5
            </li>
            <li>
                Or just walk! It's not really far away from Leppävaaran Asema, only 10 minutes by walking!
            </li>
        </ul>
    </div> <!--col google div -->
    </div> <!-- google row div -->
        
    </section>
   
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
