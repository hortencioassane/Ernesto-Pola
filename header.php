<header class="header">

   <div class="flex">


   <img class="erlogo" src="icons/log.jpg">
      <a href="#" class="logo">ERNESTO POLA</a>





      <nav class="navbar">
         <a href="ernesto.php">HOME</a>
         <a href="login_form.php">UPLOAD</a>
         <a href="products.php">PAINTINGS</a>
         <a href="index.php">GET IN TOUCH</a>
         
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">CART <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>