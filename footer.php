                </div>
                <!-- end #main -->
            </div>
            <!-- end .main-container -->

            <!-- .footer-container -->
            <div class="footer-container clearfix">
                
                <div class="footer-widgets wrapper">
                   <?php get_sidebar('footer'); ?>
                </div>
                
                <footer class="wrapper">
                    <!-- begin copyright -->
					<?php if(of_get_option('footer_copyright') == '') { ?>
					Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved  Theme by <a href="http://gk.site5.com/t/606">Site5 WordPress Hosting</a>.
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