var map;

  function initialize() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(42.986950,-81.243177),
    });

    var script = document.createElement('script');
    script.src = 'mapdata.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);
  }

  window.data_callback = function(results) {
    for (var i = 0; i < results.markers.length; i++) {
      var title = results.markers[i].events.activityDesc;
      var coords = results.markers[i].events.coordinates;
      var latLng = new google.maps.LatLng(coords[0],coords[1]);
      var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: title
      });
    }
  }