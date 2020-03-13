<?php
/* 
Template Name: Archives
*/ ?>
<?php get_header(); ?>

<section class="banner-section">
    <div class="banner-image banner-template-image">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/blog.png" alt="">
    </div>
    <div class="banner-text banner-text-about blog-title">
        <div class="banner-title">
            <h1>Blog</h1>
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
<section class="logo">
    <div class="contact-logo">
        <div class="motto-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/logo.png" alt="">
        </div>
    </div>
</section>
<section class="blog-posts">
    <div class="blog-posts-container">
        <?php $loop = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => 'Blog' ) ); ?>
        <?php $i=0; ?>
        <?php $j=0; $default = "post-block-bigger" ; $other = ''; $swap = ''?>
        <?php if ($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
        <?php $i++; ?>
        <?php if ($i<=4): ?>
        <a href="<?php the_permalink() ?>" class="post-block <?php echo ''.($i % 2 == 0 ? $default : ''); ?>">
        <?php else: ?>
        <?php $j++; ?>
        <?php if($j<3 || $j==4): ?>         
        <a href="<?php the_permalink() ?>" class="post-block <?php echo $default ?> <?php echo ''.($j % 2 != 0 ? 'post-up' : ''); ?>">
            <?php if($j==4): ?>
                <?php $j = 0; ?>
                <?php $swap = $default; ?>
                <?php $default = $other; ?>
                <?php $other = $swap; ?>
            <?php endif; ?>
        <?php else: ?>
        <a href="<?php the_permalink() ?>" class="post-block <?php echo $other ?> <?php echo ''.($j % 2 != 0 ? 'post-up' : ''); ?> <?php echo ''.($i == 11 ? 'post-up-double' : ''); ?>">
        <?php endif; ?>
        <?php endif; ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="post-image">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="black-block">
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
            </div>
        </a>
        <?php endwhile; endif ?>
    </div>
</section>
<?php get_footer(); ?>