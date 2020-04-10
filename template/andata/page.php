<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>


        <?php// the_content(); ?>

    <section id="about_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-left" >
                    <h1>О нас</h1>
                    <div class="body1">
                        ООО «Андата» — это компания специализирующаяся на цифровой трансформации бизнеса.<br>
                        Переводим все процессы предприятия в цифровые, оптимизируя и систематизируя реальные
                        рабочие процессы с учетом самых современных подходов и мировых технологий.
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 center" >
                    <img src="https://andata.ru/wp-content/uploads/2020/04/photo.svg" alt="">
                    <div class="sub_title ">
                        «Уже 12 лет мы успешно реализуем каждый проект,
                        за который беремся»
                    </div>

                    <div class="body1 mt-3">
                        Алексей Бирюков
                        Директор ООО «Андата»
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="about_body" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="mess">
                        <b>Демо-день акселератора Сбербанка и 500 Startups.</b><br>
                        Выступление Алексея Бирюкова по технологии «Цифровой паспорт»
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-3 ">
                    <center>  <iframe width="" height="" src="https://www.youtube.com/embed/Ry4se6tdejg" frameborder="0"
                                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe></center>
                </div>
            </div>
        </div>
    </section>
    <section id="about_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 center">
                    <h2>Достижения</h2>
                </div>
            </div>
            <div class="row gallery owl-carousel owl-theme">

                <div class="item">

                        <div class="row">
                            <div class="col-6  thumb">
                                <a class="thumbnail" href="#" data-image-id="sert1"
                                   data-toggle="modal"
                                   data-title="Победитель 500 startups Сбербанк"
                                   data-caption="cert1"
                                   data-image="https://andata.ru/wp-content/uploads/2020/04/cert1_big.png"
                                   data-target="#image-gallery">
                                    <img class="img-responsive" src="https://andata.ru/wp-content/uploads/2020/04/cert1.png" alt="Another alt text">
                                </a>
                            </div>



                            <div class="col-6 ">
                                <div class="div body1 date">
                                    12/12/19
                                </div>
                                <div class="body1 text">
                                    Победитель
                                    500 startups
                                    Сбербанк
                                </div>
                            </div>
                        </div>



                </div>


                <div class="item">

                        <div class="row">
                            <div class="col-6  thumb">
                                <a class="thumbnail" href="#" data-image-id="sert2"
                                   data-toggle="modal"
                                   data-title="ЦКП ООО Технопарк «Сколково»"
                                   data-caption="cert2"
                                   data-image="https://andata.ru/wp-content/uploads/2020/04/sert3_big.png"
                                   data-target="#image-gallery">
                                    <img class="img-responsive" src="https://andata.ru/wp-content/uploads/2020/04/cert2.png" alt="Another alt text">
                                </a>
                            </div>

                            <div class="col-6 ">
                                <div class="div body1 date">
                                    16/08/19
                                </div>
                                <div class="body1 text">
                                    ЦКП ООО Технопарк «Сколково»
                                </div>
                            </div>
                        </div>

                    </div>
                <div class="item">

                        <div class="row">
                            <div class="col-6 thumb">
                                <a class="thumbnail" href="#" data-image-id="sert3"
                                   data-toggle="modal"
                                   data-title="Патент на собственную технологию"
                                   data-caption="cert3"
                                   data-image="https://andata.ru/wp-content/uploads/2020/04/cert2_big.png"
                                   data-target="#image-gallery">
                                    <img class="img-responsive" src="https://andata.ru/wp-content/uploads/2020/04/sert3.png" alt="Another alt text">
                                </a>
                            </div>

                            <div class="col-6 ">
                                <div class="div body1 date">
                                    09/07/19
                                </div>
                                <div class="body1 text">
                                    Патент на
                                    собственную
                                    технологию
                                </div>
                            </div>
                        </div>

                    </div>


            </div>

            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-md-1 ">
                                <button type="button" class="btn btn-primary " id="show-previous-image"> < </button>
                            </div>
                            <div class="col-md-7 " >
                                <h6 class="modal-title" id="image-gallery-title"></h6>
                            </div>
                            <div class="col-md-1 ">
                                <button type="button" id="show-next-image" class="btn btn btn-primary"> > </button>
                            </div>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive" src="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>



<?php endwhile; endif; ?>
<?php get_footer(); ?>