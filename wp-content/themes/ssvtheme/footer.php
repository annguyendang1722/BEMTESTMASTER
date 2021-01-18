      <footer class="footer">
        <div class="container">
          <?php 
            $sitewide = get_field('sitewide', 'option');
            $ft = $sitewide['footer_top'];
            $fb = $sitewide['footer_bottom'];
            $fbl = $fb['footer_bottom_left'];
            $fbr = $fb['footer_bottom_right'];
            $fb_style = $fb['footer_bottom_style'];
          ?>
          <div class="footer__inner <?php echo $fb_style ? $fb_style['0'] : "";  ?>">
            <?php if($fbl): ?>
              <div class="footer__item"><?php echo $fbl; ?></div>
            <?php endif;?>
            <?php if($fbr): ?>
              <div class="footer__item"><?php echo $fbr; ?></div>
            <?php endif;?>
          </div>
        </div>
      </footer>
    </div>
    <!-- /wrapper -->

    <?php wp_footer(); ?>
  </body>
</html>
