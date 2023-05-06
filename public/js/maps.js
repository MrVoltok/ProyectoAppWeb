function iniciarMap(){
    var coord = {lat:19.005275602817942 ,lng: -98.20446818971773};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 17,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}