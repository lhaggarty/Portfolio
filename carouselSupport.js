function launchPopUp (selection){
  document.getElementById("innerModal").innerHTML= "";
  $('#carouselRequestSelection').html(selection);
  xhttp.open("GET", "carousel.php?selection="+selection, true);
	xhttp.send();
}
// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').focus()
// })

var xhttp;
$( document ).ready(function() {
  if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  // xhttp.open("GET", "./Leon Haggarty - Portfolio_files/carousel/carousel.php", true);
  // xhttp.send();
  xhttp.onreadystatechange = function() {

      document.getElementById("innerModal").innerHTML = xhttp.responseText;
      // $('#myModal').show();
      // $("#editCounterElement").attr('data-hover', xhttp.responseText);

  };
});
