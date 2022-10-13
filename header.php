<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ブレークポイントを作れるようにする -->
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="l-header">
            <a class="c-logo--header" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src=<?php echo get_template_directory_uri().esc_url('/imgs/header-logo.jpg') ?> alt="わっしょいゆーたロゴ">
            </a>
            <button class="c-button--hamburger js-hamburger">
                <span>menuボタン</span>
            </button>
        </header>
