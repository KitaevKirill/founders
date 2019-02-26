@extends('posts.layouts.post')

@section('content')
    <div class="slider-container rev_slider_wrapper bg-color-light " style="height: 100vh;">

        <div class="container-fluid mob-display-none ">
            <div class="col-lg-12 img-post_top">
                <a href="">
                    <img src="img/test/img_blog4.png" class=" img-thumbnail img-thumbnail-no-borders rounded-0 " alt=""/>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-10 text-left text-top-post p-0">
                <h1 class="font-weight-bold  h1-display">@lang('first.leader_work')</h1>
                <p class=" text-muted h2-display">Как не погрязнуть в текучке и перестать выполнять работу самому.</p>
            </div>
        </div>

        <div class="container only-mob mt-9	">

            <a class="tp-caption slider-scroll-button slider-scroll-button-dark d-flex align-items-end" data-hash
               data-hash-offset="80"
               href="#main"
               data-x="center"
               data-y="bottom"
               data-voffset="['30','30','30','30']"
               data-start="1600"
               data-transform_in="y:[100%];s:500;"
               data-transform_out="y:[100%];opacity:0;s:500;"
               data-mask_in="x:0px;y:0px;"
               style="z-index: 5;">
            </a>

        </div>

    </div>


    <div class="container ">

        <!-- <div class="container mb-5 " >
                <div class="row">

                    <div class="post-image col-lg-7">
                        <a href="">
                            <img src="img/test/img1470x980.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </a>
                    </div>

                    <div class="col-lg-5">
                            <h1 class="font-weight-bold">Источник жизни<strong class="font-weight-extra-bold"></strong></h1>
                            <p class="text-4 mb-5 ">Как основателю вернуть огонь в глазах и возродить желание творить и создавать</p>
                    </div>

                    <div class="col-md-12 align-self-center order-1">

                                        <ul class="breadcrumb d-block text-center">
                                            <li><a href="#">Home</a></li>
                                            <li class="active">Blog</li>
                                        </ul>
                                    </div>
                </div>
            </div> -->

        <!-- <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

                    <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">
                        <div>
                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                <img src="img/projects/project-short.jpg" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                <img src="img/projects/project-short-2.jpg" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                <img src="img/projects/project-short-3.jpg" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
        <div class="row mb-5">
            <div class="col-md-9 mb-md-0">

                <p class="text-5"><span class="d-caps">Р</span>абота руководителя — это то, что он делает, чтобы добиться выполнения работы силами подчинённых. То, что он делает лично сам, не является работой руководителя. Это работа рядового сотрудника. Руководитель заставляет команду производить.</p>
                <p class="text-5">В успешной компании Вы практически никогда не увидите высших руководителей, сидящих в своём кабинете. Вся их работа состоит в постоянной инспекции мест работы сотрудников, наблюдения за производственными показателями, прояснения ситуации, вмешательства, быстрой коррекции ситуации ещё до того, как она стала становиться опасной. Не СТАЛА опасной, а СТАЛА СТАНОВИТЬСЯ. Это несложно увидеть, если Вы знаете, как работает производство, и как взаимосвязаны его части. Например, если упало качество маркетинга, то скоро упадут продажи; если не найдена замена уволенному главному бухгалтеру, будет завал в области бухгалтерии.</p>
                <blockquote class="blockquote-primary m-5">Генеральный директор состоит в постоянном надзоре за выполнением работы в каждом подведомственном отделе. Если он делает работу сам, значит он уже погряз в текучке.</blockquote>
                <p class="text-5">Поэтому работа руководителя такого высокого уровня как Генеральный директор состоит в постоянном надзоре за выполнением работы в каждом подведомственном отделе. Если он делает работу сам, значит он уже погряз в текучке. Значит, сегодня он ослабит надзор за другим отделом, а завтра и там возникнет ситуация, требующая его вмешательства. И вот через некоторое время руководитель «пашет», а сотрудники разводят руками и стоят в сторонке. Ждут, когда шеф выправит ситуацию. Они уже не работники. Они зрители.</p>

                <p class="text-5">У простого рабочего или механика есть инструменты, без которых они не выполнят работу. У руководителя есть свои инструменты.</p>
                <p class="text-5"><span class="font-weight-extra-bold d-spacing">Например, система координаций и планирования.</span><br> Это конкретный инструмент. Буквально сегодня я застала ситуацию, когда руководитель вводит в замешательство других сотрудников из-за неприменения регулярных координаций и отсутствия собственного плана работы. Что конкретно произошло: он не написал свой план работы и не принял планы работы своих подчиненных, он не был на координации, которая еженедельно должна проходить. Из-за отсутствия этих вещей он, придя на работу, начал отвлекать сотрудников вопросами, он не понимает, куда идет и что ему делать, он создает видимость работы. Скажите, а как часто Вы наблюдаете такую ситуацию, что у Вашего руководителя есть план выполнения текущей работы, но не организации процессов и команды на достижение поставленных целей? Я Вам могу сказать, что по моим наблюдениям, из моего опыта общения более чем с 300 руководителями разных компаний, большинство "руководителей" не только не имеют такой план, они не знают, кто такой Руководитель. Все их планы направлены на выполнение текущей работы, а не на реализацию стратегических целей компании.</p>
                <blockquote class="blockquote-primary m-5">Проекты могут меняться в зависимости от ситуации. Но не меняйте их из-за того, что Вы не смогли добиться исполнения.</blockquote>
                <p class="text-5"><span class="font-weight-extra-bold d-spacing">Важной (если не основной) задачей руководителя является проталкивать выполнение задач и проектов.</span><br> «Проталкивать» - это подходящее слово. Сотрудники бывают инертны, непонятливы, медлительны, неисполнительны. Поэтому запланированные действия надо действительно проталкивать, добиваясь исполнения. Если Вы не добьётесь исполнения чего-то простого, то, конечно, более сложная задача вообще не будет выполнена. Конечно, задачи, переставшие быть актуальными, проталкивать не надо. Проекты могут меняться в зависимости от ситуации. Но не меняйте их из-за того, что Вы не смогли добиться исполнения. Исполнение Ваших приказов должно стать нормой жизни. Тогда Вы сможете действительно управлять. Было бы глупо отдать приказ «право руля» и прокладывать дальше маршрут, не убедившись в выполнении приказа. Можно не добраться до суши и остаться посреди моря без запасов еды и питья. Но и компания, поступая подобным образом, может докатиться до такого состояния, когда нечем будет выплатить зарплату и платежи коммунальным службам.</p>
                <p class="text-5">Вы, как руководитель, должны быть образцом организованности для подчинённого. Для этого Вам необходимо постоянное обучение, освоение навыков руководителя. Добивайтесь того же от подчинённых — большего понимания своей работы и совершенствования навыков.</p>
                <p class="text-5">
                    Ваши собственные умонастроения, Ваши глубоко спрятанные в Вас идеи будут влиять на Ваши результаты. Например, идея у продавца о сезонности продаж блокирует его работу по окончании сезона. И является удачным оправданием отсутствия продукта.</p>

                <div class="col-md-3 only-mob">

                    <!-- <h3 class="font-weight-bold pt-4 mb-2">Tags</h3>
                    <div class="mb-3 pb-1">
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">design</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">brands</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">video</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">business</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">travel</span></a>
                    </div> -->

                    <a href="/KristinaDavidova">
                        <img src="img/test/noname.png" alt="" width="200" >
                        <p class=" p-autor mt-3">Кристина Давыдова<br><span class="p-position font-weight-normal">Президент</span></p>
                    </a>


                    <!-- <h3 class="font-weight-bold pt-4">Фото в инстаграм</h3>
                    <div id="instafeedNoMargins" class="mb-4 pb-1"></div> -->
                    <!-- <p class="p-autor pt-4">Категории</p>
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item"><a class="nav-link" href="#">Управление</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Персонал</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Маркетинг и PR</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Финансы</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Улучшения</a></li>
                    </ul> -->

                </div>

                <!-- <hr class="solid my-5"> -->

                <!-- <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul> -->

                <section class=" section-height-3 m-0 border-0">
                    <div class="container m-0 p-0">
                        <p class=" p-autor mt-3">Рекомендуем <strong class="font-weight-extra-bold">статьи</strong></s>
                        <div class="row">

                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <div class="portfolio-item">
                                    <a href="#">
												<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/test/img_1x1_3.png" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<!-- <span class="thumb-info-inner">Презентация</span> -->
                                                            <!-- <span class="thumb-info-type">Логотип</span> -->
															<span class="text-white font-weight-light 	font-roboto-slab">Секрет неуязвимости</span>
														</span>
                                                        <!-- <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                                        </span> -->
													</span>
												</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="portfolio-item">
                                    <a href="#">
												<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/test/img_1x1_2.png" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<!-- <span class="thumb-info-inner">Статья</span> -->
                                                            <!-- <span class="thumb-info-type">Персонал</span> -->
															<span class="text-white font-weight-light 	font-roboto-slab">Источник жизни</span>
														</span>
                                                        <!-- <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                                        </span> -->
													</span>
												</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="portfolio-item">
                                    <a href="#">
												<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/test/img_1x1.png" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<!-- <span class="thumb-info-inner">Название</span> -->
                                                            <!-- <span class="thumb-info-type">Финансы</span> -->
															<span class="text-white font-weight-light 	font-roboto-slab">Иммануил Кант</span>
														</span>
                                                        <!-- <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                                        </span> -->
													</span>
												</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="post-block mt-5 post-leave-comment">
                    <!-- <p class=" p-autor mt-3">Оставить комментарий</p> -->

                    <form id="contactForm" class="contact-form rounded" action="php/contact-form.php" method="POST">
                        <div class="">
                            <div class="form-row">
                                <!-- <div class="form-group col-lg-6">
                                    <label class="required blockquote">Полное имя</label>
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control"
                                     name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="required blockquote">Почта</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address."
                                     maxlength="100" class="form-control" name="email" id="email" required>
                                </div> -->
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="required p-position font-weight-normal">Комментарий</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="1" class="form-control" name="message"
                                              id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-0">
                                    <input type="submit" value="Готово" class="btn btn-outline-secondary" data-loading-text="Loading...">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-2 col-lg-3 d-flex align-items-start justify-content-start justify-content-lg-start mt-5 p-0">
                    <!-- <h5 class="text-3 mb-3">FOLLOW US</h5> -->
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-youtube"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-icons-instagram"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-vk"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-vk"></i></a></li>
                    </ul>
                </div>

                <div id="comments" class="post-block mt-5 post-comments">
                    <!-- <h4 class="mb-3">Комментарии</h4> -->

                    <ul class="comments">
                        <!-- <li>
                            <div class="comment">
                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                    <img class="avatar" alt="" src="img/test/noname_1x1.png">
                                </div>
                                <div class="comment-block">
                                    <div class="comment-arrow"></div>
                                    <span class="comment-by">
                                        <strong>Кристина Давыдова</strong>
                                        <span class="float-right">
                                            <span> <a href="#"><i class="fas fa-reply"></i> Ответить</a></span>
                                        </span>
                                    </span>
                                    <div class="post-block post-leave-comment">
                                    <p>И получается, что компания и команда не знают, куда идут, а если и знают,
                                        то не более чем на год - они не понимают, ради чего им это все и насколько счастливы будут они сами.</p>
                                    <span class="date float-right">Ноябрь 12, 2018 1:38 </span>
                                </div>
                            </div>

                            <ul class="comments reply">
                                <li>
                                    <div class="comment">
                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                            <img class="avatar" alt="" src="img/test/noname_1x1.png">
                                        </div>
                                        <div class="comment-block">
                                            <div class="comment-arrow"></div>
                                            <span class="comment-by">
                                                <strong>Кристина Давыдова</strong>
                                                <span class="float-right">
                                                    <span> <a href="#"><i class="fas fa-reply"></i> Ответить</a></span>
                                                </span>
                                            </span>
                                            <p>И все, что нужно сделать - это взять лист бумаги и просто помечтать.
                                                Напишите свои материальные мечты, минимум 40.</p>
                                            <span class="date float-right">Ноябрь 12, 2018 1:38 </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li> -->
                        <!-- <li>
                            <div class="comment">
                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                    <img class="avatar" alt="" src="img/avatars/avatar.jpg">
                                </div>
                                <div class="comment-block">
                                    <div class="comment-arrow"></div>
                                    <span class="comment-by">
                                        <strong>John Doe</strong>
                                        <span class="float-right">
                                            <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                        </span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <span class="date float-right">November 12, 2018 at 1:38 pm</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                    <img class="avatar" alt="" src="img/avatars/avatar.jpg">
                                </div>
                                <div class="comment-block">
                                    <div class="comment-arrow"></div>
                                    <span class="comment-by">
                                        <strong>John Doe</strong>
                                        <span class="float-right">
                                            <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                        </span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <span class="date float-right">November 12, 2018 at 1:38 pm</span>
                                </div>
                            </div>
                        </li> -->
                    </ul>

                </div>



            </div>



            <div class="col-md-3 mob-display-none">

                <!-- <h3 class="font-weight-bold pt-4 mb-2">Tags</h3>
                <div class="mb-3 pb-1">
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">design</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">brands</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">video</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">business</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">travel</span></a>
                </div> -->

                <a href="/KristinaDavidova">
                    <div class="foto_auth"></div>
                    <p class="p-autor mt-3">Кристина Давыдова<br><span class="p-position font-weight-normal">Президент</span></p>
                </a>


                <!-- <h3 class="font-weight-bold pt-4">Фото в инстаграм</h3>
                <div id="instafeedNoMargins" class="mb-4 pb-1"></div> -->
                <p class="p-autor pt-4">Категории</p>
                <ul class="nav nav-list flex-column mb-5">
                    <li class="nav-item"><a class="nav-link" href="#">Управление</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Персонал</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Маркетинг и PR</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Финансы</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Улучшения</a></li>
                </ul>

            </div>
        </div>
    </div>
@endsection