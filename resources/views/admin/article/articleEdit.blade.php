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

<h1>New Artical</h1>

            <form action="{{route('articalNew')}}" method="post" >
                <p><span>active</span><input type="checkbox" @if ($oneArtical->active){{'checked'}}  @endif value="1" name="active"></p>
                <p><span>title_ru:</span><input type="text" value="{{$oneArtical->title_ru}}" name="title_ru"></p>
                <p><span>title_en:</span><input type="text" value="{{$oneArtical->title_en}}" name="title_en"></p>
                <p><span>html_ru:</span><input type="text" value="{{$oneArtical->html_ru}}" name="html_ru"></p>
                <p><span>html_en:</span><input type="text" value="{{$oneArtical->html_en}}" name="html_en"></p>
                <p><span>like:</span><input type="text" value="{{$oneArtical->like}}" name="like" disabled></p>
                <p><span>coutViews:</span><input type="text" value="{{$oneArtical->coutViews}}" name="coutViews" disabled></p>
                {{ csrf_field() }}
                <input class="btn" type="submit" value="Save">

            </form>


                    
    </body>
</html>
