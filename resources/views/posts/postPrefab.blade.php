@extends('posts.layouts.layout'.$date->template)

@section('content')
    <div>Текст:{!! $post->body!!}</div>

@endsection

@section('author')
    {{App\User::all()->find($post->author_id)->name}}
    <img width="150" src="/storage/avatar/{{App\User::all()->find($post->author_id)->avatar}}">
@endsection

@section('brush')
    @if($date->is_bufer)
        <img width="100%" src="/storage/brushes/0/finBrushH.png">
    @endif
@endsection

@section('button')
    <input type="button" class="button" value="Изменить шаблон"
           onclick="location.href='/postconstruct1/@if($date->is_bufer){{0}}@else{{$post->id}}@endif'"/>
    <input type="button" class="button" value="Изменить кисть"
           onclick="location.href='/postconstruct2/@if($date->is_bufer){{0}}@else{{$post->id}}@endif'"/>
    <input type="button" class="button" value="Изменить текст статьи"
           onclick="location.href='/postconstruct3/@if($date->is_bufer){{0}}@else{{$post->id}}@endif'"/>
    @if($date->is_bufer)
        <input type="button" class="button" value="Сохранить статью" onclick="location.href='/postsave'"/>
    @else
        <input type="button" class="button" value="Сохранить статью" onclick="location.href='/paper'"/>
    @endif
@endsection