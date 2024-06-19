<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect username or password!';
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



<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->


</head>
<body>
<!-- Navbar (sit on top) -->
<!-- Navbar -->
<?php include 'components/simple_header.php';
 ?>
<!-- <div class="container header popote">
  
  </div> -->

 


 <br>
 <br>
 <br>
 <br> 
 <br>


<!-- Header with image -->


  <div class="w3-row-padding w3-content" style="max-width:1400px">
  
  <section class="form-container">

<form action="" method="post">
   <h3>Renseignez vos informations de connexion</h3>
   <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="submit" value="Se connecter " name="submit" class="btn">
   <p>Vous n'avez pas de compte? <a href="register.php">Inscrivez-vous maintenant</a></p>
</form>

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
