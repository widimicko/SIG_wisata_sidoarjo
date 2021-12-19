// variabel global marker
var marker

var mapElement = document.getElementById("googleMap-edit")
var latitudeElement = document.getElementById("lat")
var longitudeElement = document.getElementById("lng")

function setMarker(map, position){

  if(marker){
    marker.setPosition(position)
  } else {
    marker = new google.maps.Marker({
      position: position,
      map: map
    })
  }

  latitudeElement.value = position.lat()
  longitudeElement.value = position.lng()
}

function initialize() {
  
  let center = ''
  if (latitudeElement.value !== '' && longitudeElement !== '') {
    center = new google.maps.LatLng(latitudeElement.value, longitudeElement.value)
  } else {
    center = new google.maps.LatLng(-7.4471541, 112.6717158,13)
  }

  const mapProperty = {
    center: center,
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  const map = new google.maps.Map(mapElement, mapProperty)

  if (latitudeElement.value !== '' && longitudeElement !== '') {
    const currentLocation = new google.maps.LatLng(latitudeElement.value, longitudeElement.value)
    setMarker(map, currentLocation)
  } else {
    const setLocation = new google.maps.LatLng(-7.4471541, 112.6717158,13)
    setMarker(map, setLocation)
  }

  google.maps.event.addListener(map, 'click', function(event) {
    setMarker(this, event.latLng)
  })
}

if (mapElement) {
  google.maps.event.addDomListener(window, 'load', initialize)
}