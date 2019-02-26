@extends('layouts.app')

@section('content')
    <div style="width: 35%; float: left; text-align: center; margin-left: 10%">
        @if(file_exists(public_path()."/storage/avatar/".Auth::user()->id."/Max.png"))
            <img src="Storage/avatar/{{ Auth::user()->id}}/Max.png">
            <br>Изменить Аватар:
            <form action="/uploadAvatar" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="avatar">
                <input type="submit">
            </form>
        @else
            Загрузить Аватар:
            <form action="/uploadAvatar" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="avatar">
                <input type="submit">
            </form>
        @endif
        <br>
            <form class="box" method="post" action="" enctype="multipart/form-data">
                <div class="box__input">
                    <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                    <button class="box__button" type="submit">Upload</button>
                </div>
                <div class="box__uploading">Uploading&hellip;</div>
                <div class="box__success">Done!</div>
                <div class="box__error">Error! <span></span>.</div>
            </form>
        <br>

        {{--$categories = \App\Category::all();--}}

        Вы подписаны на рассылки:
        @foreach(\App\Category::all() as $category)
            <form method="POST" action="/checkcategory{{$category->id}}">
                @method('PATCH')
                @csrf
                <label for=category{{$category->id}}>
                    <input type="checkbox"
                           name=category{{$category->id}} onChange="this.form.submit()"{!!  $category->isSubscripted($category->id) ? 'checked' : '' !!}>
                    {{$category->name}}<br>

                </label>
            </form>

        @endforeach
        <br>
        @if (Auth::user()->forAuthor() )
            <div>
                <input type="button" value="Создать новую статью"
                       style="background-color: #4dff67; border-radius: 5px; margin-left: 80px"
                       onclick="location.href='/postconstruct1/0'">
            </div>
            <br>
            <div>
                <input type="button" value="Посмотреть весь список статей"
                       style="background-color: #abdde5; border-radius: 5px; margin-left: 80px"
                       onclick="location.href='/paper'">
            </div>
        @endif


    </div>

    <div style="width: 45%; float: right; margin-right: 10%">

        <form>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="name">Имя</label>
                <input type="text" class="form-control" id="name"  placeholder="User">
            </div>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="surname">Фамилия</label>
                <input type="text" class="form-control" id="surname"  placeholder="Last Name">
            </div>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="organisation">Организация/Компания</label>
                <input type="text" class="form-control" id="organisation"  placeholder="Company Name">
            </div>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="post">Должность</label>
                <input type="text" class="form-control" id="post"  placeholder="СЕО">
            </div>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label style="margin-bottom: 0px; color: #777777" for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" style="float: right; background: #0c0c0d; border-color: #0a0a0a" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection


