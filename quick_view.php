<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

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
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


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
  
  /* <STYLE DE CONTACT> */
    
  
  /* MENUCONTACTS AND SERVICES  */
  /*Pour la police d'écriture google font*/
  #popotes {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
  }
  .section_title {
      text-transform: uppercase;
      position: relative;
      font-size: 25px;
  }
  .section_title:before {
      position: absolute;
      left: 10px;
      bottom: 0;
      content: "";
      background-color: orange;
      width: 100%;
      height: 5px;
      border-radius: 6px;
  }
  .section_title:after {
      position: absolute;
      top: 0;
      left: -10px;
      content: "";
      background-color: orange;
      width: 100%;
      height: 5px;
      border-radius: 6px;
  }
  #popotes li span.prix {
     color: orange;
     font-weight: bold;
     margin-bottom: 10px;
  }
  #popotes li a {
      background-color: orange;
      color: #fff;
      padding: 15px 25px;
      font-size: 15px;
  }
  

  
  .localisation_contact_div {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      margin: 100px 0;
      height: 80vh;
  }

  .localisation iframe {
      width: 100%;
      border-radius: 6px;
  }
  
  .quick-view form .flex .qty{
   border:var(--border);
   padding:1rem;
   font-size: 1.8rem;
   color:var(--black);
}

 
  /*Responsive*/
  @media (max-width:682px) {
      #contact {
          height: auto;
      }
      .localisation_contact_div {
          height: auto;
          flex-direction: column;
          width: 100%;
      }
      .localisation{
          width: 100%;
          margin-bottom: 30px;
      }
      .localisation_contact_div .form_contact {
          width: 100%;
          
      }
    
     
   
   
  
     
  
  
  }
  /* FIN DE MENU, CONTACTS ET SERVICES */
  
  
  
    </style>
</head>
<body>


 
<?php include 'components/user_header.php';
 ?>
 
  <div class="w3-row-padding w3-content" style="max-width:1400px">
  
  
  <section class="quick-view">

<h1 class="title">Aperçu rapide</h1>

<?php
   $pid = $_GET['pid'];
   $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
   $select_products->execute([$pid]);
   if($select_products->rowCount() > 0){
      while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
?>
<form action="" method="post" class="box">
   <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
   <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
   <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
   <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
   <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
   <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
   <div class="name"><?= $fetch_products['name']; ?></div>
   <div class="flex">
      <div class="price"><?= $fetch_products['price']; ?><span>€</span></div>
      <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
   </div>
   <button type="submit" name="add_to_cart" class="cart-btn">Ajouter au panier</button>
</form>
<?php
      }
   }else{
      echo '<p class="empty">Aucun produit disponible pour l\'instant!</p>';
   }
?>

</section>






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
