
//var xhttp;
if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
} else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
// xhttp.open("GET", "./Leon Haggarty - Portfolio_files/carousel/carousel.php", true);
// xhttp.send();
xhttp.onreadystatechange = function () {
    //console.log(xhttp);
    if (this.readyState == 4 && this.status == 200) {
        console.log(xhttp.responseText);
        document.getElementById("innerModal").innerHTML = xhttp.responseText;
    }
    // $('#myModal').show();
    // $("#editCounterElement").attr('data-hover', xhttp.responseText);
}

function launchPopUp(selection){
    console.log(selection);
    if ( document.getElementById("innerModal") !== null ) {
        document.getElementById("innerModal").innerHTML = "";
    }
    if ( document.getElementById("carouselRequestSelection") !== null ) {
        document.getElementById('carouselRequestSelection').innerHTML = selection;
    }
    xhttp.open("GET", "https://squireproductions.000webhostapp.com/leonhaggarty/portfolio/carousel.php?selection="+selection, true);
    xhttp.send();
}

document.addEventListener("DOMContentLoaded", function(event) {
    console.log('DOMContentLoaded');
});


// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').focus()
// })


$( document ).ready(function() {

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
