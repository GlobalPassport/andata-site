<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php the_content(); ?>

    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Партнеры</h2>
                </div>
            </div>
            <div class="row ">

                <div class="owl-carousel owl-theme ">
                    <div class="item"><img src="/wp-content/themes/andata/assets/img/sber.svg" alt="Логотип сбербанк партнер Андата"></div>
                    <div class="item"><img src="/wp-content/themes/andata/assets/img/sk.svg" alt="Логотип сколково партнер Андата"></div>
                    <div class="item"><img src="/wp-content/themes/andata/assets/img/vtb.svg" alt="Логотип ВТБ партнер Андата"></div>
                    <div class="item"><img src="/wp-content/themes/andata/assets/img/EMC.svg" alt="Логотип EMC партнер Андата"></div>
<!--                    <div class="item"><img src="/wp-content/themes/andata/assets/img/Keyauto.svg" alt="Логотип Keyauto партнер Андата"></div>-->
                    <div class="item"><img src="/wp-content/themes/andata/assets/img/softline.svg" alt="Логотип Softline партнер Андата"></div>

                </div>


            </div>
        </div>


    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>