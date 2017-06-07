<footer class="l12 m12 s12 x12">
      <div id="footer-section-one" class="footer-section l6 m6 s6 x12">
        <div id="footer-section-one-social-container" class="l4 m4 s4 x12">
          <div id="footer-section-one-logo"></div>
          <div id="social-media" class="l12 m12 s12 x12">
            <ul>
              <li class="l4 m4 s12 x4 social-icon"><a href=""><img src="IMAGES/facebook.png" alt="" height="25px"></a></li>
              <li class="l4 m4 s12 x4 social-icon"><a href=""><img src="IMAGES/twitter.png" alt="" height="25px"></a></li>
              <li class="l4 m4 s12 x4 social-icon"><a href=""><img src="IMAGES/instagram.png" alt="" height="25px"></a></li>
            </ul>
          </div>
        </div>
        <div id="footer-section-one-about-container" class="l8 m8 s8 x12">
          <div id="footer-section-one-restaurant-name"><h6>The IVY Restaurant</h6></div>
          <div id="footer-section-one-about"><p>Excited and Hungry for more? Want to visit us? Find us in the heart of Gurugram, at<br><br><span id="ivy-address" >89/90, Ground Floor, Baani Square <br>Gurgaon, Haryana 122018</span><br><br>We also have a presence on social media. Find us online on the following and make sure you follow us!</p></div>
        </div>
      </div>
      <div id="footer-section-two" class="footer-section l6 m6 s6 x12">
        <div id="footer-map" class="l12 m12 s12 x12"></div>
        <div id="footer-map-content" class="l12 m12 s12 x12">
          <div id="subscribe-now-heading" class="l12 m12 s12 x12">
            <h6>Subscribe now for latest offers</h6>
          </div>
          <div id="subscribe-now-form-container" class="l12 m12 s12 x12">
            <form onsubmit="subscriberListFunction(); return false;" id="subscriberList">
              <input type="email" name="subscriber_email" id="subscriber_email" placeholder="Your Email Id" class=" l6 m6 s10 x10">
              <button name="submit_subscriber_form" class=" l3 m3 s10 x10" id="submit_subscriber_form" >Subscribe Now</button>
              <div  class="l12 m12 s12 x12">
                <div id="subscribeStatus" class="success l7 m7 s10 x10">
                    Succesful Subscription
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>



  </div>

<script src="JAVASCRIPT/script.js"></script>
<script src="JAVASCRIPT/script-2.js"></script>
<!-- <script type="text/script" src="JAVASCRIPT/script.js"></script> -->

<!-- script for google maps  -->
<script>
//Map function

function initMap() {

  // Styles a map in night mode.
  
  var map = new google.maps.Map(document.getElementById('footer-map'),{
    center: {lat: 28.4257498, lng: 77.05762529999993},
    zoom: 15,zoomControl :false, navigationControl: false,streetViewControl:false, mapTypeControl: false, scrollwheel: false, draggable: false,scaleControl: false,
    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
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
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]
        });
    var marker = new google.maps.Marker({
               position: new google.maps.LatLng(28.4257498, 77.05762529999993),
               map: map,
               draggable:false,
               icon:'/scripts/img/logo-footer.png'
            });
            
        marker.setMap(map);
        
        var infowindow = new google.maps.InfoWindow({
           content:'<strong>The Ivy Restaurant</strong><br>89/90, Ground Floor, Baani Square <br>Gurgaon, Haryana 122018<br>'
        });
      
        infowindow.open(map,marker);
 
      }
  

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTBNoOpm7jUOHQfAgJNxZ25gU3pHP_EU&callback=initMap"
    async defer></script>
</body>
</html>
