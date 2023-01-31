

// Initialize and add the map
function initMap() {

  const address_main = {lat: 48.824530, lng:2.360950};
  const address_sec = {lat: 48.825610, lng:2.279470};
  const address_third = {lat: 48.845540, lng:2.327790}; 
  const address_fourth = {lat: 48.870812, lng:2.331505};
  const address_fifth = {lat: 48.848677, lng:2.267647};
  const address_sixth = {lat:48.887678, lng:2.616773}; 

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: address_main,
    mapId: "2b9fb692357e3fe",
  });

  const mainPinColor= new google.maps.marker.PinView({
    background: "#43B1F8",
  });

  const home = new google.maps.marker.AdvancedMarkerView({
    map,
    position: address_main,
    title: "La maison",
    content: mainPinColor.element,
  });

  const spots = [
    {
      position: address_sec,
      title: "ISEP: NDL",
    },
    {
      position: address_third,
      title: "ISEP: NDC",
    },
    {
      position: address_fourth,
      title: "Opéra",
    },
    {
      position: address_fifth,
      title: "Mr.Aminatou",
    },
    {
      position: address_sixth,
      title: "Mr.Jodah",
    },
  ]
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();

  // Create the markers.
  spots.forEach(({ position, title }, i) => {
    const pinView = new google.maps.marker.PinView({
      glyph: `${i + 1}`,
    });
    const marker = new google.maps.marker.AdvancedMarkerView({
      position,
      map,
      title: `${i + 1}. ${title}`,
      content: pinView.element,
    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", ({ domEvent, latLng }) => {
      const { target } = domEvent;

      infoWindow.close();
      infoWindow.setContent(marker.title);
      infoWindow.open(marker.map, marker);
    });
  });
}

window.initMap = initMap;
