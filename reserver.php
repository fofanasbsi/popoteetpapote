<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/add_cart.php';
//get_header();
?>
<!DOCTYPE html>
  <html>
  <head>
  <title>popote & papote</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  
  </head>
  <body>
  <?php include 'components/simple_header.php';
 ?>
<!-- <div class="container header popote">
  
  </div> -->

 


 <br>
 <br>
 <br>
 <br> 
<!-- About Container -->
<div class="w3-container w3-padding-64 w3-white w3-grayscale w3-xlarge" id="about">
  


  <!--CONTENT-->
  <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-row">
  <h1 class="title">Réserver</h1>
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contactez-nous</span></div>
        <h3>Address</h3>
        <p>Passez prendre une tasse de café ou autre.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Mordelles, Fr</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 00 00 00 00</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      </div>
      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
        <div class="w3-section">      
          <label>Nom</label>
          <input class="w3-input" type="text" name="Nom" required>
        </div>
        <div class="w3-section">      
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>
        <div class="w3-section">      
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>  
        <input class="w3-check" type="checkbox" checked name="like">
        <label>J'aime!</label>
        <button type="submit" class="w3-button w3-right w3-theme">Envoyer</button>
        </form>
      </div>
    </div>
  </div>



  <!-- section contact -->


 
  
  
  

   
   
    
   
  

  
  </div>
  
</div>

  <!-- section contact -->


 
  
  
  
<!-- Footer -->
<?php include 'components/footer.php';
 ?>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
<script>
  // Automatic Slideshow - change image every 4 seconds
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
  }
  
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  
  // When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('ticketModal');
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  <script>
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demodots");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
    </script>
  <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
  

</body>
</html>