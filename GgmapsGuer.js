async function initMap() {
    const { Map } = await google.maps.importLibrary('maps');
    const { Marker } = await google.maps.importLibrary('marker');

    const position = { lat: 48.5171787, lng: -3.5914892 };

    const map = new Map(document.getElementById('map'), {
        center: position,
        zoom: 16,
        disableDefaultUI: false,
    });

    new Marker({
        map,
        position,
        title: "La Boudeuse et le Crapaud – 2 Hent ar C'hastel, Guerlesquin",
    });
}