<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>TemplateWorld.com Template - Web 2.0</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!--top part start -->
        
        <div id="toppart">
        @section('leftPart')
            <!--left part start -->
            <div id="leftPart">
                <a href="{{route('index')}}"><img src="images/logo.gif" alt="Bluish" width="195" height="91" class="logo"  /></a>
                <p class="latestWork">
                    Latest  Works
                    <a href="#">&nbsp;</a>
                </p>
                <h2 class="more">Рубрика</h2>
                <ul class="moreLink">
                    @foreach($categors as $categor)
                    <li><a href="#">{{ $categor->name }} </a></li>
                    @endforeach
                </ul>
                <p class="job"><a href="#">Join now</a></p>
                <a class="online" href="#">Online Registration</a>
            </div>
            <!--left part end  -->
            @show
            <!--right part start -->
            <div id="right">
                @section('topMenu')
                <!--top ul start-->
                <div id="rightTop">
                    <ul class="navi">
                        <li><a href="{{route('index')}}" class="home">Home</a></li>
                        <li><a href="{{route('articleAll')}}">About Us</a></li>
                        <li><a href="#">What Our Future Plans</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privecy Policy</a></li>
                        <li><a href="#">Blog </a></li>
                        <li class="nobor"><a href="#" class="contact">Contact</a></li>
                    </ul>
                    <p class="slog">
                        <a class="webSearch" href="#">Web Search</a>
                        <a class="bookmark" href="#">Bookmark This Page</a>
                        A Totaly Different Age With <span>100%</span> Safety For Future </p>
                </div>
                <!--top ul end -->
                @show
                <!--view project part -->
                @section('rightRight')
                <div id="rightRight">
                    <p class="view">
                        View more
                        <span>Projects</span>
                    </p>
                    <h2>Области</h2>
                    <ul class="date">
                     @foreach($sity as $oneSity)
                     <li title="{{$oneSity->oblast}}" class="nobor"><a href="#">{{$oneSity->sity}}</a></li>

                    @endforeach
                    </ul>
                    <h2 class="date1">On November 2007</h2>
                    <ul class="date">
                      
                        <li><a href="#">dapibus sodales mauris </a></li>
                        <li><a href="#">commodo ullamcorper </a></li>
                        <li><a href="#">nunc suspendisse </a></li>
                        <li><a href="#">Potenti fusce </a></li>
                        <li><a href="#">faucibus phasellus </a></li>
                        <li><a href="#">Mattis felis quis tellus </a></li>
                        <li class="nobor"><a href="#">Mauris ultrices </a></li>
                    </ul>
                    <p class="bot"><br/></p>
                </div>
                @show
                <!--view project end -->
                <!--what more start -->
                @yield('main')
<!--                <div id="rightmid">
                    <div>
                        <h2 class="whatMore">What&rsquo;s More ?</h2>
                        <form name="serch" method="post" action="" class="serch">
                            <label class="icon"></label>
                            <input type="text" name="name" value="Enter Search Items" class="txtBox" />
                            <input type="submit" name="go" value="Go" class="go" />
                            <a href="#">For Advance Search</a>
                        </form>
                        <ul class="whatMore1">
                            <li><a href="#">Commodo nisl sem id felis</a></li>
                            <li><a href="#">Vivamus aerat </a></li>
                            <li><a href="#">Innunc venenatis feugiat vestum  </a></li>
                            <li class="nobor"><a href="#">Lipsum primis faucibus </a></li>
                        </ul>
                        <br class="spacer" />
                    </div>
                    <h2 class="wel">welcome to bluish</h2>
                    <p class="txt1">
                        <b>Dapibus sodales mauris commodo ullamcorper nunc</b>
                        Suspendisse potenti. Fusce faucibus. Phasellus mattis felis quis tellus. Mauris ultrices arid auue 			                           sollicitudin accumsan. <span>Vestibulum adipiscing metus</span> posuere arcu. Morbi vehicula pharetra 	                           ligulaIn hac habitasse platea dictumst. Cras nec metus id lacus consequat volutat. <span>Fusce                            neque</span> nisi congue sed, pretium quis
                    </p>
                    <a href="#" class="rm">Read More</a>
                </div>-->
                <!--what more end -->
                
                
                
                <br class="spacer" />
            </div>
            <!--right part end -->
            <br class="spacer" />
        </div>
        <!--top part end -->
        <!--black start -->
        @section('black')
        <div id="blackMain">
            <div id="black">
                <div id="service">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="#">Pellentesque cursus elit</a></li>
                        <li><a href="#">acu Vestibulum ante</a></li>
                        <li><a href="#">psum prin Faucibus orci</a></li>
                        <li><a href="#">luctus et ultrices Posuere</a></li>
                        <li><a href="#">cubilia </a></li>
                        <li><a href="#">Curae</a></li>
                        <li class="noImg"><a href="#">Maecenas odio</a></li>
                    </ul>
                    <br class="spacer" />
                </div>
                <div id="testimonial">
                    <h2>Testimonials</h2>
                    <p class="testTxt1"><span>L.Kurter Says ...............</span>
                        lacus neque molestie metus, eu tincidunt ipsum nisi vitae tellus. Nullam eget nulla. Phasellus id 															                            dolor. Mais molestie. Aliquam vitae felis in pede congue auctor. Phasellus ut pede id orci aliquam                            adipiscing. Sed dolor dui, dapibus quis, nonummy non</p>
                    <p class="testTxt1"><span>L.Kurter Says ...............</span>
                        vehicula pharetra ligula. In hac habitasse platea dictumst. Cras nec metus id lacus consequat volutpat.                            Fusce neque nisi, congue pellentesque tortor et tortor. Pellentesque cursus elit ac urna. Vestibulum                            ante ipsum pris in faucibus orci luctus et ultrices posuere cubilia arcu. Morbi vehicula pharetra                            ligula. In hac habitasse platea dictumst </p>  
                    <br class="spacer" />
                </div>
                <div id="newsletter">
                    <h2>Newsletter</h2>
                    <form name="serch" action="#" method="post">
                        <input type="text" name="name" value="Enter Email ID" class="txtBox2" />
                        <input type="submit" name="signup" value="Signup" class="serch" />
                        <br class="spacer" />
                    </form>
                    <p class="tollfree">+01-7789-5566</p>
                    <a href="http://validator.w3.org/check?uri=referer" class="xhtml">Xhtml Valid</a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">Css Valid</a>
                    <br class="spacer" />
                </div>
                <br class="spacer" />
            </div>
            <br class="spacer" />
        </div>
        <!--black end -->
        @endsection
        @section('footer')
        <!--footer start -->
        <div id="footerMain">

            <div id="footer"> 
                <ul>
                    <li><a href="#" class="home2">Home</a>|</li>
                    <li><a href="#">About Us</a>|</li>
                    <li><a href="#">What Our Future Plans</a>|</li>
                    <li><a href="#">Support</a>|</li>
                    <li><a href="#">Privecy Policy</a>|</li>
                    <li><a href="#">Blog </a>|</li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p class="copyright">Copyright © Bluish 20XX. All Rights Reserved.</p>
                <p class="design">Designed by : <a href="http://www.templateworld.com/" target="_blank" class="link">Template 
                        World</a></p>
            </div>
        </div>
        <!--footer end -->
        @show
    </body>
</html>
