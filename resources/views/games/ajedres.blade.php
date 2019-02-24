<!DOCTYPE html>
<html>
<head>
@include('partials._head')

    <meta charset="UTF-8">
    <title>A.L.I.C.E</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="alice/js/chessboard-0.3.0.min.js"></script>
    <link rel="stylesheet" href="alice/css/chessboard-0.3.0.min.css">
</head>
<body>
    @include('partials._flotante')
    @include('partials._topnav')
    <section class="main_slider_area">
    	<br>
    	<br>
    	<br>
    	<center>
		  <h3>Bienbenido 
             <script language="JavaScript">
                var nombre = prompt("Dime tu nombre");
                document.write( "Mi Nombre es ALICE un gusto jugar contigo " + nombre +"  Espero me enseñes");
                
             </script>
         </h3>

		<div id="chess-board" style="width: 500px"></div>
		</center>
    </section>


@include('partials._footer')


<script src="alice/bundle.js"></script>
</body>
</html>