<?php
  include_once 'header.php';
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php if (isset($_SESSION['useruid'])) : ?>

            <p class="login-status">Du er logget på!!!!</p>
            <img src="img/Skitsebil.png" style="width: 100%; height: 100%;">

          <?php else : ?>

            <p class="login-status">Du er ikke logget på!</p>

           <?php endif; ?>
       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
