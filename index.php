<?php include 'header.php'; ?>
<script>
//Object for history
var historyObj = {page: "home"};
//Adds to history
history.pushState(historyObj, "Home", "#home");
</script>
<div>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="text-black" href="about.php">About Us</a>
    <a class="text-black" href="info.php">Info</a>
    <a class="text-black" href="affiliates.php">Partners</a>
    <a class="text-black" href="contact.php">Contact Us</a>
  </div>
</div>
<div>
</div>
<div id="ajax-search" class="container col-xs-12">
  <br>
  <!-- Main Div tag for the search bar and hints -->
  <form id="search" class="text-center home-search center-block" onsubmit="">
    <input id="search-box" type="text" class="inputBox home-search text-center" placeholder="Search Foods..."
    onkeyup="" autocomplete="off">
    <div id="search-hints" class="transparent"></div>
  </form>
</div>
<!-- The div tag for livesearch page loads -->
<div id="livesearch" class="col-xs-12 padding-md"></div>
<br/>
<!-- Redirection "buttons" for the main categories of pages -->
<div class="text-center">
  <div id="large-btn" class="btn-toolbar-home">
    <div class="hidden-lg col-xs-12">
      <a href="javascript:resizeBtn('allFruits')">
        <button type="button" class="btn mobile-button accBut">Fruits</button>
      </a>
    </div>
    <div class="hidden-lg col-xs-12">
      <a href="javascript:resizeBtn('allVeggies')">
        <button type="button" class="btn mobile-button accBut">Veggies</button>
      </a>
    </div>
    <div class="hidden-lg col-xs-12">
      <a href="javascript:resizeBtn('allGrains')">
        <button type="button" class="btn mobile-button accBut">Grains</button>
      </a>
    </div>

    <div class="visible-lg-block col-lg-4 padding-md transition">
      <a href="javascript:resizeBtn('allFruits')">
        <img src="Images/FruitMedley.jpg" alt="Fruit Medley"/><br/>Fruits
      </a>
    </div>
    <div class="visible-lg-block col-lg-4 padding-md transition">
      <a href="javascript:resizeBtn('allVeggies')">
        <img src="Images/VeggieMedley.jpg" alt="Vegetable Medley" /><br/>Vegetables
      </a>
    </div>
    <div class="visible-lg-block col-lg-4 padding-md transition">
      <a href="javascript:resizeBtn('allGrains')">
        <img src="Images/BreadMedley.jpg" alt="Grain Medley"/><br/>Grains
      </a>
    </div>
  </div>
  <div id="small-btn" class="btn-group-justified button-footer btn-group hidden">
    <div class="btn-group">
      <a href="javascript:load('allFruits')">
        <button class="state-button btn accBut" type="button" id="fruit-btn" class="btn">Fruits</button>
      </a>
    </div>
    <div class="btn-group">
      <a href="javascript:load('allVeggies')">
        <button class="state-button btn accBut" type="button" id="veggie-btn" class="btn">Veggies</button>
      </a>
    </div>
    <div class="btn-group">
      <a href="javascript:load('allGrains')">
        <button class="state-button btn accBut" type="button" id="grain-btn" class="btn">Grains</button>
      </a>
    </div>
  </div>
</div>
</div>
<script>
//Function to check if element is empty
function isEmpty( el ){
  return !$.trim(el.html())
}

//Allows the user to press enter an live load the top hint
$(function() {
  $("#search").on("submit", function(e) {
    e.preventDefault();
    var content = document.getElementById("search-hints").innerHTML;
    if (content != "no suggestion" && content != "") {
      var regEx = /javascript\:foodLoad\("[a-zA-Z]+-?[a-zA-Z]*","[a-zA-Z]+"\)/;
      location.href = regEx.exec(content);
      document.getElementById("search-hints").innerHTML = "";
    }
  });
});

$("#search-box").on("input", function(e) {
  showResult(this.value);
  var content = document.getElementById("search-hints").innerHTML;
  if (content != "no suggestion" && content != "") {
    var regEx = /javascript\:foodLoad\("[a-zA-Z]+-?[a-zA-Z]*","[a-zA-Z]+"\)/;
    location.href = regEx.exec(content);
    document.getElementById("search-hints").innerHTML = "";
  }
});
</script>
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
