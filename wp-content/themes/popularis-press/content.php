<article class="blog-article <?php echo is_active_sidebar('sidebar-1') ? 'col-md-6' : 'col-md-4' ?>">
    <div <?php post_class(); ?>>                    
        <div class="post-item row">
            <div class="news-thumb col-md-12">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('popularis-img'); ?>
                </a>
            </div>
            <?php if (has_post_thumbnail()) { ?>
                <div class="news-text-wrap col-md-12">
                <?php } else { ?>
                    <div class="news-text-wrap col-md-12">
                    <?php } ?>
                    <?php popularis_entry_footer('cats') ?>  
                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                    <?php //popularis_author_meta(); ?>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div><!-- .post-excerpt -->
                    <span class="posted-date">
                        <?php echo esc_html(get_the_date()); ?>
                    </span> 
                </div><!-- .news-text-wrap -->

            </div><!-- .post-item -->
        </div>
</article>
