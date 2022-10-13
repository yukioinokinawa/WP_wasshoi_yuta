<aside class="l-sidebar p-nav--sidebar">

    <?php wp_nav_menu(array(
        'theme_location'  => 'page_menu',
        'container'       => 'false',
        'menu_id'         => '',
        'menu_class'      => 'p-nav--sidebar__g-menu',

    )); ?>


    <ul class="p-nav--sidebar__sns">
        <li><a href="https://www.facebook.com/wasshoiyuta"><img src=<?php echo get_template_directory_uri().esc_url('/imgs/facebook-icon.png') ?> alt="facebook"></a></li>
        <li><a href="https://twitter.com/WasshoiYuta"><img src=<?php echo get_template_directory_uri().esc_url('/imgs/twitter-icon.png') ?> alt="twitter"></a></li>
        <li><a href="https://www.instagram.com/wasshoiyuta_info/?hl=bg"><img src=<?php echo get_template_directory_uri().esc_url('/imgs/instagram-icon.png') ?> alt="Instagram"></a></li>
    </ul>

</aside>
<div class="c-layer--sidebar"></div>
