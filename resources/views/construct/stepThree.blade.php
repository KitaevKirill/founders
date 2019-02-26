<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- подключаем boostrap -->

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    <!-- подключаем стили Summernote -->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .left {
            float: left;
            width: 70%;
        }

        .right {
            float: right;
            width: 30%;
        }

        .height {
            height: 500px;
        }

        .bottom {
            clear: both;
        }
    </style>
</head>
<body>
<div class=" position-ref full-height">
    <div class="content">
        <form method="POST">
            {{ csrf_field() }}
            <div class="left">
                <label for="title">Заголовок</label><br/>
                <input type="text" name="title" id="title"  required @if(!old('title') && isset($post)  ) value="{{$post->title}}" @else value=" {{old('title')}}" @endif><br/>
                <div class="height">
                    <label for="body">Текст</label><br/>
                    <div style="text-align:left">
                        <textarea name="body" id="body" required> @if (!old('body') &&  isset($post)) {{$post->body}} @else {{old('body')}} @endif</textarea>
                    </div>
                </div>
            </div>
            <!-- ### DETAILS ### -->
            <div class="right">
                <div class="panel panel panel-bordered panel-warning">

                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> {{ __('voyager::post.details') }}</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                               aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="slug">URL</label>

                            <input type="text" class="form-control" id="slug" name="slug"
                                   placeholder="slug">
                        </div>
                        <div class="form-group">
                            <label for="status">Статус</label>
                            <select class="form-control" name="status">
                                <option value="PUBLISHED" selected="selected">Опубликовано</option>
                                <option value="DRAFT" selected="selected">В черновике</option>
                                <option value="PENDING" selected="selected">В ожидании</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select class="form-control" name="category_id">
                                @foreach(App\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <!-- ### SEO CONTENT ### -->
                <div class="panel panel-bordered panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-search"></i> {{ __('voyager::post.seo_content') }}
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                               aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="meta_description">Meta description</label>
                            <textarea class="form-control" name="meta_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta keywords</label>
                            <textarea class="form-control" name="meta_keywords"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_title">Seo title</label>
                            <input type="text" class="form-control" name="seo_title" placeholder="SEO Title">
                        </div>

                    </div>

                </div>
                <!-- ### EXCERPT ### -->

                <div class="panel-heading">
                    <h3 class="panel-title">Выдержка (краткое описание статьи)</h3>
                    <div class="panel-actions">
                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                    </div>
                </div>
                <div class="panel-body">

                    <textarea class="form-control" name="excerpt" required
                              > @if (!old('excerpt') &&  isset($post)) {{$post->excerpt}} @else {{old('excerpt')}} @endif </textarea>
                </div>
            </div>

            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="bottom">
                @isset($post->is_bufer)
                    <button type="submit" formaction="/postsave"> Сохранить</button>@endisset
                @isset($post)
                    <button type="submit"
                            formaction="/postconstruct3/@if($post->is_bufer)0 @else{{$post->id}}@endif">@if($post->is_bufer)
                            Предпросмотр@else Сохранить@endif</button>
                @endisset
                @empty($post)
                    <button type="submit" formaction="/postconstruct3/0">Предпросмотр</button>
                @endempty
            </div>
        </form>
    </div>
</div>


<!-- подключаем jquery -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<!-- подключаем bootstrap.js -->

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- подключаем сам summernote -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>

<script>

    $(document).ready(function () {

        $('#body').summernote({height: 300});

        $("#body").summernote('code');

    });

</script>
</body>
</html>