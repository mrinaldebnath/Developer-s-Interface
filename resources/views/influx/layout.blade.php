<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!--
    Holiday Template
    http://www.templatemo.com/tm-475-holiday
    -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700) !!}
   {!! Html::style('influg/css/font-awesome.min.css') !!}
    {!! Html::style('influg/css/bootstrap-datetimepicker.min.css') !!}
    {!! Html::style('influg/css/flexslider.css') !!}
    {!! Html::style('influg/css/templatemo-style.css') !!}


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="tm-gray-bg">
<!-- Header -->

<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="#" class="tm-site-name">Holiday</a>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="tours.html">Our Tours</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name

                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
        </div>
    </div>
</footer>
{ HTML::script('influg/js/jquery-1.11.2.min.js') }
{ HTML::script('influg/js/moment.js') }
{ HTML::script('influg/js/bootstrap.min.js') }
{ HTML::script('influg/js/bootstrap-datetimepicker.min.js') }
{ HTML::script('influg/js/jquery.flexslider-min.js') }
{ HTML::script('influg/js/templatemo-script.js') }
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->

<script>
    // HTML document is loaded. DOM is ready.
    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
        $('.date-time').datetimepicker();

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // Load Flexslider when everything is loaded.
    $(window).load(function() {
        // Vimeo API nonsense

        /*
         var player = document.getElementById('player_1');
         $f(player).addEvent('ready', ready);

         function addEvent(element, eventName, callback) {
         if (element.addEventListener) {
         element.addEventListener(eventName, callback, false)
         } else {
         element.attachEvent(eventName, callback, false);
         }
         }

         function ready(player_id) {
         var froogaloop = $f(player_id);
         froogaloop.addEvent('play', function(data) {
         $('.flexslider').flexslider("pause");
         });
         froogaloop.addEvent('pause', function(data) {
         $('.flexslider').flexslider("play");
         });
         }
         */



        // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
        /*

         $(".flexslider")
         .fitVids()
         .flexslider({
         animation: "slide",
         useCSS: false,
         animationLoop: false,
         smoothHeight: true,
         controlNav: false,
         before: function(slider){
         $f(player).api('pause');
         }
         });
         */




//	For images only
        $('.flexslider').flexslider({
            controlNav: false
        });


    });
</script>
</body>
</html>