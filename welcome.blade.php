<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UniClient</title>

         <!-- Bootstrap core CSS -->
         <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{URL::to('css/app.css')}}"  rel="stylesheet" type="text/css">

    </head>
    <body>
           <!--  <a href="#news" id="News">News</a>
            <a href="#events" id="Events">Events</a>
            <a href="#about" id="About">About Us</a>
            <a href="http://localhost/campusx/public/register">register</a> -->
        <div>
            <nav class="navbar  navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="http://localhost/campusx/public">
                            UniClient
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                                <li><a href="http://localhost/campusx/public/login">Login</a></li>
                                <li><a href="http://localhost/campusx/public/register">Register</a></li>
                                                </ul>
                    </div>

                
                </div>
            </nav>
        </div>
        <div class="scroll">

        </div>

        <div class="index-news">
            <div class="wrapper">

                <article>
                    <div class="news-img"></div>
                    <h3>This is a news title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </article>

                
                <article>
                    <div class="news-img"></div>
                        <h3>This is a news title</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                </article>

                <article>
                    <div class="news-img"></div>
                    <h3>This is a news title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                </article>


            </div>
        </div>

        <footer>
            <div>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="forum.html">FORUM</a></li>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>
        </footer>
    </body>
</html>
