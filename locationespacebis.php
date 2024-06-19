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



<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>
<body>


<?php include 'components/user_header.php';
 ?>

<!--Nos espaces de travail-->
<!--Type de cuisine-->
<div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Nos espaces de travail    </span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Salle de réunion</h3>
          <p class="w3-opacity">Lorem 1</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
          <!-- <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p> -->
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
          <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Espace de travail partagé </h3>

            <p class="w3-opacity">Lorem 2</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
            <!-- <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p> -->
          </div>
        </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
          <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Bureaux privés</h3>

            <p class="w3-opacity">Lorem 3</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
            <!-- <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p> -->
          </div>
        </div>
    </div>
  </div>


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
  <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
  

</body>
</html>
