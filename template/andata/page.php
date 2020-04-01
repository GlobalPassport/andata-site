<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="container">






        <section id="contacts">
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-lg-4 ">
                        <div class="row mt-3">
                            <div class="col mt-3">
                                <h2>Контакты</h2>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col mt-3">
                                <div class="body1">
                                    ООО «Андата»<br>
                                    121205, Москва, Технопарк «Сколково»<br>
                                    Большой бульвар 42/1, офис 371<br>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="body1">
                                    <a href="tel: 88005051758"> 8 (800) 505 17 58</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"> <figure><img src="http://test2.serv/wp-content/themes/andata/assets/img/skolkovo_cont.svg" alt=""></figure></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col"><!--<button class="btn connect" type="button">Заказать обратный звонок</button>--></div>
                        </div>
<!--                        <div class="row mt-5"></div>-->
                    </div>
                    <div class="col-md-12 col-lg-1"></div>
                    <div class="col-md-12 col-lg-7 map">
                        <script type="text/javascript" charset="utf-8" async="" src="
                        https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abfe1f98ac3eae803d94f49d4890e4de2f7e79c201e452c12bfe218d2ecedecb0&amp;lang=ru_RU&amp;scroll=true">
                        </script>
                    </div>
                </div>
            </div>
        </section>








    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>