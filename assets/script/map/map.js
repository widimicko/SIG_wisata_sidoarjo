const mapElement = document.getElementById("googleMap")
const selectSearchElement = document.getElementById("select-by-category")
const searchElement = document.getElementById("search")
const dataMessageElement = document.getElementById("data-message")

function initialize(category, search) {

  const infoWindow = new google.maps.InfoWindow
  const mapOptions = {
    zoom: 20,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  }

  const map = new google.maps.Map(mapElement, mapOptions)
  const bounds = new google.maps.LatLngBounds()


  let baseUrl = `${window.location.origin}/Kuliah/SIG/SIG_wisata_sidoarjo/model/`
  if (category !== '') {
    baseUrl = `${baseUrl}get_by_category.php?category=${category}`
  } else if (search !== '') {
    baseUrl = `${baseUrl}search_wisata.php?search=${search}`
  } else {
    baseUrl = `${baseUrl}get_list_wisata.php`
  }

  fetch(baseUrl)
    .then((response) => {
      return response.json()
    })
    .then((responseJson) => {
      if (Object.keys(responseJson.data).length === 0) {
        return mapElement.innerHTML = '<div class="mt-5 text-center">Data tidak ditemukan</div>'
      }

      dataMessageElement.innerHTML = `${Object.keys(responseJson.data).length} Data ditemukan`
      responseJson.data.forEach(data => {
        addMarker(data)
      })
    })
    .catch(() => {
      return mapElement.innerHTML = '<div class="mt-5 text-center">Error 500: Terdapat kesalahan pada server</div>'
    })

  function addMarker(data) {
    const location = new google.maps.LatLng(data.lat, data.lng)
    bounds.extend(location)
    let image = ''
    switch (data.category) {
      case 'Sejarah':
        image = 'https://img.icons8.com/ios/50/000000/museum.png'
        break
      case 'Alam':
        image = 'https://img.icons8.com/fluency/32/000000/forest.png'
        break
      case 'Kuliner':
        image = 'https://img.icons8.com/external-ddara-lineal-color-ddara/50/000000/external-eat-health-ddara-lineal-color-ddara.png'
        break
      case 'Hiburan':
        image = 'https://img.icons8.com/ios/50/000000/ferris-wheel--v1.png'
        break
      case 'Religi':
        image = 'https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-mosque-ramadan-kmg-design-outline-color-kmg-design.png'
        break
    }

    const marker = new google.maps.Marker({
      map: map,
      position: location,
      icon: image
    })
    map.fitBounds(bounds)
    bindInfoWindow(marker, map, infoWindow, data.name)
  }

  function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'mouseover', function () {
      infoWindow.setContent(html)
      infoWindow.open(map, marker)
    })
  }
}

if (mapElement) {
  google.maps.event.addDomListener(window, 'load', initialize('', ''))


  let timeout = null;
  searchElement.addEventListener('keyup', (event) => {
    dataMessageElement.innerHTML = ''
    mapElement.innerHTML = '<div class="py-5 mt-5 text-center"><div class="spinner-grow text-primary" role="status"></div><div class="spinner-grow text-secondary" role="status"></div><div class="spinner-grow text-success" role="status"></div><div class="spinner-grow text-danger" role="status"></div><div class="spinner-grow text-warning" role="status"></div><div class="spinner-grow text-info" role="status"></div><div class="spinner-grow text-light" role="status"></div><div class="spinner-grow text-dark" role="status"></div></div>'
    selectSearchElement.value = ''
    clearTimeout(timeout)
    timeout = setTimeout(() => {
      google.maps.event.addDomListener(window, 'load', initialize('', event.target.value))
    }, 1000)
  })

  selectSearchElement.addEventListener('change', (event) => {
    searchElement.value = ''
    google.maps.event.addDomListener(window, 'load', initialize(event.target.value, ''))
  });
}