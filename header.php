<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div style="display: none" class="preloader">
    <div class="preloader__inner">
        <img src="/wp-content/themes/glera/assets/images/logo.svg" alt="Loonie.io">
    </div>
</div>

<script>
    let getPreloader = document.getElementsByClassName('preloader');
    getPreloader[0].style.display = 'flex';
</script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'glera' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <a class="logo" href="/"><img src="/wp-content/themes/glera/assets/images/logo.svg" alt="Glera"></a>
		</div><!-- .site-branding -->
        <button class="glera__menu-toggle">
            <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 14.25C12 14.9404 11.4404 15.5 10.75 15.5H2C1.30964 15.5 0.75 14.9404 0.75 14.25V14.25C0.75 13.5596 1.30964 13 2 13H10.75C11.4404 13 12 13.5596 12 14.25V14.25ZM23.25 8C23.25 8.69036 22.6904 9.25 22 9.25H2C1.30964 9.25 0.75 8.69036 0.75 8V8C0.75 7.30964 1.30964 6.75 2 6.75H22C22.6904 6.75 23.25 7.30964 23.25 8V8ZM23.25 1.75C23.25 2.44036 22.6904 3 22 3H13.25C12.5596 3 12 2.44036 12 1.75V1.75C12 1.05964 12.5596 0.5 13.25 0.5H22C22.6904 0.5 23.25 1.05964 23.25 1.75V1.75Z" fill="#31496B"/>
            </svg>
        </button>
		<nav id="site-navigation" class="main-navigation">
            <svg class="mob-show bg-mog" width="243" height="500" viewBox="0 0 243 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="493" r="7" fill="#F2F4F2"/>
                <circle cx="235" cy="445" r="7" fill="#FBEADF"/>
                <circle cx="236" cy="7" r="7" fill="#F2F4F2"/>
                <rect y="84.9175" width="16" height="16" rx="6" transform="rotate(-29.6591 0 84.9175)" fill="#B9DCF2"/>
            </svg>
<!--			<button   aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'glera' ); ?><!--</button>-->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
            <div class="social-links">
                <a href="" class="link linkedin"></a>
                <a href="" class="link facebook"></a>
                <a href="" class="link instagram"></a>
                <a href="" class="link vk"></a>
            </div>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->
