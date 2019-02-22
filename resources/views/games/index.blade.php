@extends('layouts.app')

@include('partials._flotante')
@section('content')
    <section class="main_slider_area">
    	<br>
    	<br>
    	<br>
    	<br>
        <div class="container">
        	<div class="row">
		        <div class="row">
		            <div class="col-md-4 ">
				        <figure>
							<figcaption>Jugador</figcaption>
							<img id="playerChoice" src="ppt/rock.png" alt="Elección del jugador">	
						</figure>
						
						<figure>
							<figcaption>Computadora</figcaption>
							<img id="computerChoice" src="ppt/rock.png" alt="Elección del computador">	
						</figure>
					</div>
					<div class="col-md-4 ">
						<p>Escoge una opción:</p>
						<button data-choice="piedra">
							<img src="ppt/rock.png" alt="Jugar usando piedra">
						</button>
						<button data-choice="papel">
							<img src="ppt/paper.png" alt="Jugar usando papel">
						</button>
						<button data-choice="tijeras">
							<img src="ppt/scissors.png" alt="Jugar usando tijeras">
						</button>
					</div>
					<div class="col-md-4  ">
						<p id="result">
							Tú empatas escogiendo <strong>piedra</strong>
							en contra de <strong>piedra</strong>.
						</p>
						<p id="score">
							Has ganado <strong>0</strong> veces.
							Has perdido <strong>0</strong> veces.
						</p>
					</div>		
				</div>
			</div>
       	</div>
       	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    </section>
   <script src="js/app1.js"></script>
@endsection
