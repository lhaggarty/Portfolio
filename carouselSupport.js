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
  $('button[data-dismiss="modal"]').click(function(){
    $('#myModal').removeClass('in');
  });

  $('a[href*="#"]:not(.back-to-top)').on("click touchstart", function(t) {
            var n = $(this).attr("href");
            if (n.length > 2) {
                var i = $(n);
                //i = $(i).parent();
                if ($(window).width() < 576) {
                    t.preventDefault();
                    var o = 0;
                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: 1 * $(i).offset().top + o
                        }, 500)
                    });
                } else {
                    t.preventDefault();
                    var o = 0;
                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: 1 * $(i).offset().top + o
                        }, 500)
                    });
            }
          }
            else {
            t.preventDefault();
            }
          });
});
