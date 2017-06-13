<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>TemplateWorld.com Template - Web 2.0</title>
        <link href="css/admin_style.css" rel="stylesheet" type="text/css" />
    </head>

    <body> <div id="toppart">
        @section('hedersLink')
          <div>
              <ul>
                  <li><a href="{{route('mainHome')}}">Home</a></li>
                  <li><a href="{{route('articleList')}}">article</a></li>
                  <li></li>
              </ul>
          </div>
        @show

            <p><a href="{{route('articalNewView')}}">-=Создать новую статью=-</a></p>
    @foreach($articles as $oneArt )
        <div style="width: 100% ; background: #a4aaae ; padding: 5px; border: #000 solid  1px; border-radius: 5px">

            <ul>
                <li><span>title: </span>{{$oneArt->title_ru}}</li>
                <li><span>Like: </span>{{$oneArt->like}}</li>
                <li><span>Кол-во просмотров:</span>{{$oneArt->coutViews}}</li>
                <li><span>Дата создание:</span>{{$oneArt->created_at}}</li>
                <li><span>Дата ред.:</span>{{$oneArt->updated_at}}</li>
                <li><a href="{{route('articalEdit' , ['id'=>$oneArt->id]  )}}">Edit</a></li>
                <li><a href="{{route('articalDel' , ['id'=>$oneArt->id]  )}}">DEL</a></li>
            </ul>
        </div>
    @endforeach

    </body>
</html>
