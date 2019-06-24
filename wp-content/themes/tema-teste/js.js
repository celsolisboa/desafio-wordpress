//Efeitos do menu

var position = $(window).scrollTop();

function listener (e) {
    var scroll = $(window).scrollTop();
    e.preventDefault();
	if (scroll > 0) {
	    if(scroll > position) {
		    document.getElementById("barra-topo").style.display = "none";
		    document.getElementById("logo").style.width = "125px";
		    document.getElementById("menu-principal").style.background = "#FFFFFF";
	    } else if(scroll < position) {
		    document.getElementById("barra-topo").style.display = "block";
		    document.getElementById("barra-topo").className = "container-fluid estilo2";
		    document.getElementById("menu-principal").style.background = "#FFFFFF";
	    }
	} else {
	   	document.getElementById("barra-topo").style.display = "block";
	   	document.getElementById("barra-topo").className = "container-fluid estilo1";
	   	document.getElementById("logo").style.width = "195px";
	   	document.getElementById("menu-principal").style.background = "transparent";
	}

	position = scroll;
}
$(window).scroll(listener);
$(window).resize(listener);

//Máscara para CEP no Mapa
$(document).ready(function(){
	$("#address").mask("99999999");
});

//Google Maps API
var map, infoWindow;
var markers = [];
function initMap() {
    var mapOptions = {
    zoom: 11.5,
    center: new google.maps.LatLng(-22.928231, -43.4711826),
    disableDefaultUI: true,
    zoomControl: false,
    styles: [
    {
    	"elementType": "geometry",
        "stylers": [
        {
            "color": "#FFFFFF"
        }
        ]
        },
        {
        "elementType": "labels.icon",
        "stylers": [
        {
            "visibility": "off"
        }
        ]
        },
        {
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "elementType": "labels.text.stroke",
        "stylers": [
        {
            "color": "#FFFFFF"
        }
        ]
        },
        {
       	"featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
        {
            "visibility": "off"
        }
        ]
        },
        {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "poi",
        "stylers": [
        {
            "visibility": "off"
        }
        ]
        },
        {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#eeeeee"
        }
        ]
        },
        {
        "featureType": "poi",
        "elementType": "labels.text.fill",
            "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#e5e5e5"
        }
        ]
        },
        {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#f4ebeb"
        }
        ]
        },
        {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
        {
            "visibility": "off"
        }
        ]
        },
        {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#f4ebeb"
        }
        ]
        },
        {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4a5a5"
        }
        ]
        },
        {
        "featureType": "transit",
        "stylers": [
        {
            "visibility": "off"
        }
        ]
        },
        {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#e5e5e5"
        }
        ]
        },
        {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#eeeeee"
        }
        ]
        },
        {
        "featureType": "water",
        "stylers": [
        {
            "color": "#f4ddda"
        }
        ]
        },
        {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
        {
            "color": "#f4ddda"
        }
        ]
        },
        {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#f4ddda"
        }
        ]
    }
    ]
    };
      
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        
    infoWindow = new google.maps.InfoWindow;
       
    var geocoder = new google.maps.Geocoder();
        
    document.getElementById('submit').addEventListener('click', function() {
        geocodeAddress(geocoder, map);
    });


    document.getElementById('localizacao-atual').addEventListener('click', function() {
       
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      	document.getElementById("floating-panel").style.top = "50%";
        
        navigator.geolocation.getCurrentPosition(function(position) {
        
	        var pos = {
	    	    lat: position.coords.latitude,
	            lng: position.coords.longitude
	        };

	        deleteMarkers();

	        var marker_atual = new google.maps.Marker({
	        	map: map,
	            position: pos
	        });

	        markers.push(marker_atual);

	        infoWindow.setPosition(pos);
	        map.setCenter(pos);
	        }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	    	});
    
    } else {
    	// Browser doesn't support Geolocation
    	handleLocationError(false, infoWindow, map.getCenter());
    }
})};

function geocodeAddress(geocoder, resultsMap) {
	deleteMarkers();
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
    if (status === 'OK') {
      	document.getElementById("floating-panel").style.top = "50%";
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
    	    map: resultsMap,
            position: results[0].geometry.location
        });
        markers.push(marker);
    } else {
       	if (status === 'ZERO_RESULTS' || status === 'INVALID_REQUEST') {
       		var mensagem = 'Esse CEP não foi encontrado.'
       	}
       	else {
          	var mensagem = 'Desculpe, estamos passando por problemas técnicos. Tente novamente mais tarde.'
        }
        alert(mensagem);
        }
    });
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
	    markers[i].setMap(map);
    }
}
// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
	setMapOnAll(null);
}
// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
	markers = [];
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
	    'Erro: O serviço de Geocalização falhou.' :
        'Erro: Seu navegador não tem suporte para o serviço de Geolocalização.');
    infoWindow.open(map);
}