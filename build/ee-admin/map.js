var map;
var center = {lat: 42.986950, lng: -81.243177};

function CenterControl(controlDiv, map) {

  // Set CSS for the control border.
  var controlUI = document.createElement('div');
  controlUI.style.backgroundColor = '#fff';
  controlUI.style.border = '2px solid #fff';
  controlUI.style.borderRadius = '3px';
  controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
  controlUI.style.cursor = 'pointer';
  controlUI.style.marginBottom = '22px';
  controlUI.style.textAlign = 'center';
  controlUI.title = 'Click to recenter the map';
  controlDiv.appendChild(controlUI);

  // Set CSS for the control interior.
  var controlText = document.createElement('div');
  controlText.style.color = 'rgb(25,25,25)';
  controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
  controlText.style.fontSize = '14px';
  controlText.style.lineHeight = '38px';
  controlText.style.paddingLeft = '5px';
  controlText.style.paddingRight = '5px';
  controlText.innerHTML = 'Re-Center';
  controlUI.appendChild(controlText);

  // Setup the click event listeners: simply set the map to Chicago.
  controlUI.addEventListener('click', function() {
    map.setCenter(center);
    map.setZoom(13);
  });

}

function initialize() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      disableDefaultUI: true,
      center: center
    });
    

    var script = document.createElement('script');
    script.src = 'ee-admin/includes/data/autodata.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);

    window.data_callback = function(results) {
        for (var i = 0; i < results.markers.length; i++) {
            var title = results.markers[i].activityDesc;
            var lat = results.markers[i].lat;
            var lng = results.markers[i].lng;
            var latLng = new google.maps.LatLng(lat,lng);
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: title
            });
        }
    }
    
  var centerControlDiv = document.createElement('div');
  centerControlDiv.setAttribute("id", "recenter");
  var centerControl = new CenterControl(centerControlDiv, map);

  centerControlDiv.index = 1;
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
}

function display() {
    
}