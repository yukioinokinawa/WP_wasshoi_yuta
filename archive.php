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
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <img src="<?php echo get_template_directory_uri( ). '/imgs/test-img.jpg' ?>" alt="投稿サムネイル">
                            <p>
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                                参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト参考テキスト
                            </p>
                            <a href="#" class="c-button--go-single c-shadow">詳細ページへ</a>
                        </article>
                    </li>
                </div>
            </ul>
        </main>

<?php get_footer(); ?>