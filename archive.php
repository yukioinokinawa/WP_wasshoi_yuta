<?php get_header(); ?>

    <main class="l-main">
            <section class="p-history-works">
                <h1 class="c-title--page">HISTORY & WORKS</h1>

                <?php wp_nav_menu(array(
                    'theme_location'  => 'year_menu',
                    'container'       => 'nav',
                    'container_class' => '',
                    'menu_id'         => '',
                    'menu_class'      => 'c-list--history',

                )); ?>
            </section>
            
            <ul class="p-card">
                <div class="c-grid">
                    <?php 
                        if( have_posts()):
                            while( have_posts()):
                                the_post(); ?>
                            <li>
                                <article>
                                    <?php the_content(); ?>
                                    <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                                </article>
                            </li>

                        <?php endwhile; ?>
                        <?php else: ?>
                            <p>表示する投稿がありません</p>
                    <?php endif; ?>

                </div>
            </ul>
            <?php wp_pagenavi(); ?>
        </main>

<?php get_footer(); ?>