@extends('posts.layouts.postV3')

@section('title', $post->title)
@section('meta_keyword', $post->meta_keyword)
@section('meta_description', $post->meta_description)

@section('content')
    <div role="main" class="main">
        <div>
        {{--<div class="slider-container rev_slider_wrapper bg-color-light">--}}

            <div class="container-fluid mob-display-none" style="clear: both">
                <div class="col-lg-12 img-post_top">
                    <a href="">
                        <img style="width: 80vw" src="/storage/brushes/{{$post->id}}/finBrushH.png"
                             class=" img-thumbnail img-thumbnail-no-borders rounded-0 "
                             alt=""/>
                    </a>
                </div>
            </div>

            <div class="container" style="clear: both">
                <div class="col-lg-10 text-left">
                    <h1 class="font-weight-bold  h1-display">{{$post->title}}</h1>
                    <p class=" text-muted h2-display">{{$post->excerpt}}</p>
                </div>
            </div>

        </div>


        <div class="container ">


            <div class="row mb-5">
                <div class="col-md-9 mb-md-0">

                    <p class="text-5">{!!$post->body!!}</p>

                    <div class="col-md-3 only-mob">


                        <a href="/KristinaDavidova">
                            <img src="/storage/avatar/{{$author->id}}/Max.png" alt="" width="200">
                            <p class=" p-autor mt-3">{{$author->name}}<br><span
                                        class="p-position font-weight-normal">Президент</span>
                            </p>
                        </a>


                    </div>


                    <section class=" section-height-3 m-0 border-0">
                        <div class="container m-0 p-0">
                            <p class=" p-autor mt-3">Рекомендуем <strong
                                        class="font-weight-extra-bold">статьи</strong></s>
                            <div class="row">
                                @foreach($square as $squares)
                                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                        <div class="portfolio-item">
                                            <a href="/art{{$squares->id}}">
                                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
                                                            <img height="255px" width="255px" src="/storage/brushes/{{$squares->id}}/square.png"
                                                                 class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">

															<span class="text-white font-weight-light 	font-roboto-slab">{{$squares->title}}</span>
														</span>

													</span>
												</span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>


                    @if (Auth::user())
                        <div class="post-block mt-5 post-leave-comment">

                            <form class="contact-form rounded" method="post"
                                  action="{!!  $post->id!!}/addComment">
                                {{ csrf_field() }}
                                <div class="">
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label class="required p-position font-weight-normal">Комментарий</label>

                                            <textarea maxlength="5000" data-msg-required="Please enter your message."
                                                      rows="2" class="form-control" name="text"
                                                      placeholder="text of comment"
                                                      required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col mb-0">
                                            <input type="submit" value="Готово" class="btn btn-outline-secondary"
                                                   data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif

                    <div class="col-md-2 col-lg-3 d-flex align-items-start justify-content-start justify-content-lg-start mt-5 p-0">
                        <!-- <h5 class="text-3 mb-3">FOLLOW US</h5> -->
                        <ul class="social-icons">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                                                 title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-youtube"><a href="http://www.twitter.com/" target="_blank"
                                                                title="Twitter"><i class="fab fa-youtube"></i></a></li>
                            <li class="social-icons-instagram"><a href="http://www.linkedin.com/" target="_blank"
                                                                  title="Linkedin"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-vk"><a href="http://www.linkedin.com/" target="_blank"
                                                           title="Linkedin"><i class="fab fa-vk"></i></a></li>
                        </ul>
                    </div>

                    <div id="comments" class="post-block mt-5 post-comments">
                        <!-- <h4 class="mb-3">Комментарии</h4> -->

                        <ul class="comments">
                            @foreach($post->comments as $comment)
                                <li>
                                    <div class="comment">
                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                            <img class="avatar" alt="" src="/storage/avatar/{{$author->id}}/Max.png">
                                        </div>
                                        <div class="comment-block">
                                            <div class="comment-arrow"></div>
                                            <span class="comment-by">
												<strong>{{$comment->author->name}}</strong>
												{{--<span class="float-right">--}}
													{{--<span> <a href="#"><i class="fas fa-reply"></i> Ответить</a></span>--}}
												{{--</span>--}}
											</span>
                                            <div class="post-block post-leave-comment">
                                                <p>{{$comment->text}}</p>
                                                <span class="date float-right">{{$comment->created_at->format('Y/m/d H:i:s')}}</span>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            @endforeach


                        </ul>

                    </div>


                </div>


                <div class="col-md-3 mob-display-none">


                    <a href="/KristinaDavidova">
                        <img src="/storage/avatar/{{$author->id}}/Max.png" alt="" width="200">
                        <p class=" p-autor mt-3">{{$author->name}}<br><span class="p-position font-weight-normal">Президент</span>
                        </p>
                    </a>

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

    </div>

    </div>

@endsection