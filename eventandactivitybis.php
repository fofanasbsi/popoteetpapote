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
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">



<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>
<body>

<?php include 'components/user_header.php';
 ?>
<!--Type de -->
   <!-- Grid -->
   <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Evénements et activités
    </span>
    </div>
  </div>


  <div class="w3-row-padding w3-content" style="max-width:1400px">
      <div class="w3-third">
          <div class="w3-justify">
              <h2>Un lieu animé !</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
      <div class="w3-twothird">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Notebook" style="width:45%;">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%;">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%">
    
    </div>
    </div>
   
  
  </div>
  <div >
      <h3>Un lieu de vie</h3>
      <ul class="w3-ul">
        <li class="w3-padding-16 w3-hover-black">
            <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" class="w3-left w3-margin-right" style="width:50px">
            
            <span class="w3-large">Lorem</span><br>
            <div style="margin-left: 100%;">
                <p><i class="fa fa-arrow-circle-right w3-hover-text-teal" onclick="document.getElementById('menu').style.display='block'"></i></p>
            </div>
    
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" class="w3-left w3-margin-right" style="width:50px">
            
            <span class="w3-large">Lorem</span><br>
            <div style="margin-left: 100%;">
                <p><i class="fa fa-arrow-circle-right w3-hover-text-teal" onclick="document.getElementById('menu').style.display='block'"></i></p>
            </div>
    
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" class="w3-left w3-margin-right" style="width:50px">
            
            <span class="w3-large">Lorem</span><br>
            <div style="margin-left: 100%;">
                <p><i class="fa fa-arrow-circle-right w3-hover-text-teal" onclick="document.getElementById('menu').style.display='block'"></i></p>
            </div>
    
            <span>Sed mattis nunc</span>
          </li>
      </ul>
    </div>



    <div id="menu" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
          <div class="w3-container w3-black w3-display-container">
            <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Starters</h1>
          </div>
         
          <div class="w3-container w3-black">
            <h1>Main Courses</h1>
          </div>
         
          <div class="w3-container w3-black">
            <h1>Detail</h1>
          </div>
          <div class="w3-container">
            <h5>Fruit Salad <b>$2.50</b></h5>
            <h5>Ice cream <b>$2.00</b></h5>
            <h5>Chocolate Cake <b>$4.00</b></h5>
            <h5>Cheese <b>$5.50</b></h5>
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
