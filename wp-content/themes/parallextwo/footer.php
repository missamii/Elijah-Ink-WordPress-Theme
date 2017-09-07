<!-- wrapper -->
  <a name="Contact"></a> <!-- page jump -->



  <?php wp_footer(); ?>


  <!-- Contact Section -->

  <div class="contact">
    <p class="w3-center">Fans? Need me for a show? General questions all, welcomed!</p>
    <form action="/action_page.php" target="_blank">
     <input class="w3-input" type="text" placeholder="Name" required name="Name">
     <input class="w3-input w3-section" type="text" placeholder="Email" required name="Email">
     <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
     <input class="w3-input w3-section" type="text" placeholder="Comment" required name="Comment">
     <button class="w3-button w3-black w3-section w3-hover-yellow" type="submit">
       <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
   <!-- Social Media Section -->
  <div class="social-media">
    <div class="w3-center w3-opacity w3-light-grey w3-xlarge"></a>
      <a href="https://www.facebook.com/profile.php?id=100010676137318"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/_kylechristian/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://twitter.com/KyleChristian_M"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    </div>
  </div>
  <!-- Credits Section -->
  <div class="w3-light-grey">
    <p class="w3-small w3-center">
      &copy; <?php echo date('Y') ?> <a href="<?php bloginfo('url') ?>">
      <?php bloginfo('name') ?> </a> | Powered by <a href="http://wordpress.org">WordPress</a> | Theme by <a href="http://tiffany-lo.net" title="Tiffany Lo Designs: wordpress, web, and mobile apps">Tiffany Lo Designs</a> | Images from <a href="https://unsplash.com/">Unsplashed</a>
    </p>
  </div>

</body>
</html>
