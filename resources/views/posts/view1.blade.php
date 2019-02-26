@extends('posts.layouts.layout'.$date->template)

@section('content')
    <div>{!! $post->body!!}</div>

@endsection

@section('author')
    {{App\User::all()->find($post->author_id)->name}}
    <img width="150" src="/storage/avatar/{{App\User::all()->find($post->author_id)->avatar}}">
@endsection

@section('brush')
    <p class="card">
        @isset($date->is_bufer)
            <img src="/storage/0/finBrush.png" width="500" alt="3" class="three"/>
        @endisset
        @empty($date->is_bufer)
            <img src="/storage/brushes/{{$post->id}}/finBrush.png" style="width: 80vw" alt="3" class="three"/>
        @endempty
        <img src="/img/postsConstruct/Form{{$date->form}}.png" width="70" alt="7" class="seven"/>
    </p>
@endsection

