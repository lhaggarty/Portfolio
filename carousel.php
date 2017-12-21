<?php
if($_GET['selection']=='demhub'){
    getCarousel('#', 'demhub', 'DEMHUB', 22);
}
elseif($_GET['selection']=='hotpotato'){
    getCarousel('#', 'hotpotato', 'Hot Potato', 20);
}
elseif($_GET['selection']=='overdrive'){
    getCarousel('#', 'overdrive', 'Overdrive', 18);
}
elseif($_GET['selection']=='ssl_group'){
    getCarousel('#', 'ssl_group', 'SSL Group', 13);
}
elseif($_GET['selection']=='rcdesign'){
    getCarousel('#', 'rcdesign', 'RC Design', 19);
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

function getCarousel( $link, $source, $title, $amount ){
  echo '
  <a href="'.$link.'" style="color:#38a7de" target="_blank">
    <h5 style="text-align:center">'.$title.'</h5>
  </a>
    '.imageGallery($amount, $source);
    die();
}

?>
