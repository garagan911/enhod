<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glera
 */

?>

	<footer id="colophon" class="site-footer text-center position-relative">
		<div class="site-info container">
            <a href="/"><img src="/wp-content/themes/glera/assets/images/footer/logo-footer.svg" alt="Glera"></a>
            <nav class="nav">
                <ul class="site-footer__links ">
                    <li class="position-relative"><a class="site-footer__link" href="">Конфиденциальность</a></li>
                    <li class="position-relative"><a class="site-footer__link" href="">Контакты</a></li>
                    <li class="position-relative"><a class="site-footer__link" href="">Поддержка</a></li>
                </ul>
            </nav>
            <div class="social-links site-footer__social-links">
                <a href="" class="link linkedin"></a>
                <a href="" class="link facebook"></a>
                <a href="" class="link instagram"></a>
                <a href="" class="link vk"></a>
            </div>
            <div class="site-footer__copyright">©<?php echo date('Y'); ?>  GleraGames</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
