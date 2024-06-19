<!DOCTYPE html>
<html lang="fr">
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
   <link rel="stylesheet" href="css/style.css">

</head>
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
<body>
  


<div class="w3-top">

<div class="w3-bar w3-black w3-card">
 



  <a class="w3-bar-item w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  <!-- <img src="https://th.bing.com/th?id=OIP.4dcJ_AHTJ81dikKbJ_xBtgHaGw&w=261&h=238&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="logo"> -->
  <a href="./index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Le projet</a>
  <a href="./eventandactivitybis.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Evènements et activités</a>
  <a href="./locationespacebis.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Location d'espace</a>
  <a href="./traiteurevenementiel.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Traiteur évènementiel</a>
  <a href="./caferesto.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Café - Resto</a>
  <a href="./reserver.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Réserver</a>


  <!-- <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="Café - Resto">Café - Resto<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://popotec.cluster029.hosting.ovh.net/index.php/caferesto/" class="w3-bar-item w3-button">Type de cuisine</a>
          <a href="http://popotec.cluster029.hosting.ovh.net/index.php/caferesto/" class="w3-bar-item w3-button">Les infos pratiques</a>
          <a href="http://popotec.cluster029.hosting.ovh.net/index.php/caferesto/" class="w3-bar-item w3-button">Nos fournisseurs</a>
      </div>
  </div> -->
  <?php
          $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
          $count_cart_items->execute([$user_id]);
          $total_cart_items = $count_cart_items->rowCount();
       ?>
  <a href="cart.php" class="w3-padding-large w3-hover-red w3-hide-small "><i class="fa fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
  <a href="search.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>     
  <a href="login.php" id="user-btn" class="fa fa-user w3-padding-large w3-hover-red w3-hide-small w2-right"></a>  
</div>


</div> 
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
<a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Le projet</a>
<a href="./eventandactivitybis.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Evènements et activités</a>
<a href="./locationespacebis.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Location d'espace</a>
  <a href="./traiteurevenementiel.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Traiteur évènementiel</a>
  <a href="./reserver.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Réserver</a>
  <a href="./caferesto.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Type de cuisine</a>
</div>
<!-- <div class="container header popote">

</div> -->
<div class="w3-display-middle w3-center">
  <span class="w3-text-white w3-hide-small" style="font-size:100px">popote & papote</span>
  <p><a href="./menu.php" class="w3-button w3-xxlarge w3-black">Nos menus</a></p>
  <span class="w3-tag w3-xlarge" style="margin-left: -295%;margin-top: 150px;">Ouvert de 10h  à 19h</span>

</div>



</div>
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top test" style="max-width:2000px;margin-top:46px" >
<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Le projet</a>
<a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Café - Resto</a>
<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Evènements et activités</a>
<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Location d'espaces</a>
<a href="#merch" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Traiteur évènementiel</a>
<a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
</div>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home" style="background-image: 'http://popotec.cluster029.hosting.ovh.net/wp-content/uploads/2024/04/test-scaled.jpg';">
<div class="w3-display-bottomleft w3-padding">
  <span class="w3-tag w3-xlarge">Ouvert de 10h  à 19h</span>
</div>
<div class="w3-display-middle w3-center">
  <span class="w3-text-white w3-hide-small" style="font-size:100px">popote & papote</span>
  <p><a href="./menu.php" class="w3-button w3-xxlarge w3-black">Nos menus</a></p>
</div>
</header>







</body>
</html>


