<?php get_header(); ?>
<section class="banner-template page-title">
    <div class="banner-template-image">

    </div>
    <div class="banner-text-template">
        <div class="banner-template-main-title">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="banner-template-logo-container">
        <div class="banner-template-instagram">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-ins.png" alt="">
        </div>
        <div class="banner-template-twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-twitter.png" alt="">
        </div>
        <div class="banner-template-linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-ln.png" alt="">
        </div>
    </div>
</section>
<section class="page-container">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif ?>
</section>
<?php get_footer(); ?>