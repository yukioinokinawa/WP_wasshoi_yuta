<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ブレークポイントを作れるようにする -->
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="l-header">
            <a class="c-logo--header" href="#"><img src=<?php echo get_template_directory_uri().'/imgs/header-logo.jpg' ?> alt="わっしょいゆーたロゴ"></a>
            <button class="c-button--hamburger js-hamburger">
                <span>menuボタン</span>
            </button>
        </header>
        <main class="l-main">
            <div class="p-first-view">
                <img src=<?php echo get_template_directory_uri().esc_url('/imgs/top-page-img.jpg"'); ?> alt="メイン写真">
                <div class="c-top-title">
                    <h1>わっしょいゆ〜た</h1>
                    <p>OFFICIAL WEB SITE</p>
                </div>
            </div>
        </main>
        <footer class="l-footer">
            <p>©️わっしょいゆ〜た / 2022</p>
        </footer>
        <aside class="l-sidebar p-nav--sidebar">
            <ul class="p-nav--sidebar__g-menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">HISTORY & WORKS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>

            <ul class="p-nav--sidebar__sns">
                <li><a href="#"><img src="/imgs/facebook-icon.png" alt="facebook"></a></li>
                <li><a href="#"><img src="/imgs/twitter-icon.png" alt="twitter"></a></li>
                <li><a href="#"><img src="/imgs/instagram-icon.png" alt="Instagram"></a></li>
            </ul>
    
        </aside>
        <div class="c-layer--sidebar"></div>
        <?php wp_footer(); ?>
    </body>

</html>