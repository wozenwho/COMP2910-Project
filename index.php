<?php include 'header.php'; ?>
<div class="container">
  <div>
    <div class="container-fluid">
      <nav class="navbar navbar-default" role="navigation">
        <div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left border-0"
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a class="text-black" href="about.php">About Us</a></li>
              <li><a class="text-black" href="info.php">Info</a></li>
              <li><a class="text-black" href="affiliates.php">Partners</a></li>
              <li><a class="text-black" href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="center-block text-center">
      <a href="index.php">
        <img src="Images/UseItUpBanner v2.0.png"/>
      </a>
    </div>
  </div>
  <div>
  </div>
  <div id="ajax-search" class="container col-xs-12">
    <br>
    <!-- Main Div tag for the search bar and hints -->
    <form class="text-center" onsubmit="return false">
      <input id="search-box" type="text" class="inputBox home-search text-center" size="30" placeholder="Search Foods..."
             onkeyup="showResult(this.value)">
      <div id="search-hints"></div>
    </form>
  </div>
  <!-- The div tag for livesearch page loads -->
  <div id="livesearch" class="col-xs-12 padding-lg">
  </div>
  <br/>
  <!-- Redirection "buttons" for the main categories of pages -->
  <div class="text-center">
    <div id="large-btn" class="btn-toolbar-home">
      <div class="hidden-lg col-xs-12">
        <a href="javascript:resizeBtn('allFruits')">
          <button type="button" class="btn mobile-button">Fruits</button>
        </a>
      </div>
      <div class="hidden-lg col-xs-12">
        <a href="javascript:resizeBtn('allVeggies')">
          <button type="button" class="btn mobile-button">Veggies</button>
        </a>
      </div>
      <div class="hidden-lg col-xs-12">
        <a href="javascript:resizeBtn('allGrains')">
          <button type="button" class="btn mobile-button">Grains</button>
        </a>
      </div>
    <div class="visible-lg-block col-lg-4 padding-md">
      <a href="javascript:resizeBtn('allFruits')">
        <img src="Images/FruitMedley.jpg" alt="Fruit Medley"/><br/>Fruits
      </a>
    </div>
    <div class="visible-lg-block col-lg-4 padding-md">
      <a href="javascript:resizeBtn('allVeggies')">
       <img src="Images/VeggieMedley.jpg" alt="Vegetable Medley" /><br/>Vegetables
      </a>
    </div>
    <div class="visible-lg-block col-lg-4 padding-md">
      <a href="javascript:resizeBtn('allGrains')">
        <img src="Images/BreadMedley.jpg" alt="Grain Medley"/><br/>Grains
      </a>
    </div>
  </div>
    <div id="small-btn" class="btn-toolbar-other btn-group hidden">
      <a href="javascript:load('allFruits')">
        <button type="button" id="fruit-btn" class="btn">Fruits</button>
      </a>
      <a href="javascript:load('allVeggies')">
        <button type="button" id="veggie-btn" class="btn">Veggies</button>
      </a>
      <a href="javascript:load('allGrains')">
        <button type="button" id="grain-btn" class="btn">Grains</button>
      </a>
    </div>
  </div>
</div>

<?php
if (isset($_GET['f'])) {
  $food = $_GET['f'];
  if ($food == 'f') {
    echo "<script type='text/javascript'>resizeBtn('allFruits');</script>";
  } else if ($food == 'v') {
    echo "<script type='text/javascript'>resizeBtn('allVeggies');</script>";
  } else if ($food == 'g') {
    echo "<script type='text/javascript'>resizeBtn('allGrains');</script>";
  }
}

include 'footer.php'; ?>
