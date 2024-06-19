




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
  <style>
  body, html {height: 100%}
  body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
  .menu {display: none}
  .bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain");
    min-height: 90%;
  }
  .w3-bar.w3-black.w3-card{
    padding-top: 35px;
    font-size: 35px;
  }
  .w3-bar.w3-black.w3-card a{
        color:#fff;
            text-decoration:none;
            text-transform:uppercase;
            letter-spacing:2px;
            font-weight:900;
    }
    button{
      color:#fff;
            text-decoration:none;
            text-transform:uppercase;
            letter-spacing:2px;
            font-weight:900;
    }
    .w3-bar-item.w3-button{
      background-color: black;
    }
    .container.header.popote {
  
  background-image: url('https://th.bing.com/th/id/OIP.q9wDx6YABxExZ4SnKmUMNwHaFt?w=2811&h=2169&rs=1&pid=ImgDetMain');
  width: 100%; /* Largeur du conteneur */
  height: 600px; /* Hauteur du conteneur */
  background-size: cover; /* Redimensionne l'image pour couvrir tout le conteneur */
  background-position: center; /* Centre l'image de fond horizontalement et verticalement */
  margin-top: -1%;
  color: white;

}

  </style>
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
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  


<!-- search form section starts  -->

<section class="search-form">
   <form method="post" action="">
      <input type="text" name="search_box" placeholder="cherchez ici..." class="box">
      <button type="submit" name="search_btn" class="fa fa-search" ></button>
   </form>
</section>

<!-- search form section ends -->


<section class="products">

<div class="box-container">

      <?php
         if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
         $search_box = $_POST['search_box'];
         $select_products = $conn->prepare("SELECT * FROM `products` WHERE name LIKE '%{$search_box}%'");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fa fa-eye"></a>
         <button type="submit" class="fa fa-shopping-cart" name="add_to_cart"></button>
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
            echo '<p class="empty">Aucun produit disponible!</p>';
         }
      }
      ?>

   </div>

</section>




  
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
