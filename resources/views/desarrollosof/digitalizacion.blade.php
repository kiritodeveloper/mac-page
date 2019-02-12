@extends('layouts.app')
@include('partials._flotante')
@section('content')
            <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>SISTEMA DE PLANILLAS Y GESTION DOCUMENTAL </h4>
                    <p>El siguiente  sistema tiene la finalidad de realizar la gestion documental de documentos atraves de la web en tiempo real interactuando con cualquier tipo de scaners a traves de componentes creados por la empresa</p>
                </div>
            </div>
        </section>

        <section class="circle_chart_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="30" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>php</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="40" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>javascript</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="5" data-thickness="10" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>base de datos</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="20" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>c#</h4>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="service_solution_area p_100">
            <div class="container">
                <div class="row s_solution_inner">
                    <div class="col-lg-6">
                        <div class="s_solution_item">
                            <div class="l_title">
                                <img src="img/icon/sidig.jpg" width="40%" height="40%" alt="">
                                <h2>SiDig</h2>
                            </div>
                            <p>Este Sistema en produccion usado por nuestros clientes la finalidad del sistema es digitalizar documentos de manera rapida y guardarlas en un servidor de manera que no se pierdan y al momento de revisar sus documentos, ademas que tieneun modulo de correspondencia de manera de poder compartir archivos y documentos de manera segura sin necesidad de 
                            usar gmail u otra empresa de correos electronicos</p>
                            <div id="accordion" role="tablist" class="solution_collaps">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            subsistema administrador 
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>registro de unidades</p>
                                            <p>registro de direcciones</p>
                                            <p>creacion de usuarios</p>
                                            <p>registro de roles y asignacion</p>
                                            <p>resguardo de datos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            subsistema de control documental
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>registro de documentos</p>
                                            <p>importacion de documentos desde una ruta </p>
                                            <p>scaneo de documentos atraves de un componente desarrolado por la empresa</p>
                                            <p>guardado de datos desde cualquier punto con acceso al sistema</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           subsistema de correspondencia
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>envio y redaccion de mesajes</p>
                                            <p>adjuntacion de documentos</p>
                                            <p>bandeja de salida</p>
                                            <p>candeja de entrada</p>
                                            <p>reenvio de mensajes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
