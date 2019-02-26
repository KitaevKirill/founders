@extends('posts.layouts.post')

@section('content')
    <div class="slider-container rev_slider_wrapper bg-color-light" style="height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 " >
                    <div class="text-left mt-9 text-top-post p-0">
                        <h1 class="font-weight-bold  h1-display ">Секрет<br>успеха<strong class="font-weight-extra-bold "></strong></h1>
                        <p class=" text-muted h2-display">Почему для некоторых путь к успеху словно закрыт, а другие легко достигают желаемого?</p>
                    </div>
                </div>

                <div class="col-lg-6 mob-display-none  img-post_top">
                    <div>
                        <a href="">
                            <img src="img/test/img_blog2.png" class="img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </a>
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

                <p class="text-5"><span class="d-caps">C</span>корее всего, Вы задавались вопросом: «Почему кто-то успешен?»,
                    «Почему люди достигают желаемого», «Почему для некоторых путь к успеху словно закрыт?»</p>
                <p class="text-5">Скажу сразу, что особых секретов, магических формул и прочего в достижении успеха нет. Все
                    достаточно легко и просто: нужно верить в себя, уважать свои принципы и доверять своей интуиции и никогда
                    никому не позволять себя или свои достижения преуменьшать или приравнивать к нулю. Вот и весь секрет
                    уверенности, которая лежит в основе успеха.
                    Но что же случается с нашей уверенностью? Почему у одних это качество сильно прокачано, а другие, зачастую не
                    менее талантливые люди, в нерешительности замирают посреди жизни?</p>
                <p class="text-5">И здесь тоже простой ответ. Есть люди, которые воруют Вашу уверенность, им доставляет
                    удовольствие делать людей менее способными и успешными, так как они думают и где-то даже, возможно, уверены в
                    том, что могут на фоне Вас выглядеть более успешными, то есть попытаться возвыситься за ваш счет. Они делают
                    все, чтобы Вы поступали согласно их желаниям, и ни в коем случае не считаются с Вашими, а если Вы будете усердно
                    их отстаивать, то они очень ловко и скрыто сотрут Ваши желания в порошок. Или же обесценивают, принижают Вас,
                    гасят Ваши стремления и энтузиазм. Вспомните. Возможно, в детстве Вы что-то делали, горели какой-то задумкой.
                    А кто-то из взрослых бросил на ходу — «ну, что за ерунду ты задумал». И как, Вы продолжили это делать?
                    Маловероятно. И так может происходить на протяжении всей жизни. Раз за разом слова других пробивают стену
                    Вашей веры в себя. И чем больше брешь в этой стене, тем больше Вашей уверенности украли.</p><br>
                <p class="text-5">
                    Знайте, что столкнуться с людьми, склонными подавлять других, можно везде: в семье, на работе, на улице. Но
                    «профессиональных подавителей» немного: по опыту моей практики, около 2,5% людей. При этом я наблюдала, что
                    страдает от них около 20% людей. Согласитесь, это внушительная цифра.</p>
                <blockquote class="blockquote-primary m-5">И здесь надо учиться различать —
                    «профессиональных подавителей» и остальных людей, кто просто что-то сказал.</blockquote>
                <p class="text-5">Но часто бывает, что нашу уверенность подрывают ненамеренно. Допустим, человек может, не
                    подумав, обронить критическое замечание относительно Вашей идеи. Или кто-то из близких начинает отговаривать
                    Вас от новой затеи, потому что его пугает масштабность этого проекта. И здесь надо учиться различать —
                    «профессиональных подавителей» и остальных людей, кто просто что-то сказал.
                    Помните, что основная цель «профессиональных подавителей» — сделать человека зависимым и неуверенным в своих
                    силах, не позволить ему достичь чего-либо, сделать его менее успешным, менее способным, подняться за счет него,
                    или самоутвердиться за чужой счет. Ведь это не стоит особых усилий для них, чтобы почувствовать себя значимым.</p>
                <p class="text-5">По внешним признакам таких личностей распознать крайне нелегко — так как они выглядят как все
                    нормальные люди. Но их можно распознать по их поведению, замашкам и действиям, а также по их намерению
                    уничтожать или возвышаться над людьми.
                </p>

                <p class="text-5"><span class="font-weight-extra-bold d-spacing">Можно выделить несколько видов «профессиональных подавителей»:</span><br></p>

                <p class="text-5"> <span class="font-italic">Деспот</span><br>
                    Обычно это люди, которые до безумия любят порядок и чтобы все было идеально. Это как в армии: все вокруг ходят
                    строем, слова сказать не могут ему, личное мнение задвигают подальше. Деспоты обычно требуют подчинения, жестко
                    останавливают все возражения, возмущаться с ними нельзя, спорить с ними невозможно, иначе себе будет хуже.</p>
                <p class="text-5"><span class="font-italic">Поклонники прекрасного</span><br>

                    Это - люди-звезды, им важно быть на пьедестале. Они недосягаемы для других, считают себя Богами и подглядывают
                    на всех с высокомерием.
                    Встречали таких? Если распознаете подобное поведение, ни в коем случае не позволяйте им вторгаться в Ваше
                    пространство и влиять на вашу жизнь. Они поставят под сомнение Ваши способности, достижения и результаты, они
                    украдут Вашу уверенность в себе, подвергая сомнению Вашу личность и идеи. А если мы о себе думаем не очень
                    хорошо, если мы занижаем свою самооценку, то мы не достигаем успеха. Ведь он основан на нашей уверенности в
                    себе, своих идеях, целях и действиях. Поэтому секрет неуязвимости — распознавайте «профессиональных
                    подавителей».<br> Больших успехов и побед!</p>

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