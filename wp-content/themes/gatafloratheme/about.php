<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<section class="banner-section">
    <div class="banner-logo banner-logo-about">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/about-logo.png" alt="">
    </div>
    <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/about-image.png" alt="">
    </div>
    <div class="banner-text banner-text-about">
        <div class="banner-title">
            <h2>
                Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.
            </h2>
        </div>
        <div class="banner-subtitle">
            <h3>
                Donec at tellus vel tellus efficitur<br>imperdiet. Suspendisse mollis dui turpis.
            </h3>
        </div>
    </div>
    <div class="banner-menu">
        <ul class="banner-menu-items">
        <a href="<?php echo get_page_link( get_page_by_title( "Contact" )->ID ); ?>"><li class="banner-menu-item">Contacto<span class="red-menu-item">^^</span></li></a>
            <a href="<?php echo get_page_link( get_page_by_title( "Services" )->ID ); ?>"><li class="banner-menu-item">Portafolio<span class="red-menu-item">^^</span></li></a>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><li class="banner-menu-item">Blog<span class="red-menu-item">^^</span></li></a>
        </ul>
    </div>
    <div class="banner-arrow">
        <img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/arrow.png" alt="">
    </div>
</section>
<section class="values">
    <div class="values-entry">
        Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.^^
    </div>
    <div class="values-first">
        <div class="values-number">
            01
        </div>
        <div class="values-text">
            <div class="values-text-top">
                Trabajo, trabajo y más trabajo.
            </div>
            <div class="values-text-bottom">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus vel tellus efficitur.
            </div>
        </div>
    </div>
    <div class="values-second">
        <div class="values-number">
            02
        </div>
        <div class="values-text">
            <div class="values-text-top">
                Hablamos claro, muy claro.
            </div>
            <div class="values-text-bottom">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus vel tellus efficitur.
            </div>
        </div>
    </div>
</section>
<section class="blocks">
    <div class="blocks-container">
        <div class="block">
            <div class="block-title">
                Lorem ipsum dolor<br>sit amet^^
            </div>
            <div class="block-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus vel tellus efficitur imperdiet. Suspendisse mollis dui turpis, vitae vehicula lorem venenatis sit amet.
            </div>
            <div class="block-link">
                    Sevicios
                <div class="link-arrow">
                    <img class="small-logo open" src="<?php echo get_template_directory_uri(); ?>/resources/arrow-closed.png" alt="">
                    <img class="small-logo closed" src="<?php echo get_template_directory_uri(); ?>/resources/arrow-open.png" alt="">
                </div>
            </div>
        </div>
        <div class="block">
            <div class="block-image">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/about-image2.png" alt="">
            </div>
        </div>
        <div class="block">
            <div class="block-title">
                Lorem ipsum dolor<br>sit amet^^
            </div>
            <div class="block-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus vel tellus efficitur imperdiet. Suspendisse mollis dui turpis, vitae vehicula lorem venenatis sit amet.
            </div>
        </div>
    </div>
</section>
<section class="motto">
    <div class="motto-container">
        <div class="motto-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/logo.png" alt="">
        </div>
        <div class="motto-text">
            WORK HARD <span class="red-motto">&</span> DREAM BIG
        </div>
    </div>
</section>
<?php get_footer(); ?>