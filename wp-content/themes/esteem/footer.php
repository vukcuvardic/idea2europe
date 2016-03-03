<?php
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
</div><!--#main -->
<?php do_action('esteem_before_footer'); ?>
<footer id="colophon" class="clearfix">
    <?php get_sidebar('footer'); ?>
    <div id="site-generator" class="inner-wrap">
        <div class="disclamer">
            <p>This project has been funded with support from the European Commission.<br>
                This publication [communication] reflects the views only of the author,<br>
                and the Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
        </div>
        <?php do_action('esteem_footer_copyright'); ?>
    </div><!-- #site-generator -->
</footer>
<a href="#masthead" id="scroll-up"><i class="icon-angle-up"></i></a>
</div>
<?php wp_footer(); ?>
</body>
</html>