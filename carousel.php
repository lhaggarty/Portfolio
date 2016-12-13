<?php
if($_GET['selection']=='demhub'){
    getDemhubCarousel();
}
elseif($_GET['selection']=='hotpotato'){
    getHpCarousel();
}
elseif($_GET['selection']=='overdrive'){
    getOverdriveCarousel();
}
function imageGallery($amount, $name){
  $html = '
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <!--
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
  ';
  for ($i=0; $i < $amount; $i++) {
    $html .='
    <div class="item'.($i == 0 ? ' active' : ' ').'">
      <img src="./Leon Haggarty - Portfolio_files/carousel/'.$name.'-'.$i.'.png" alt="" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>';
  }
  $html .= '
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  ';
  return $html;
}

function getHpCarousel(){
  echo '
  <a href="http://hotpotato.me" style="color:#38a7de" target="_blank">
    <h5 style="text-align:center">HOT POTATO</h5>
  </a>
    '.imageGallery(26,'hotpotato');
    die();
}
function getDemhubCarousel(){
echo '
<a href="http://demhub.net" style="color:#38a7de" target="_blank">
  <h5 style="text-align:center">DEMHUB</h5>
</a>'.imageGallery(41,'demhub');
die();
}
function getOverdriveCarousel(){
echo '
<a href="http://demhub.net" style="color:#38a7de" target="_blank">
  <h5 style="text-align:center">Overdrive Automotive</h5>
</a>'.imageGallery(18,'overdrive');
die();
}

?>
