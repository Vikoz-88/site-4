$(document).ready(function(){


	$('.on').click(function(){
	$(this).addClass("click");
	$(this).toggleClass("click");
});




// Google map

var myCenter=new google.maps.LatLng(55.8,37.7);
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

var info = new google.maps.InfoWindow(// при клике на маркер появится описание
		{ content: '<b>г. Москва, ул. Богдана Хмельницкого, 50</b>'});
	google.maps.event.addListener(marker, 'click',function(){ info.open(map, marker);});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


});



