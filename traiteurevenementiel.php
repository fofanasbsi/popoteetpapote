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
<div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Présentations
    </span>
    </div>
  </div>


  <div class="w3-row-padding w3-content" style="max-width:1400px">
      <div class="w3-third" >
          <div class="w3-justify" style="margin-left:15%;">
              <h2>Traiteur   !</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
            </div>
        </div>
        <br/>
        <br/>
        <br/>
      <div class="w3-twothird">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Notebook" style="width:80%;margin-left:15%;">
      <!-- <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%;">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:45%">
     -->
    </div>
    </div>
   
  
  </div>
  <div class="w3-container w3-padding-64 w3-white w3-grayscale w3-xlarge" id="about">


  <!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>Nos fournisseurs</h2>
    <p>Rencontrez l'équipe - nos rats de bureau :</p>
    
    <div class="w3-row"><br>
    
    <div class="w3-quarter">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Johnny Walker</h3>
      <p>Web Designer</p>
    </div>
    
    <div class="w3-quarter">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Rebecca Flex</h3>
      <p>Support</p>
    </div>
    
    <div class="w3-quarter">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Jan Ringo</h3>
      <p>Boss man</p>
    </div>
    
    <div class="w3-quarter">
      <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Kai Ringo</h3>
      <p>Fixer</p>
    </div>
    
    </div>
    </div>
    

  <!--CONTENT-->
  <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

    <div class="w3-panel">
      <h1><b>MARKETING</b></h1>
      <p>Template by w3.css</p>
    </div>
  
    <!-- Slideshow -->
    <div class="w3-container">
      <div class="w3-display-container mySlides">
        <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:100%">
        <div class="w3-display-topleft w3-container w3-padding-32">
          <span class="w3-white w3-padding-large w3-animate-bottom">Activité 3</span>
        </div>
      </div>
      <div class="w3-display-container mySlides">
        <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:100%">
        <div class="w3-display-middle w3-container w3-padding-32">
          <span class="w3-white w3-padding-large w3-animate-bottom">Activité 2 </span>
        </div>
      </div>
      <div class="w3-display-container mySlides">
        <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" style="width:100%">
        <div class="w3-display-topright w3-container w3-padding-32">
          <span class="w3-white w3-padding-large w3-animate-bottom">Activité 1</span>
        </div>
      </div>
  
      <!-- Slideshow next/previous buttons -->
      <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
        <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
        <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
      
        <div class="w3-center">
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>
    </div>
    
   
  
 
    <!-- Grid -->
    <div class="w3-row-padding" id="about">
      <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Nos activités</span>
      </div>
  
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Activité 1</h3>
            <p class="w3-opacity">Lorem 1</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
            <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p>
          </div>
        </div>
      </div>
  
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
            <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
            <div class="w3-container">
              <h3>Activité 2</h3>
              <p class="w3-opacity">Lorem 2</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
              <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p>
            </div>
          </div>
      </div>
  
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
            <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="John" style="width:100%">
            <div class="w3-container">
              <h3>Activité 3</h3>
              <p class="w3-opacity">Lorem 3</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos mollitia dicta eum quod omnis ad, voluptate pariatur nulla quidem corrupti suscipit, velit, sed sunt autem? Eius debitis laborum iusto.</p>
              <p><button class="w3-button w3-light-grey w3-block">Consulter</button></p>
            </div>
          </div>
      </div>
    </div>
  
    <!-- Dévis -->
    <div class="w3-center w3-padding-64" id="contact">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Démandez votre dévis</span>
    </div>
  
    <form class="w3-container" action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nom</label>
        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Nom" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <!-- <label>Sujet</label> -->
        <!-- <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Sujet" required> -->
        <label for="choix">Sujet :</label>
        <select id="choix" name="choix" class="w3-input w3-border w3-hover-border-black" style="width:100%;" required>
            <option value="valeur1">Valeur 1</option>
            <option value="valeur2">Valeur 2</option>
            <option value="valeur3">Valeur 3</option>
            <option value="valeur4">Valeur 4</option>
            <option value="valeur5">Valeur 5</option>
        </select>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-black">Envoyer</button>
    </form>
  
  </div>
  
</div>




  
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
            <h1>Desserts</h1>
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


