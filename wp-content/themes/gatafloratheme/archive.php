<?php get_header(); ?>

<section class="banner-section">
    <div class="banner-image banner-template-image">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/blog.png" alt="">
    </div>
    <div class="banner-text banner-text-about blog-title">
        <div class="banner-title">
            <h1><?php single_cat_title(); ?></h1>
        </div>
    </div>
    <div class="banner-menu">
        <ul class="banner-menu-items">
            <li class="banner-menu-item">Contacto<span class="red-menu-item">^^</span></li>
            <li class="banner-menu-item">Portafolio<span class="red-menu-item">^^</span></li>
            <li class="banner-menu-item">Blog<span class="red-menu-item">^^</span></li>
        </ul>
    </div>
    <div class="banner-arrow">
        <img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/arrow.png" alt="">
    </div>
</section>
<section class="logo">
    <div class="contact-logo">
        <div class="motto-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/logo.png" alt="">
        </div>
    </div>
</section>
<section class="blog-posts">
    <div class="blog-posts-container">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="post-block">
            <?php if(has_post_thumbnail()): ?>
                <div class="post-image">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
            <?php endif; ?>
            <a class="black-block"  href="<?php the_permalink() ?>">
                <div class="post-category">Diseño</div>
                <div class="post-title"><?php the_title() ?></div>
                <div class="post-info">
                    <div class="post-author">
                        By Íñigo de Torres
                    </div>
                    <div class="post-line"></div>
                    <div class="post-date">
                        19 Agosto 2020
                    </div>
                </div>
                <div class="post-excerpt">
                    <?php echo get_excerpt(); ?>
                </div>
            </a>
        </div>
        <?php endwhile; endif ?>
    </div>
</section>
<?php get_footer(); ?>