<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <header title="Андата. Цифровой паспорт на основе нейросети и машинного обучения">
        <div class="container">
            <div class="row   ">
                <div class="col-sm-6 justify-content-center">
                    <h1>Цифровой паспорт —</h1>
                    <p>онлайн-сервис рекомендаций по улучшению маркетинговых кампаний на основании больших данных и нейронных сетей</p>
                </div>
                <div class="col-sm-6"></div>

            </div>
            <div class="row">
                <div class="col-sm-6" id="connect">
                    <a href="https://lk.andata.ru/register" target="_blank"><button class="btn connect"  type="button">подключить</button></a>
                </div>
            </div>
        </div>
    </header>

    <section id="how_it_work">
        <div class="clearfix">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 col-lg-12">
                        <h2 class="title">Как это работает</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 ">
                        <div class="items i-1">
                            <h3>1 &nbsp;<span>Трекинг</span></h3>
                            <div class="overline_regular"> Cookie + SuperCookie + Fingerprints + 10к parameters</div>
                            <div class="body1">Сбор данных с сайтов, мобильных приложений, рекламных кабинетов / crm / erp систем заказчика</div>
                        </div>
                        <div class="items i-2">
                            <h3>2 &nbsp;<span>Персонализация</span></h3>
                            <div class="overline_regular"> Machine learning</div>
                            <div class="body1">Индивидуальная настройка Цифрового паспорта посетителя сайта под бизнес</div>
                        </div>
                        <div class="items i-3">
                            <h3>3 &nbsp;<span>Подготовка данных</span></h3>
                            <div class="overline_regular"> Big Data</div>
                            <div class="body1">Нормализация и стандартизация собранных данных</div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 r">
                        <div class="items i-4">
                            <h3>4 &nbsp;<span>Дедупликация</span></h3>
                            <div class="overline_regular">Machine learning + Neural network</div>
                            <div class="body1">Выявление и удаление дублей посетителей</div>
                        </div>
                        <div class="items i-5">
                            <h3>5 &nbsp;<span>Сегментация</span></h3>
                            <div class="overline_regular">Machine learning</div>
                            <div class="body1">Построение сегментов посетителей</div>
                        </div>
                        <div class="items i-6">
                            <h3>6 &nbsp;<span>Рекомендации</span></h3>
                            <div class="overline_regular">Machine learning</div>
                            <div class="body1">Управление рекламными кампаниями на основании сегментов и рекомендаций</div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-12 col-lg-6 list-p2"><img src="<?=get_template_directory_uri()?>/assets/img/Group 190.svg" alt="alt - Как работает Цифровой паспорт Андата. Machine learning, neural network"></div>
                    <div class="col-md-12 col-lg-6  cif-p">
                        <div class="body1 "><strong>Цифровой паспорт</strong> – автоматически обновляющийся информационно-аналитический профиль посетителя сайта, состоящий из тысяч параметров
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="https://lk.andata.ru/register" target="_blank"><button class="btn connect"  type="button">подключить</button></a>
                            </div>
                            <div class="col-md-6 align-self-center"> <span class="body1 ">30 дней бесплатно</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="example_of_use" >
        <div class="container">
            <div class="clearfix">
                <div class="row title">
                    <div class="col-sm-12 text-center">
                        <h2>Пример использования цифрового паспорта</h2>
                    </div>
                </div>

                <div class="row item1">
                    <div class="col-md-12 col-lg-3">
                        <div class="text-center align-bottom">
                            <div class="group-image-1 img-1" title="Посетитель использует смартфон. Цифровой паспорт андата отслеживает его действия "></div>
                            <div class="body1">
                                Утром <strong>со смартфона</strong> <br>покупатель узнает о новом товаре и переходит по рекламе Google
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-1"></div>
                    <div class="col-md-12 col-lg-3">
                        <div class="text-center align-bottom">
                            <div class="group-image-1 img-2" title="Посетитель заходит с пк. Цифровой паспорт андата дополняет данные профиля пользователя"></div>
                            <div class="body1">
                                В обед <strong>с рабочего компьютера</strong> переходит по рекламе Yandex, чтобы изучить товар
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-1"></div>
                    <div class="col-md-12 col-lg-3">
                        <div class="text-center align-bottom">
                            <div class="group-image-1 img-3" title="Посетитель с планшета покупает товар. Нейросеть и машинное обучение фомируют цифровой паспорт андата   "></div>
                            <div class="body1">
                                Вечером дома <strong>с планшета</strong><br> сразу заходит на сайт и совершает покупку
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row item2 desk">

                    <div class="col-md-12 col-lg-6 text-center ">
                        <div class="press_bottom">
                            <div class="group-image-2 img-4" title="Маркетолог без аналитики"></div>
                            <div class="text-left">
                                <h3 class="d">Что покажут <br>системы аналитики</h3>

                                <ul class="body1 list1 ">
                                    <li><span class="pl-2">Было 3 уникальных посетителя на сайте</span></li>
                                    <li><span class="pl-2">2 посетителя перешли из рекламы</span></li>
                                    <li><span class="pl-2">1 посетитель зашел сразу на сайт и купил</span></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 text-center">
                        <div class="press_bottom">
                            <div class="group-image-2 img-5" title="Маркетолог с аналитикой цифрового паспорта"></div>
                            <div class="text-left">

                                <h3 class="d">Что покажет<br> Цифровой паспорт</h3>

                                <ul class="body1 list2">
                                    <li><span class="pl-2">Был 1 уникальный посетитель на сайте</span></li>
                                    <li><span class="pl-2">2 раза он перешел из рекламы</span></li>
                                    <li><span class="pl-2">Купил перейдя сразу на сайт</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row item2 mob">
                    <div class="col-md-12 col-lg-6 text-center ">
                        <div class="press_bottom">
                            <div class="text-left">
                                <h3 class="">Что покажут системы аналитики</h3>
                                <div class="group-image-2 img-4"></div>
                                <ul class="body1 list1 ">
                                    <li><span class="">Было 3 уникальных посетителя на сайте</span></li>
                                    <li><span class="">2 посетителя перешли из рекламы</span></li>
                                    <li><span class="">1 посетитель зашел сразу на сайт и купил</span></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 text-center">
                        <div class="press_bottom">
                            <div class="text-left">
                                <h3 class="">Что покажет Цифровой паспорт</h3>
                                <div class="group-image-2 img-5"></div>
                                <ul class="body1 list2">
                                    <li><span class="">Был 1 уникальный посетитель на сайте</span></li>
                                    <li><span class="">2 раза он перешел из рекламы</span></li>
                                    <li><span class="">Купил перейдя сразу на сайт</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="offer_to_connect" >
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-4 " > </div>
                <div class="col-md-12 col-lg-8 " >
                    <img src="<?=get_template_directory_uri()?>/assets/img/cta.svg" alt="">
                    <span class="mess desk">
                            Существующие системы аналитики<br>
                            не позволяют отследить и объединить действия пользователя с разных устройств, каналов и браузеров.
                            </span>

                    <span class="mess mob">
                            Существующие системы аналитики
                            не позволяют отследить и объединить действия пользователя с разных устройств, каналов и браузеров.
                            </span>
                    <h4>Цифровой паспорт решает эту задачу!</h4>
                    <a href="https://lk.andata.ru/register" target="_blank"><button class="btn connect"  type="button">подключить</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="cost">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 center">
                    <h2>Стоимость</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-12  col-lg-6 center ">
                    <div class="rub-image" title="Стоимость цифрового паспорта андата">
                        <h6>1 ₽ / месяц</h6>
                        <span>за каждый цифровой паспорт,<br>  который создан или дополнен</span>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row  pr-3">
                        <div class="b-r">
                            <div class="row">
                                <div class="col-sm title">
                                    <h6>Пример расчета</h6>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm">
                                    Посещаемость сайта <u>согласно вашей аналитике</u>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col ">
                                    <strong> 100 000 </strong>уникальных посетителей в месяц
                                </div>
                            </div>
                            <div class="row">
                                <div class="col  mt-4">
                                    Система <u>Andata</u> объединила и выявила
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong>  50 000</strong> уникальных цифровых паспортов
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    Итоговая цена — 50 000 ₽ за месяц
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row down">
                        <div class="b-r">
                            <div class="col-md-12 d-inline-block">
                                <a href="https://lk.andata.ru/register" target="_blank"><button class="btn connect"  type="button">подключить</button></a>
                                <span class="body1">30 дней бесплатно</span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Партнеры</h2>
                </div>
            </div>
            <div class="row ">




                <div class="owl-carousel owl-theme ">
                    <div class="item"><img src="<?=get_template_directory_uri()?>/assets/img/sber.svg" alt="Логотип сбербанк партнер Андата"></div>
                    <div class="item"><img src="<?=get_template_directory_uri()?>/assets/img/sk.svg" alt="Логотип сколково партнер Андата"></div>
                    <div class="item"><img src="<?=get_template_directory_uri()?>/assets/img/vtb.svg" alt="Логотип ВТБ партнер Андата"></div>

                </div>








            </div>
        </div>






    </section>






<?php endwhile; endif; ?>

<?php get_footer(); ?>