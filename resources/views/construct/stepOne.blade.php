<h1>Выберите шаблон</h1> <br>

<form method="post">

    {{ csrf_field() }}



    <div>
        <button type="submit" name="template" value="1"        formaction="/postconstruct1/@if(isset($date)){{$date->post_id}} @else 0 @endif"><img src="/img/postsConstruct/Template1.png"></button>
        <button type="submit" name="template" value="2"        formaction="/postconstruct1/@if(isset($date)){{$date->post_id}} @else 0 @endif"><img src="/img/postsConstruct/Template2.png"></button>
    </div>


</form>