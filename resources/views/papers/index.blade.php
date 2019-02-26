@extends('layouts.app')

@section('content')
    <input type="button" value="Создать новую статью"
           style="background-color: #4dff67; border-radius: 5px; "
           onclick="location.href='/postconstruct1/0'">
    <br>
    <br>

    <table width="100%" border="4" bordercolor="white" align="center">
        <tr bgcolor="#f5f5dc">
            <td>id</td>
            <td>image</td>
            <td>title</td>
            <td width="15%">action</td>
        </tr>
        @foreach ($post as $posts)
            <tr bgcolor="#f0ffff">
                <td>{{$posts->id}}</td>
                <td><img src="/storage/brushes/{{$posts->id}}/fullBrush.png" width="50"></td>
                <td><a href="/art{{$posts->id}}" >{{$posts->title}} </a></td>
                <td><input type="button" value="Edit" style=" background-color: #0c96ff; border-radius: 5px;"
                           onclick="location.href='paper/{{$posts->id}}/edit'"> <form onsubmit="if(confirm('Удалить?')){return true}else{return false}" method="POST" action="paper/{{$posts->id}}" style="display: inline-block;" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" style=" background-color: red; border-radius: 5px;">Delete</button>
                    </form>
            </tr>
        @endforeach
        <ul class="pagination pull-right">
        {{$post->links()}}
        </ul>
    </table>

@endsection