function marginTop() {
  var navHeight = $('#header_top').height();
  $('#wrapper').css('margin-top', navHeight);
}

// GOOGLE MAPS
function initialize () {
  var $map = $('#map');
  if ($map) {
      var marker;

      var centerMap = new google.maps.LatLng(50.6169313, 4.5548528);
      var mapMarker = new google.maps.LatLng(50.6165313, 4.5572528);
      var mapOptions = {
        zoom: 16, // required
        zoomControl: false,
        scaleControl: false,
        panControl: false,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        center: centerMap, // Required http://itouchmap.com/latlong.html
        styles: [
            {"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#24324A"}]},
            {"featureType": "landscape","elementType": "all","stylers": [{"color": "#f2f2f2"}]},
            {"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},
            {"featureType": "road","elementType": "all","stylers": [{"saturation": -100},{"lightness": 45}]},
            {"featureType": "road","elementType": "labels.text.fill","stylers": [{"color": "#24324A"}]},
            {"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},
            {"featureType": "road.arterial","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
            {"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},
            {"featureType": "water","elementType": "all","stylers": [{"color": "#d4e4eb"},{"visibility": "on"}]},
            {"featureType": "water","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"color": "#fef7f7"}]},
            {"featureType": "water","elementType": "labels.text.fill","stylers": [{"color": "#9b7f7f"}]},
            {"featureType": "water","elementType": "labels.text.stroke","stylers": [{"color": "#fef7f7"}]}
        ]
      };

      var myIcon = new google.maps.MarkerImage('/wp-content/themes/mstores/images/marker/map_marker.png', null, new google.maps.Point(0, 0), new google.maps.Point(0, 60), new google.maps.Size(40, 60));
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
        position: mapMarker,
        icon: myIcon,
        map: map
      });

      google.maps.event.addDomListener(window, 'resize', function () {
        map.setCenter(center);
      });
  }
}

// Google Map initialize
function mapInitialize(){
  if(document.getElementById("map")!=null){
    initialize();
  }
}

// Slick slider
function sliderProducts() {
  $(".slider_center").slick({
      centerMode: true,
      slidesToShow: 3,
      lazyLoad: 'progressive'
      /* responsive: [{
        breakpoint: 767,
        settings: {
          arrows: true,
          centerMode: true,
          slidesToShow: 1
        }
      }] */
  });
}


$(document).ready(function(){
    // margin top nav
    marginTop();

    // Mobile Menu
    $('#toggle').click(function() {
       $(this).toggleClass('active');
       $('#overlay').toggleClass('open');
       $('body').toggleClass('fixed');
    });

  	// Scroll reveal
  	if ($(window).width() > 767) {
		  window.sr = ScrollReveal();
		  sr.reveal('.appear_bottom', {
		    duration: 2000,
		    origin: 'bottom',
		    distance: '150px',
		    scale: 1
		  },100);

		  sr.reveal('.appear_bottom2', {
		    duration: 2000,
		    origin: 'bottom',
		    distance: '150px',
		    scale: 1
		  },100);

		  sr.reveal('.appear_bottom3', {
		    duration: 2000,
		    origin: 'bottom',
		    distance: '150px',
		    scale: 1
		  },100);

		  sr.reveal('.appear_bottom_solo', {
		    duration: 2000,
		    origin: 'bottom',
		    distance: '150px',
		    scale: 1
		  });

		  sr.reveal('.fadein', {
		    duration: 2000,
		    origin: 'bottom',
		    distance: '0px',
		    scale: 1
		  });

		  sr.reveal('.appear_left', {
		    duration: 2000,
		    origin: 'left',
		    distance: '250px',
		    scale: 1
		  });

		  sr.reveal('.appear_right', {
		    duration: 2000,
		    origin: 'right',
		    distance: '250px',
		    scale: 1
		  });
		}

		// MENU ACTIVE
    var url = window.location.href;
    var myMenuLinks = $('#menu-header-menu li');

    myMenuLinks.filter(function() {
        return this.href == url;
    }).addClass('active');

    // Google Map initialize
    mapInitialize();

    // Scroll to href
    $(function() {
        $('#scrollto a[href*=#]').on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 700, 'linear');
        });
    });

    // Slider 
    sliderProducts();
});

$(window).resize(function() {
    // margin top nav
    marginTop();
});

$( window ).scroll(function() {
    // Sticky header
    if ($(window).width() > 767) {
      if ($(window).scrollTop() > 100){
        $('nav').addClass('sticky');
      } else {
        $('nav').removeClass('sticky');
      }
    }
});

