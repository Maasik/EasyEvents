var map;

  function initialize() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(42.986950,-81.243177),
    });

    var script = document.createElement('script');
    script.src = 'ee-admin/includes/data/autodata.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);
  }

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