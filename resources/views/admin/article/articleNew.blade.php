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
    @foreach($articles as $oneArt )
        <ul>
            <li>{{$oneArt->}}</li>
            <li>{{$oneArt->}}</li>
            <li>{{$oneArt->}}</li>
        </ul>

    @endforeach
                    
    </body>
</html>
