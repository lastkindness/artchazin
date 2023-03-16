export default () => {
    function initMap(mapWrap) {
        let coordsArr = mapWrap.dataset.coord;
        coordsArr = coordsArr.split(", ");
        const coords = { lat: Number(coordsArr[0]), lng: Number(coordsArr[1]) };
        const map = new google.maps.Map(mapWrap, {
            zoom: 9,
            center: coords,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: coords,
            map: map,
        });
    }
    const mapGlobal = document.getElementById("map");
    const mapContact = document.getElementById("map-contact");
    if (mapGlobal) {
        initMap(mapGlobal);
    }
    if(mapContact) {
        initMap(mapContact);
    }
};
