<?php get_header(); ?>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Our Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- News Area Start -->
    <section class="akame-news-area section-padding-0-80">
        <div class="container">
            <div class="row mx-sm-n4 akame-blog-masonary">

                <?php
                    if(have_posts()):
                        while (have_posts()):the_post();

                    ?>

                            <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title"><?php echo get_the_title(); ?></a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> <?php echo get_the_date('F j, Y'); ?></a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                        </div>
                    </div>
                </div>
                <?php
                  endwhile;
                ?>


                <!-- Single Blog Item -->

            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'Previous', 'textdomain' ),
                                'next_text' => __( 'Next', 'textdomain' ),
                            ) );
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
                    <?php
                        else:
                            get_template_part('template-parts/page/content','none');
                        endif;
                            wp_reset_postdata();
                     ?>
        </div>
    </section>
    <!-- News Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>

    <!-- Footer Area Start -->
<?php get_footer(); ?>