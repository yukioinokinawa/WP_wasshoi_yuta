<?php get_header(); ?>

<main class="l-main">


    <article class="p-single" <?php post_class(); ?>>
        <article class="p-single__intro">
            <h1 class="c-title--section"><?php the_title(); ?></h1>
            <p class="c-date-and-category"><?php the_category(); ?></p>
            <img class="p-card"> <?php
                                    if (has_post_thumbnail()) :
                                        the_post_thumbnail();
                                    else :
                                    ?><div class="no-thumbnail"></div><?php endif; ?>
            </img>
            <p class="c-date-and-category"><?php echo get_the_date(); ?></p>
        </article>
        <!--intro-->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

                <?php the_content(); ?>
            <?php endwhile;
        else :
            ?> <p>表示する記事がありません</p><?php
                                endif; ?>
        <?php if (is_404()) : ?>
            <?php get_template_part('component/404'); ?>
        <?php endif; ?>
    </article>
</main>

<div class="p-single__wrapper" <?php post_class(); ?>>

    <article class="p-single">
        <article class="p-single__intro">
            <h1 class="c-title--section"><?php the_title(); ?></h1>
            <p class="c-date-and-category"><?php the_category(); ?></p>
            <img> <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    else :
                    ?><div class="no-thumbnail"></div><?php endif; ?>
            </img>
            <p><?php echo get_the_date(); ?></p>
        </article>
        <!--intro-->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

                <?php the_content(); ?>
            <?php endwhile;
        else :
            ?> <p>表示する記事がありません</p><?php
                                    endif; ?>
        <?php if (is_404()) : ?>
            <?php get_template_part('component/404'); ?>
        <?php endif; ?>
    </article>
</div>
</main>



<?php get_footer(); ?>