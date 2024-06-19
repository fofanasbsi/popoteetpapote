<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:index.php');
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);

   if(!empty($name)){
      $update_name = $conn->prepare("UPDATE `users` SET name = ? WHERE id = ?");
      $update_name->execute([$name, $user_id]);
   }

   if(!empty($email)){
      $select_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
      $select_email->execute([$email]);
      if($select_email->rowCount() > 0){
         $message[] = 'email déjà pris!';
      }else{
         $update_email = $conn->prepare("UPDATE `users` SET email = ? WHERE id = ?");
         $update_email->execute([$email, $user_id]);
      }
   }

   if(!empty($number)){
      $select_number = $conn->prepare("SELECT * FROM `users` WHERE number = ?");
      $select_number->execute([$number]);
      if($select_number->rowCount() > 0){
         $message[] = 'Numéro déjà pris!';
      }else{
         $update_number = $conn->prepare("UPDATE `users` SET number = ? WHERE id = ?");
         $update_number->execute([$number, $user_id]);
      }
   }
   
   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $select_prev_pass = $conn->prepare("SELECT password FROM `users` WHERE id = ?");
   $select_prev_pass->execute([$user_id]);
   $fetch_prev_pass = $select_prev_pass->fetch(PDO::FETCH_ASSOC);
   $prev_pass = $fetch_prev_pass['password'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = sha1($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if($old_pass != $empty_pass){
      if($old_pass != $prev_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         if($new_pass != $empty_pass){
            $update_pass = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
            $update_pass->execute([$confirm_pass, $user_id]);
            $message[] = 'password updated successfully!';
         }else{
            $message[] = 'please enter a new password!';
         }
      }
   }  

}

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

  <?php include 'components/user_header.php';
 ?>
<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  

<section class="form-container update-form">

   <form action="" method="post">
      <h3>Mettre à jour votre profil</h3>
      <input 
            type="text" name="name" placeholder="<?php
            if(empty($fetch_profile['name'])) {
               echo "Renseignez nom";
            } else {
               echo $fetch_profile['name'];
            } ?>" class="box" maxlength="50">

      <input type="email" name="email" placeholder="<?php
         if(empty($fetch_profile['email'])) {
            echo "Renseignez email";
         } else {
            echo $fetch_profile['email'];
         }
         ?>" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">

      <input type="number" name="number" placeholder="<?php
         if(empty($fetch_profile['number'])) {
            echo "Renseignez numéro";
         } else {
            echo $fetch_profile['number'];
         }
         ?>" class="box" min="0" max="9999999999" maxlength="10">
      <input type="password" name="old_pass" placeholder="Entrez votre ancien mot de passe" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="Entrez votre nouveau mot de passe" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="confirm_pass" placeholder="confirmez  votre nouveau mot de passe " class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" name="submit" class="btn">
   </form>

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
