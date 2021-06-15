<?php
  include_once "header.php";
?>

  <link rel="stylesheet" href="styles/grid.css"/>

   <main>
     <div class="wrapper-main">

       <?php
        if (isset($_SESSION['useruid'])) {
          echo '<section class="section-default"><p class="login-status">Dine forslag</p></section>';
       }
        else {
  
        }
       ?>

       <div class="grid">
         <div class="bil1"> <img src="img/bil1.png" style="width: 257px; height: 200px;"> <p>Toyata mini</p></div>
          <div class="bil2">Bil 2</div>
          <div class="bil3">Bil 3</div>
          <div class="bil4">Bil 4</div>
          <div class="bil5">Bil 5</div>
          <div class="bil6">Bil 6</div>
          <div class="bil7">Bil 7</div>
          <div class="bil8">Bil 8</div>


      </div>

      </div>
     </main>
<?php
   include_once "footer.php";
?>
