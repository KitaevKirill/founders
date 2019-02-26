@extends('layouts.app')

@section('content')
    <h1>Поиск:      {{$search}}</h1>

    <form role="search" action="/search" method="get">
        <div class="simple-search input-group">
            <input class="form-control text-1" id="headerSearch" name="q"
                   type="search" value="" placeholder="Поиск...">
            <span class="input-group-append">
														<button class="btn" type="submit">
															<!-- <i class="fa fa-search header-nav-top-icon"></i> -->
														</button>
													</span>
        </div>
    </form>
<div style="margin-top: 20px">
    <ol >
    @foreach($answer as $answers)
        <li style="margin-right: 20px">
            <a href="http://workwv/art{{$answers->id}}">{{$answers->title}}</a>
         <br>{{strip_tags(substr($answers->body, 0, 1000))}}
            </li>
    @endforeach
    </ol>

</div>

@endsection



