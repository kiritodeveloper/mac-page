<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@c - @yield('title')</title>
        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <p class="bold text-left">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                   </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="inicio">INICIO</a></li>

                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nuestros trabajos y areas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="trabajo">desarrollo de software</a></li>
                                 <li class="nav-item"><a class="nav-link" href="camaras">area de instalacion</a></li>
                            </ul>
                      
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacnos</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        

        <style type="text/css">
            html {
                    height: 100%;
                    overflow: hidden;
                }

                body {
                    margin: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    color: #fff;
                    background-color: #9cf;
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#6af), to(#bdf));
                    background-image: -webkit-linear-gradient(#6af, #bdf);
                    background-image: -moz-linear-gradient(#6af, #bdf);
                    background-image: linear-gradient(#6af, #bdf);
                }

                ::-webkit-scrollbar { 
                    display: none; 
                }

                h1 {
                    position: absolute;
                    margin: auto;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -moz-transform: translate(-50%, -50%);
                  -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
                    text-align: center;
                    font: 10em "Codystar", sans-serif;
                    pointer-events: none;
                    -webkit-user-select: none;
                    user-select: none;
                }

                .snowflake {
                    position: absolute;
                    display: block;
                    position: absolute;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    border-radius: 50%;
                    -webkit-transform: translateZ(0);
                    -moz-transform: translateZ(0);
                    -ms-transform: translateZ(0);
                    -o-transform: translateZ(0);
                    transform: translateZ(0);
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                    background-image: -webkit-radial-gradient(
                        center,
                        circle farthest-corner,
                        rgba(255, 255, 255, 1) 40%,
                        rgba(255, 255, 255, 0) 100%
                    );
                    background-image: -moz-radial-gradient(
                        center,
                        circle farthest-corner,
                        rgba(255, 255, 255, 1) 40%,
                        rgba(255, 255, 255, 0) 100%
                    );
                    background-image: -ms-radial-gradient(
                        center,
                        circle farthest-corner,
                        rgba(255, 255, 255, 1) 40%,
                        rgba(255, 255, 255, 0) 100%
                    );
                    background-image: radial-gradient(
                        center,
                        circle farthest-corner,
                        rgba(255, 255, 255, 1) 40%,
                        rgba(255, 255, 255, 0) 100%
                    );
                }

                #snow {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }
                        </style>
                        <script type="text/javascript">
                            var Snowflake = (function() {

                    var flakes;
                    var flakesTotal = 250;
                    var wind = 0;
                    var mouseX;
                    var mouseY;

                    function Snowflake(size, x, y, vx, vy) {
                        this.size = size;
                        this.x = x;
                        this.y = y;
                        this.vx = vx;
                        this.vy = vy;
                        this.hit = false;
                        this.melt = false;
                        this.div = document.createElement('div');
                        this.div.classList.add('snowflake');
                        this.div.style.width = this.size + 'px';
                        this.div.style.height = this.size + 'px';
                    }

                    Snowflake.prototype.move = function() {
                        if (this.hit) {
                            if (Math.random() > 0.995) this.melt = true;
                        } else {
                            this.x += this.vx + Math.min(Math.max(wind, -10), 10);
                            this.y += this.vy;
                        }

                        // Wrap the snowflake to within the bounds of the page
                        if (this.x > window.innerWidth + this.size) {
                            this.x -= window.innerWidth + this.size;
                        }

                        if (this.x < -this.size) {
                            this.x += window.innerWidth + this.size;
                        }

                        if (this.y > window.innerHeight + this.size) {
                            this.x = Math.random() * window.innerWidth;
                            this.y -= window.innerHeight + this.size * 2;
                            this.melt = false;
                        }

                        var dx = mouseX - this.x;
                        var dy = mouseY - this.y;
                        this.hit = !this.melt && this.y < mouseY && dx * dx + dy * dy < 2400;
                    };

                    Snowflake.prototype.draw = function() {
                        this.div.style.transform =
                        this.div.style.MozTransform =
                        this.div.style.webkitTransform =
                            'translate3d(' + this.x + 'px' + ',' + this.y + 'px,0)';
                    };

                    function update() {
                        for (var i = flakes.length; i--; ) {
                            var flake = flakes[i];
                            flake.move();
                            flake.draw();
                        }
                        requestAnimationFrame(update);
                    }

                    Snowflake.init = function(container) {
                        flakes = [];

                        for (var i = flakesTotal; i--; ) {
                            var size = (Math.random() + 0.2) * 12 + 1;
                            var flake = new Snowflake(
                                size,
                                Math.random() * window.innerWidth,
                                Math.random() * window.innerHeight,
                                Math.random() - 0.5,
                                size * 0.3
                            );
                            container.appendChild(flake.div);
                            flakes.push(flake);
                        }
                    
                    container.onmousemove = function(event) {
                        mouseX = event.clientX;
                        mouseY = event.clientY;
                        wind = (mouseX - window.innerWidth / 2) / window.innerWidth * 6;
                    };

                      container.ontouchstart = function(event) {
                          mouseX = event.targetTouches[0].clientX;
                          mouseY = event.targetTouches[0].clientY;
                          event.preventDefault();
                    };

                    window.ondeviceorientation = function(event) {
                        if (event) {
                            wind = event.gamma / 10;
                        }
                    };
                    
                    update();
                    };

                    return Snowflake;

                }());

                window.onload = function() {
                  setTimeout(function() {
                    Snowflake.init(document.getElementById('snow'));
                  }, 500);
                }
                        </script>

                        <!--================Banner Area =================-->
                     
                            
        <style type="text/css">
                @import url(https://fonts.googleapis.com/css?family=Molle:400italic&subset=latin,latin-ext);
                            body{
                            background-color: hsla(0,0%,0%,1);
                            margin: 0px;
                            overflow: hidden;
                            font-family: 'Molle', cursive;
                            }
                            h2{
                              left: 50%;
                              position: absolute;
                              top: 50%;
                              transform: translate( -50%, -50%);
                              font-size:3em;
                              color:hsla(255, 255%, 255%, .1);
                            }

                .card {
                    padding-top: 20px;
                    margin: 10px 0 20px 0;
                    background-color: rgba(214, 224, 226, 0.2);
                    border-top-width: 0;
                    border-bottom-width: 2px;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }

                .card .card-heading {
                    padding: 0 20px;
                    margin: 0;
                }

                .card .card-heading.simple {
                    font-size: 20px;
                    font-weight: 300;
                    color: #777;
                    border-bottom: 1px solid #e5e5e5;
                }

                .card .card-heading.image img {
                    display: inline-block;
                    width: 46px;
                    height: 46px;
                    margin-right: 15px;
                    vertical-align: top;
                    border: 0;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    border-radius: 50%;
                }

                .card .card-heading.image .card-heading-header {
                    display: inline-block;
                    vertical-align: top;
                }

                .card .card-heading.image .card-heading-header h3 {
                    margin: 0;
                    font-size: 14px;
                    line-height: 16px;
                    color: #262626;
                }

                .card .card-heading.image .card-heading-header span {
                    font-size: 12px;
                    color: #999999;
                }

                .card .card-body {
                    padding: 0 20px;
                    margin-top: 20px;
                }

                .card .card-media {
                    padding: 0 20px;
                    margin: 0 -14px;
                }

                .card .card-media img {
                    max-width: 100%;
                    max-height: 100%;
                }

                .card .card-actions {
                    min-height: 30px;
                    padding: 0 20px 20px 20px;
                    margin: 20px 0 0 0;
                }

                .card .card-comments {
                    padding: 20px;
                    margin: 0;
                    background-color: #f8f8f8;
                }

                .card .card-comments .comments-collapse-toggle {
                    padding: 0;
                    margin: 0 20px 12px 20px;
                }

                .card .card-comments .comments-collapse-toggle a,
                .card .card-comments .comments-collapse-toggle span {
                    padding-right: 5px;
                    overflow: hidden;
                    font-size: 12px;
                    color: #999;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                .card-comments .media-heading {
                    font-size: 13px;
                    font-weight: bold;
                }

                .card.people {
                    position: relative;
                    display: inline-block;
                    width: 170px;
                    height: 300px;
                    padding-top: 0;
                    margin-left: 20px;
                    overflow: hidden;
                    vertical-align: top;
                }

                .card.people:first-child {
                    margin-left: 0;
                }

                .card.people .card-top {
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: inline-block;
                    width: 170px;
                    height: 150px;
                    background-color: #ffffff;
                }

                .card.people .card-top.green {
                    background-color: #53a93f;
                }

                .card.people .card-top.blue {
                    background-color: #427fed;
                }

                .card.people .card-info {
                    position: absolute;
                    top: 150px;
                    display: inline-block;
                    width: 100%;
                    height: 101px;
                    overflow: hidden;
                    background: #ffffff;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }

                .card.people .card-info .title {
                    display: block;
                    margin: 8px 14px 0 14px;
                    overflow: hidden;
                    font-size: 16px;
                    font-weight: bold;
                    line-height: 18px;
                    color: #404040;
                }

                .card.people .card-info .desc {
                    display: block;
                    margin: 8px 14px 0 14px;
                    overflow: hidden;
                    font-size: 12px;
                    line-height: 16px;
                    color: #737373;
                    text-overflow: ellipsis;
                }

                .card.people .card-bottom {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    display: inline-block;
                    width: 100%;
                    padding: 10px 20px;
                    line-height: 29px;
                    text-align: center;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }

                .card.hovercard {
                    position: relative;
                    padding-top: 0;
                    overflow: hidden;
                    text-align: center;
                    background-color: rgba(214, 224, 226, 0.2);
                }

                .card.hovercard .cardheader {
                    background: url("img/clientes/aaa.jpg");
                    background-size: cover;
                    height: 135px;
                }

                .card.hovercard .avatar {
                    position: relative;
                    top: -50px;
                    margin-bottom: -50px;
                }

                .card.hovercard .avatar img {
                    width: 100px;
                    height: 100px;
                    max-width: 100px;
                    max-height: 100px;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    border-radius: 50%;
                    border: 5px solid rgba(255,255,255,0.5);
                }

                .card.hovercard .info {
                    padding: 4px 8px 10px;
                }

                .card.hovercard .info .title {
                    margin-bottom: 4px;
                    font-size: 24px;
                    line-height: 1;
                    color: #262626;
                    vertical-align: middle;
                }

                .card.hovercard .info .desc {
                    overflow: hidden;
                    font-size: 12px;
                    line-height: 20px;
                    color: #737373;
                    text-overflow: ellipsis;
                }

                .card.hovercard .bottom {
                    padding: 0 20px;
                    margin-bottom: 17px;
                }

                .btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

        </style>


<section class="main_slider_area">
	<div id="fb-root"></div><br>
<script type="text/javascript"><br>
	(function() {<br>
	var element = document.createElement('script'); <br>
	element.type = "text/javascript"; <br>
	element.async = true;<br>
	element.id = "facebook-jssdk"<br>
	element.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";<br>
	var s = document.getElementsByTagName('script')[0]; <br>
	s.parentNode.insertBefore(element, s);<br>
	})();<br>
</script><br><br>
<div class="fb-like"></div><br>

</section>


</script>        

        <footer class="footr_area">

            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
                            Empresa &copy;<script>document.write(new Date().getFullYear());</script> Todos Los Derechos Reservados <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://macsoftins.com" target="_blank">M@c-Softins</a>
                        </h5>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>