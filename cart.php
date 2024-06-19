<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:index.php');
};

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
   $message[] = 'cart item deleted!';
}

if(isset($_POST['delete_all'])){
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   // header('location:cart.php');
   $message[] = 'deleted all from cart!';
}

if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
   $update_qty->execute([$qty, $cart_id]);
   $message[] = 'cart quantity updated';
}

$grand_total = 0;

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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->

<
 
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

 
<?php include 'components/simple_header.php';
 ?>
<!-- <div class="container header popote">
  
  </div> -->

 


 <br>
 <br>
 <br>
 <br> 

  <div class="w3-row-padding w3-content" style="max-width:1400px">
  
 
  

<!-- shopping cart section starts  -->

<section class="products">

   <h1 class="title">Votre panier   </h1>

   <div class="box-container">

      <?php
         $grand_total = 0;
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('Supprimer cet élément?');"></button>
         <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
         <div class="name"><?= $fetch_cart['name']; ?></div>
         <div class="flex">
            <div class="price"><?= $fetch_cart['price']; ?><span>€</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="<?= $fetch_cart['quantity']; ?>" maxlength="2">
            <button type="submit" class="fas fa-edit" name="update_qty"></button>
         </div>
         <div class="sub-total"> sous total : <span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>€/-</span> </div>
      </form>
      <?php
               $grand_total += $sub_total;
            }
         }else{
            echo '<p class="empty">votre panier est vide!</p>';
         }
      ?>

   </div>

   <div class="cart-total">
      <p>total : <span><?= $grand_total; ?>€</span></p>
      <button class="btn"><a style="text-decoration:none" href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceder à la vérification</a></button>
   </div>

   <div class="more-btn">
      <form action="" method="post">
         <button type="submit" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>" name="delete_all" onclick="return confirm('delete all from cart?');">Vider le panier</button>
      </form>
      <button class="btn"><a href="menu.php" style="text-decoration:none">Continuer mes achats</a></button>
   </div>

</section>

<!-- shopping cart section ends -->

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
