{!! Form::text($name, $value, ['class' => 'form-control hidden']) !!}
<div id="map-{{$name}}" style="height: 200px; width: 100%;"></div>
<!-- googlemap --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkfiMp0wO0J9bd0fu_95LWMHzBBeKXofs"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
function initialize() {

  var latLng = new google.maps.LatLng({{$value}});
  var map = new google.maps.Map(document.getElementById('map-{{$name}}'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    //title: 'Point A',
    map: map,
    animation: google.maps.Animation.DROP,
    draggable: false
  });
  
  google.maps.event.addListener(map, 'click', function (event) {
    placeMarker(event.latLng);
    
      lat = event.latLng.lat();
      lng = event.latLng.lng();

      $('input[name="{{$name}}"]').val(lat+','+lng); 
     
     var data = {
       lat: lat,
       lng: lng
      }
      
      $.ajax({
      type: 'POST',
      url: '/admin/settings/map',
      data: data,
     
      success: function(){
        console.log('coordinates changed.');
      },
      error: function(){
        console.log('error in coordinates');
      }
    });  
 
  });
  
  function placeMarker(location) {

    if (marker == undefined){
        marker = new google.maps.Marker({
            position: location,
            map: map, 
            animation: google.maps.Animation.DROP,
        });
    }
    else{
        marker.setPosition(location);
    }
    map.setCenter(location);

  }

}
// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>