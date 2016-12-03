<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} </title>
    <link href="/img/port01.jpg" rel="shortcut icon" type="image/x-icon" />
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
   <!--@Styles.Render("~/Content/css")-->
  <!-- @Scripts.Render("~/bundles/modernizr")-->

    <link rel="stylesheet" type="text/css" href="/css/bootstrap-paper.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">

    
</head>
<body>
  <!--  @{var clas = "main-header";
        var hide = "";
        if(ViewBag.Title=="Noite SMF")
        {
            clas= "main-header";
            hide = "";
        }else
        {
            hide = "hidden";
            clas= "main";
        }


            }-->

  <!-------mudar a classe-->
    <header  class="main-header"   id="header">
        
        <div class="bg-color">
      
            <nav class="nav navbar-default navbar-fixed-top">
                <div class="my_container ">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                                <span class="fa fa-bars"></span>
                            </button>
                         <!--   @Html.ActionLink("Noite SMF", "Index", "Home", new { area = "" }, new { @class = "navbar-brand" })-->
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#header">Home</a></li>
                                <li><a href="#feature">Feature</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                               
                               <!-- @*<li>@Html.ActionLink("Home", "Index", "Home")</li>

    <li>@Html.ActionLink("Contact", "Contact", "Home")</li>
    <li>@Html.ActionLink("Students", "Index", "Student")</li>
    <li>@Html.ActionLink("Courses", "Index", "Course")</li>
    <li>@Html.ActionLink("Instructors", "Index", "Instructor")</li>
    <li>@Html.ActionLink("Departments", "Index", "Department")</li>*@-->

                            </ul>
                    @if (Route::has('login'))
                
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
             
            @endif
                        </div>
                    </div>
                </div>
            </nav>
          
                
            <div class="my_container">
               
                <div class="col-lg-6 personaldivesq ">
                  
                       <!-- @{ int i = 0;
                            for (i = 0; i <= 5; i++)
                            {-->
                                <div class="wow fadeInLeft delay-05s col-lg-4 grade_foto ">
                                   <!--<h2 class="top-title">Web Design & Development</h2>
                                

                                    <h4 class="sub-title">We Create amazing designs</h4>
                                    <button type="submit" class="btn btn-submit">Download Now</button>-->
                                </div>
                          <!--  }
                        }-->

                 
                </div>
                    <div class="col-lg-6 personaldiv wrapper wow fadeInUp delay-05s my_image">
                       
                         <!--   <h2 class="top-title">Web Design & Development</h2>
                          
                           
                            <h4 class="sub-title">We Create amazing designs</h4>
                            <button type="submit" class="btn btn-submit">Download Now</button>-->
              
                    </div>
                
                </div>                            
            </div>
            
           

            
    </header>
   
       <!--<section id="cta-1">
           

                <div class="container">
                    <div class="row">

                        <div class="cta-info text-center">
                            <h3><span class="dec-tec">“</span>Everything is designed. Few things are designed well.<span class="dec-tec">”</span> -Brian Reed</h3>
                        </div>
                    </div>
            </div>

        </section>-->
  
    <div class="my_container ">
     @yield('content')

    </div>
        <!--<footer>
            <p>&copy; @DateTime.Now.Year - My ASP.NET Application</p>
        </footer>-->
   

  <!-- @Scripts.Render("~/bundles/jquery")-->
    <!--@Scripts.Render("~/bundles/bootstrap")-->
    <!--@RenderSection("scripts", required: false)-->
    <!--contact ends-->

   

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/custom.js"></script>
 

</body>
</html>
