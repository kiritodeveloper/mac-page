@extends('layouts.app')
@include('partials._flotante')
@section('content')
    <section class="service_solution_area p_100">
 <div class="container">
                <div class="c_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h2>Nuestros Productos</h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <h4>CAMARAS</h4>
                            <p>Las cámaras de seguridad analógicas son la señal de video analógica que se puede conectar directamente…</p>
                            <a class="more_btn" href="today">Ver Productos</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <h4>GRABADORES DVR & SWITCH </h4>
                            <p>Un grabador de vídeo DVR, es un dispositivo interactivo de grabación de televisión y video ademas que contamos con las ultimas tecnologias en switch </p>
                            <a class="more_btn" href="today1">Ver Productos</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">

                            <h4>CONTROL DE ACCESOS BIOMETRICOS</h4>
                            <p>Con tecnología biométrica para el control de asistencias del personal con la posibilidad de operar…s</p>
                            <a class="more_btn" href="bio">Ver Productos</a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">

                            <h4>Esquemas de seguridad y trabajos realizados </h4>
                            <p>En SEGURIDAD M@C-SOFTINS  lo más importante es satisfacer a nuestros clientes por eso nos comprometemos…</p>
                            <a class="more_btn" href="install">Ver Productos</a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">

                            <h4>Enlaces Inalambricos, Cableado Estructurado, redes LAN/WAN</h4>
                            <p>M@C-SOFTINS trabaja con Ubiquiti Networks que está cerrando la brecha digital mediante la creación…</p>
                            <a class="more_btn" href="camaras">Ver Productos</a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <h4>Video Porteros</h4>
                            <p>En M@C-SOFTINS nos ocupamos de la seguridad del cliente atraves de la domotica darle la seguridad 
                            que se necesita para una familia comun</p>
                            <a class="more_btn" href="camaras">Ver Productos</a>
                        </div>
                    </div>
                </div>
            </div>
</section>


            <script type="text/javascript">
                  jQuery(document).ready(function($) {
 
                        $('#myCarousel').carousel({
                                interval: 5000
                        });
                 
                        //Handles the carousel thumbnails
                        $('[id^=carousel-selector-]').click(function () {
                        var id_selector = $(this).attr("id");
                        try {
                            var id = /-(\d+)$/.exec(id_selector)[1];
                            console.log(id_selector, id);
                            jQuery('#myCarousel').carousel(parseInt(id));
                        } catch (e) {
                            console.log('Regex failed!', e);
                        }
                    });
                        // When the carousel slides, auto update the text
                        $('#myCarousel').on('slid.bs.carousel', function (e) {
                                 var id = $('.item.active').data('slide-number');
                                $('#carousel-text').html($('#slide-content-'+id).html());
                        });
                });
            </script>
        
@endsection
