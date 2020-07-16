<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>UttamBangla</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="C-Resume a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css -->
<!-- font-awesome icons -->
<script src="https://kit.fontawesome.com/00cf02aba7.js" crossorigin="anonymous"></script>
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('front/css/style.css') }}" media="all"/>
<link rel="stylesheet" href="{{ URL::asset('front/css/bootstrap.min.css') }}" media="all" />
<!-- Default-JavaScript-File -->
<script type="text/javascript" src="{{ URL::asset('front/js/jquery-2.1.4.min.js') }}"></script>
<!-- //Default-JavaScript-File -->
</head>
<body>
    {{-- main content --}}
    @yield('content')
    {{-- main content --}}

    <!-- main-js -->
    <!-- bootstrap -->
    <script type="text/javascript" src="{{ URL::asset('front/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/bars.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ URL::asset('front/js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/easing.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- menu-js -->
    <script type="text/javascript" src="{{ URL::asset('front/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/menu.js') }}"></script>
    <!-- //menu-js -->
    <!-- text-effect -->
    <script type="text/javascript" src="{{ URL::asset('front/js/jquery.transit.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/jquery.textFx.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $('.test').textFx({
                    type: 'fadeIn',
                    iChar: 100,
                    iAnim: 1000
                });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
</body>
</html>
