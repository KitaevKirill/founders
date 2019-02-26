<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Шаблоны</title>
    <style type="text/css">
        .card IMG {
            position: fixed;
            /*top: 300px;*/
        }

        .brushG {
            width: 69%; /* Ширина области */
            height: 400px; /* Высота области */
            top: 352px;
            left: 3px;
            z-index: 5;
        }

        .brushV {
            width: 300px; /* Ширина области */
            height: 500px; /* Высота области */
            top: 372px;
            left: 0px;
            z-index: 5;
        }

        .formG {
            width: 70%; /* Ширина области */
            height: 403px; /* Высота области */
            left: 0px;
            top: 350px;
            z-index: 6;
        }

        .formV {
            width: 301px; /* Ширина области */
            height: 510px; /* Высота области */
            left: 0px;
            top: 370px;
            z-index: 6;
        }

        figure {
            width: 50%; /* Ширина области */
            height: 400px; /* Высота области */
            margin: 0; /* Обнуляем отступы */
            float: left;
            overflow: hidden; /* Прячем всё за пределами */
            min-width: 200px; /* Минимальная ширина */
        }

        figure img {
            width: 100%; /* Ширина изображений */
            margin: -10% 0 0 0; /* Сдвигаем вверх */
        }
    </style>
</head>
<body>
<h1>Выберите форму кисти</h1> <br>
<p>Процесс обработки кисти очень времяёмкий, обработанная картинка появится на сайте примерно через три минуты после нажатия на кнопку "сохранить"</p>

<form method="post">

    {{ csrf_field() }}


    <div>
        @if($date->template == 1)
            @for ($i = 1; $i < 3; $i++)
                <button type="submit" name="form" value="{{ $i }}"
                        formaction="/postconstruct2/@if($date->is_bufer){{0}}@else{{$date->post_id}}@endif"/><img
                        src="/img/postsConstruct/Horizontal/00{{$i}}.png" width="100"></button> @endfor
        @else @for ($i = 1; $i < 4; $i++)
            <button type="submit" name="form" value="{{ $i }}"
                    formaction="/postconstruct2/@if($date->is_bufer){{0}}@else{{$date->post_id}}@endif"/><img
                    src="/img/postsConstruct/Vertical/00{{$i}}.png" width="100"></button> @endfor
        @endif
    </div>

</form>

<form action="/uploadBrush/@if($date->is_bufer)0 @else{{$date->post_id}}@endif" method="post"
      enctype="multipart/form-data">
    @csrf
    <input type="file" name="attachment">
    <input type="submit">
</form>

@if($date->is_bufer && file_exists(public_path()."/img/postsConstruct/brush.jpg") && isset($date->form))

    @if($date->template == 1)
        <p class="card">
            <img src="/storage/brushes/0/brush.jpg" alt="3" class="brushG"/>
        </p>
        <p class="card">
            <img src="/storage/brushes/Horizontal/i00{{$date->form}}.png" alt="7" class="formG"/>
        </p>
    @else
        <p class="card">
            <img src="/storage/brushes/0/brush.jpg" alt="3" class="brushV"/>
        </p>
        <p class="card">
            <img src="/storage/brushes/Vertical/i00{{$date->form}}.png" alt="7" class="formV"/>
        </p>
    @endif

@elseif(!$date->is_bufer)
    @if($date->template == 1)
        <p class="card">
            <img src="/storage/brushes/{{$date->post_id}}/brush.jpg" align="left" alt="3" class="brushG"/>
        </p>
        <p class="card">
            <img src="/storage/brushes/Horizontal/i00{{$date->form}}.png" alt="7" class="formG"/>
        </p>
    @else
        <p class="card">
            <img src="/storage/brushes/{{$date->post_id}}/brush.jpg" align="left" alt="3" class="brushV"/>
        </p>
        <p class="card">
            <img src="/storage/brushes/Vertical/i00{{$date->form}}.png" alt="7" class="formV"/>
        </p>
    @endif
@endif
<div style="top: 800px;">
    {{--@if($date->is_bufer)--}}
    <input type="button" class="button" value="Сохранить"
           onclick="location.href='/generateImage/@if($date->is_bufer)0 @else{{$date->post_id}}@endif'"/>
    {{--<input type="button" class="button" value="К Статье" onclick="location.href='/postconstruct3/0'"/>--}}
    {{--@else--}}
    {{--<input type="button" class="button" value="Применить" onclick="location.href='/paper/{{$date->post_id}}/edit'"/>--}}
    {{--@endif--}}
    {{--@if($date->is_bufer && isset(App\PostBufer::all()[0]->title))<input type="button" class="button"--}}
    {{--value="Предпросмотр"--}}
    {{--onclick="location.href='/fullpreview'"/>--}}
    {{--@endif--}}
</div>

