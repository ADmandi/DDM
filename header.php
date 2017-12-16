<!DOCTYPE html>
<html>
  <head>
    <title>DDMA | Mandi H.P</title>
    <link rel="shortcut icon" type="image/png" href="images/ss.png"/>
    <meta name="keywords" content="" />
  <meta name="description" content="" />
    <!-- 
    Powerful Template 
    http://www.templatemo.com/tm-390-powerful
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ddma_style.css" rel="stylesheet">

<!-- other-->
    <link href="other/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<!-- other end-->


<!-- mock-->
<link href="mock/css/mock_style.css" rel="stylesheet">
<link rel="stylesheet" href="css/tooplate-style.css">
<!-- mock end-->

<!-- poup-->
<link rel="stylesheet" href="popup/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="popup/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- poup end-->

<!-- about-->
<link href="about/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- about end-->



    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div id="templatemo_top" class="mainTop">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                 <marquee onmouseout="this.start()" onmouseover="this.stop()"><a href="mailto:ddmamandi@gmail.com"><i class="fa fa-envelope"></i>ddmamandi@gmail.com</a>&nbsp;&nbsp;
                <a href="#"><i class="fa fa-mobile-phone"></i>&nbsp;&nbsp; Emergrncy No. 01905-226201,202,203,204 Toll Free: 1077</a></marquee>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="socials">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- e/o mainTop -->
      
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="images/slider/1.png" alt="slide 1" /></a>
            <a href="#"><img src="images/slider/5.jpg" alt="slide 2" /></a>
            <a href="#"><img src="images/slider/3.png" alt="slide 3" /></a>
      </div>
    

    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="#"><img src="images/log.png" alt="DDMA"></a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#templatemo_top">Home</a></li>
                <li><a href="#templatemo_services">About</a></li>
                <li><a href="#templatemo_portfolio">Citizen Corner</a></li>
                <li><a href="#templatemo_about">NGO Corner</a></li>
                <li><a href="#templatemo_mock">Mock-Drill</a></li>
                <li><a href="#templatemo_other">Other</a></li>
                <li><a href="#templatemo_contact">Contact</a></li>
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    </header>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script src="js/jquery.cookie.js"></script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
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
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>

<!-- //Map-JavaScript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
      <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
          var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(31.7089, 76.9321),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
          };
          var mapElement = document.getElementById('map');
          var map = new google.maps.Map(mapElement, mapOptions);
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(31.7089, 76.9321),
            map: map,
          });
        }
      </script>
  <!-- //Map-JavaScript end -->