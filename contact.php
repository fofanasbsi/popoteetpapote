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


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

#contact {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    padding: 0 12%;
    
}
.localisation_contact_div {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    margin: 100px 0;
    height: 80vh;
}
.localisation {
    width: 49%;
    padding: 15px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
.localisation iframe {
    width: 100%;
    border-radius: 6px;
}

.localisation_contact_div .form_contact {
    width: 49%;
    height: 100%;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    padding: 15px;
    border-radius: 6px;
}
.localisation_contact_div h3 {
    margin-bottom: 10px;
    font-size: 18px;
}
.localisation_contact_div .form_contact form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 100%;
}
.form_contact form input , textarea {
    border: 1px solid #ccc;
    width: 100%;
    margin-bottom: 15px;
    padding: 5px;
    outline: 0;
    border-radius: 6px;
    font-size: 15px;
    resize: none;
}
.form_contact form input[type="submit"]{
    margin-bottom: 0;
    background-color: orange;
    color: #fff;
    border: 0;
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
<!-- Navbar (sit on top) -->
<!-- Navbar -->







  


<?php include 'components/user_header.php';
 ?>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  


  <!--CONTENT-->
  <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

   
   
    
   
  
    <!-- Contact -->
  
    <section id="contact">
        <h1 class="section_title">Contactez nous</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.983781024396!2d-1.8524039236890264!3d48.07195597123639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ee2a393ec13b5%3A0x5b48538d511c974b!2sMordelles%20Eglise!5e0!3m2!1sfr!2sfr!4v1713968531494!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
    
            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
    
  
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
  </main>