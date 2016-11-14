<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $AppTitle; ?></title>
        <!--<link href="../red.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../modules/jquery/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../modules/jquery/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../modules/jquery/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../modules/jquery/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../modules/jquery/css/nivo-slider.css" type="text/css" media="screen" />
        <!--<link rel="stylesheet" href="../modules/jquery/css/style.css" type="text/css" media="screen" />-->
        <!--        <link rel="stylesheet" href="../modules/jquery/css/cupertino/jquery-ui-1.9.2.custom.css" type="text/css" media="screen" />-->
        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="./lib/bootstrap/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="./lib/bootstrap/css/redkobe.css" type="text/css" />
        <link rel="stylesheet" href="./lib/bootstrap/confirm/css/jquery-confirm.css" type="text/css" />     
        <style type="text/css">
            #map_canvas { width: 550px; height: 430px; }
            #spy {cursor: pointer; }
            #pbg {color: #fff; }
            .bg-primary {color :#000; padding-top: 15px; }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default kobe">
            <div class="container-fluid">
                <div class="navbar-header">
                    <center><h2>Alta de nueva clinica</h2></center>                
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="bg-primary col-lg-12" width="100%" > 
                        <span id="pbg">Por favor realiza una busqueda por nombre de ciudad y una vez que tengas ubicada la calle y numero coloca el PIN y luego dar clic sobre el para que te de la dirección completa</span>
                        <br /><br />
                        <div class="input-group">
                            <input type="text" maxlength="100" id="address" placeholder="Dirección" class="form-control" />
                            <span id="search" class="input-group-addon guardarclinic" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                        <br />
                        <div id="map_canvas"></div>
                        <br />
                    </div>        
                </div>
                  
                <div class="col-lg-3">
                    <label for="nclinica">Nombre de la Clinica: </label>
                    <input type="tel" id="nombre" class="form-control" />
                    <label for="ncorto">Nombre corto de la Clinica: </label>
                    <input type="tel" id="nombrecorto" class="form-control" />
                    <label for="tel">Telefono: </label>
                    <input type="tel" id="tel" class="form-control" />
                    <label for="dir">Direccion: </label>
                    <input type="tel" id="direccion" class="form-control" />
                    <label for="municipio">Municipio: </label>
                    <input type="tel" id="municipio" class="form-control" />
                    <label for="cp">Código Postal: </label>
                    <input type="tel" id="cp" class="form-control" />
                    <label for="ngoogle">Número Google: </label>
                    <input type="tel" id="ngoogle" class="form-control" disabled />
                    <label for="estado">Estado: </label>
                    <input type="tel" id="estado" class="form-control" />
                    <label for="latitud">Latitud: </label>
                    <input type="tel" id="latitud" class="form-control" disabled />
                    <label for="longitud">Longitud: </label>
                    <input type="tel" id="longitud" class="form-control" disabled />
                </div>
                <div class="col-lg-3">
                    <label for="email">Correo Electrónico: </label>
                    <input type="email" id="email" class="form-control" />
                    <label for="usuario">Usuario: </label>
                    <input type="tel" id="usuario" class="form-control" />
                    <label for="contrasena">Contraseña: </label>
                    <div id="divspy" class="input-group">
                        <input type="password" id="contrasena" class="form-control" aria-describedby="basic-addon2" />                        
                        <span id="spy" class="input-group-addon" id="basic-addon2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>
                    <br />
                    <button class="form-control guardarclinic" id="guardarclinic">Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                </div>   
            </div>

            <script type="text/javascript">
                /* [CDATA[ */
                var cli = "<?= $cli; ?>";
                /* ]] */
            </script>
            <!--<script type="text/javascript" src="../modules/ajax.js"></script>-->
            <!--<script type="text/javascript" src="../modules/createMenu.js"></script>-->
            <!--<script type="text/javascript" src="../modules/welcome.js"></script>-->
            <!--<script type="text/javascript" src="../modules/newPatientDialog.js"></script>-->
            <!--<script type="text/javascript" src="../modules/jquery/jquery-1.9.0.min.js"></script>-->
            <!--<script type="text/javascript" src="../lib/bootstrap/js/jquery.js"></script>-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--        <script type="text/javascript" src="../modules/jquery/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="text/javascript" src="../modules/jquery/jquery.nivo.slider.js"></script>
        <script type="text/javascript" src="../modules/jquery/jquery.youtubepopup.min.js"></script>-->
            <script type="text/javascript" src="../lib/bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="../modules/signupfunctions.js"></script>
            <!--Confirm-->
    <!--        <script type="text/javascript" src="../lib/bootstrap/confirm/dist/jquery-confirm.min.css"></script>-->
            <script type="text/javascript" src="../lib/bootstrap/confirm/js/jquery-confirm.js"></script>
    <!--		<script type="text/javascript" src="../modules/jquery/videoselector.js"></script> signupfunctions-->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
            <script type="text/javascript">
                var geocoder;
                var map;
                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker();
                var map = null;
                var infoWindow = null;
                var lat;
                var lon;

                function openInfoWindow(marker) {
                    var markerLatLng = marker.getPosition();
                    infoWindow.setContent([
                        '<strong>La posicion del marcador es:</strong><br/>',
                        markerLatLng.lat(),
                        ', ',
                        markerLatLng.lng(),
                        '<br/>Arrástrame y haz click para actualizar la posición.'
                    ].join(''));
                    infoWindow.open(map, marker);
                }

                /*funcion que obtiene Latitud y Longitud y los coloca en los inputs*/
                function obtieneLngLat(marker) {
                    var markerLatLng = marker.getPosition();
                    lon = markerLatLng.lng();
                    lat = markerLatLng.lat();
                    $('#ngoogle').val(lat + ',' + lon);
                    $("#latitud").val(lat);
                    $("#longitud").val(lon);
                    codeLatLng(lat, lon);
                }

                /*funcion que obtiene Nombre de Estado y Municipio*/
                /*nueva function*/
                function codeLatLng(lat1, lon) {
                    var lat = parseFloat(lat1);
                    var lng = parseFloat(lon);
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(lat, lng);
                    geocoder.geocode({'latLng': latlng}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                var address = results[0].formatted_address;
                                //var number = results[1].street_number;
                                var res = address.split(",");
                                var calle = res[0];
                                var colonia = res[1];
                                var cp = res[2];
                                var estado = res[3];
                                //alert(res);
                                $('#direccion').val(calle + ', col.' + colonia);
                                //$('#').val(colonia);
                                var cpp = cp.split(" ");
                                $('#cp').val(cpp[1]);
                                if (cpp[2].length > 0) {
                                    var mun = cpp[2];
                                } else {
                                    var mun = cpp[2];
                                }
                                $('#municipio').val(mun);
                                $('#estado').val(estado);
                            } else {
                                alert('No results found');
                            }
                        } else {
                            alert('Geocoder failed due to: ' + status);
                        }
                    });
                }

                function geocodeResult(results, status) {
                    // Verificamos el estatus
                    if (status == 'OK') {
                        var result = results[0].geometry.location + '';
                        var latlng = result.split(" ");
                        var splat = latlng[0].split("(");
                        var sp = splat[1].split(",");
                        var splat1 = latlng[1].split(")");
                        var lat1 = sp[0];
                        var lng = splat1[0];
                        var datos = {"lat": lat1, "lng": lng};
                        initialize(parseFloat(datos.lat), parseFloat(datos.lng));
                    } else {
                        // En caso de no haber resultados o que haya ocurrido un error
                        // lanzamos un mensaje con el error
                        alert("Geocoding no tuvo éxito debido a: " + status);
                    }
                }

                function initialize(lat, lng) {
                    var myOptions = {
                        zoom: 13,
                        center: {lat: lat, lng: lng},
                        //center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
                    infoWindow = new google.maps.InfoWindow();
                    var marker = new google.maps.Marker({
                        position: {lat: lat, lng: lng},
                        draggable: true,
                        map: map,
                        title: ""
                    });

                    /*evento listener carga el openInfo con la funcion click*/
                    google.maps.event.addListener(marker, 'click', function () {
                        openInfoWindow(marker);
                        obtieneLngLat(marker);
                    });
                }


                $(document).ready(function () {
                    var inicio = {"lat": "19.41930473888627", "lng": "-99.14545242500003"};
                    initialize(parseFloat(inicio.lat), parseFloat(inicio.lng));
                    $('#search').click(function () {
                        // Obtenemos la dirección y la asignamos a una variable
                        var address = $('#address').val();
                        // Creamos el Objeto Geocoder
                        var geocoder = new google.maps.Geocoder();
                        // Hacemos la petición indicando la dirección e invocamos la función
                        // geocodeResult enviando todo el resultado obtenido
                        geocoder.geocode({'address': address}, geocodeResult);
                    });
                });
            </script>
            <script>
                function popup(num) {
                    var height = "auto";
                    var width = 920;
                    if (num == 2) {
                        height = 450;
                        width = "auto";
                    }
                    $("#dialog" + num).dialog({
                        title: "Sistema Kobe",
                        resizable: false,
                        modal: true,
                        width: width,
                        height: height,
                        close: function () {
                            $(this).dialog("close");
                        }
                    });
                }

                /*$('#spy').click(function () {
                 $('contrasena').attr('type=text');
                 });*/

                $('#divspy').on('click', '#spy', function () {
                    //$('#contrasena').attr('type=text');
                    //alert('clickeado');
                    if ($('#contrasena').get(0).type == 'password') {
                        $('#contrasena').get(0).type = 'text';
                    } else {
                        $('#contrasena').get(0).type = 'password';
                    }

                });
                
                document.getElementById("address").focus();
            </script>
    </body>