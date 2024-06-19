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


<main id="site-content">

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
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>
<body>

<?php include 'components/user_header.php';
 ?>
 
 <div class="w3-row-padding w3-content" style="max-width:1400px">
      <div class="w3-third" >
          <div class="w3-justify" style="margin-left:15%;">
          <br>
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
 <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Nos projet</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Projet 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>Projet 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Projet 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>Notre équipe</h2>
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
    
<!-- Nos partenaires Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>Nos parténaires</h2>
    <p>Nos parténaires partout en France :</p>
    
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
 


<section class="category">

   <h1 class="title">Type repas </h1>

   <div class="box-container">

      <a href="category.php?category=fast food" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Entrées</h3>
      </a>

      <a href="category.php?category=main dish" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Plats principaux</h3>
      </a>

      <a href="category.php?category=drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Boissons</h3>
      </a>

      <a href="category.php?category=desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a>

   </div>

</section>

<section class="category">

   <h1 class="title">Type buffet </h1>

   <div class="box-container">

      <a href="category.php?category=fast food" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>buffet 1 </h3>
      </a>

      <a href="category.php?category=main dish" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>buffet 2 </h3>
      </a>

      <a href="category.php?category=drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>buffet 3</h3>
      </a>

    

   </div>

</section>




<section class="products">

   <h1 class="title">Nos menu</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">Aucun produit ajouté pour l\'instant!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">Voir tout</a>
   </div>

</section>


<!--Adresse-->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
    
    <div class="localisation">
        <h3>Notre Adresse</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.983781024396!2d-1.8524039236890264!3d48.07195597123639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ee2a393ec13b5%3A0x5b48538d511c974b!2sMordelles%20Eglise!5e0!3m2!1sfr!2sfr!4v1713968531494!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
   
  
  
  </div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Rejoignez-nous</span></div>
        <h3>Address</h3>
        <p>Passez prendre une tasse de café ou autre.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Mordelles, Fr</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 00 00 00 00</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      </div>
      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
        <div class="w3-section">      
          <label>Name</label>
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

</main><!-- #site-content -->


