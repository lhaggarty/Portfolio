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
function getHpCarousel(){
  echo '
  <a href="http://hotpotato.me" style="color:#38a7de" target="_blank">
    <h5 style="text-align:center">HOT POTATO</h5>
  </a>
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
      <div class="item active">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-2.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-4.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-6.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-8.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-10.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-12.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-14.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-16.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-18.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-20.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-21.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-22.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-24.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-26.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-30.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-32.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-34.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-36.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-38.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-40.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-42.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-46.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-48.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-50.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-52.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./Leon Haggarty - Portfolio_files/carousel/hotpotato-54.png" alt="">
        <div class="carousel-caption">
        </div>
      </div>
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
    die();
}
function getDemhubCarousel(){
echo '
<a href="http://demhub.net" style="color:#38a7de" target="_blank">
  <h5 style="text-align:center">DEMHUB</h5>
</a>
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
    <div class="item active">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-1.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-2.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-4.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-6.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-8.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-10.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-11.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-12.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-13.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-14.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-15.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-16.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-18.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-19.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-20.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-22.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-24.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-26.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-28.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-30.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-32.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-34.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-36.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-38.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-40.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-42.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-44.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-46.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-48.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-50.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-52.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-54.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-56.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-58.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-60.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-62.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-63.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-64.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-66.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-68.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/demhub-70.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>

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
die();
}
function getOverdriveCarousel(){
echo '
<a href="http://demhub.net" style="color:#38a7de" target="_blank">
  <h5 style="text-align:center">Overdrive Automotive</h5>
</a>
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
    <div class="item active">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-0.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-1.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-2.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-3.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-4.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-5.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-6.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-7.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-8.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-9.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-10.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-11.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-12.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-13.png" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-14.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div><div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-15.png" alt="">
      <div class="carousel-caption">
      </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-20.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./Leon Haggarty - Portfolio_files/carousel/overdrive-21.png" alt="">
      <div class="carousel-caption">
      </div>
    </div>

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
die();
}

?>
