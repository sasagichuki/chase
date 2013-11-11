                </div>
                <!-- end #main -->
            </div>
            <!-- end .main-container -->

            <div class="newsletter">
                <form class="subscribe-form" method="POST">
                    <input type="text" name="email" placeholder="email" />
                    <a class="mail-icon" href="#"></a>
                    <span class="instructions">Enter your email to subscribe</span>
                </form>
                
            </div>

            <!-- .footer-container -->
            <div class="footer-container clearfix">
                
                <div class="footer-widgets wrapper">
                   <?php get_sidebar('footer'); ?>
                </div>
                
                <footer class="wrapper">
                    <!-- begin copyright -->
					<?php if(of_get_option('footer_copyright') == '') { ?>
					Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved</a>.
					<?php } else { ?>
					<?php echo of_get_option('footer_copyright')  ?>
					<?php } ?>
					<!-- end copyright -->

					| Created by <a href="http://sprout.co.ke">Sprout Digital</a>
                    
                </footer>
            </div>
            <!-- end .footer-container -->

        </div>
        <!-- end #page -->

	<?php wp_footer(); ?>

	</body>
</html>