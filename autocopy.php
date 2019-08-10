<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();
        $sidebar_title = get_post_meta($post->ID, 'sidebar-title', $single = true);
        $sidebar_text = get_post_meta($post->ID, 'sidebar-text', $single = true); ?>

        <?php if ( $sidebar_title !== '' && $sidebar_text !== '' ) { ?>
            <li class="widget-container widget-light-blue custom">
                <h3 class="widget-title"><?php echo wpautop($sidebar_title, $br); ?></h3>
                <?php echo wpautop($sidebar_text, $br); ?>
            </li>
        <?php } ?>

    <?php endwhile; ?>
<?php endif; ?>