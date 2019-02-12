@extends('layouts.app')
@include('partials._flotante')
@section('content')
            <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>SISTEMA DE CONTROL DE MINERALES </h4>
                    <p>El siguiente  sistema tiene la finalidad de controlar los ingresos y egresos de mineral en la cooperativa minera huayna
                    </p>
                </div>
            </div>
        </section>
        <section class="circle_chart_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="60" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>php</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="35" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>javascript</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="5" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>Postgresql</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="10" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>boostrap</h4>
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
                                <img src="img/icon/LOGO HUAYNA PORCO.png" width="40%" height="40%" alt="">
                                <h2>SiAdmiHuPo</h2>
                            </div>
                            <p>Este Sistema actualmente en produccion brinda apoyo al plantel administrativo en el control del manejo de minerales 
                            brindando informacion interconectada de la balanza al servidor, pudiendo obtener los distintos datos que se registra en blanaza como la emicion de ordenes de salida y el control de sus respectivas liquidaciones manejo de alquileres</p>
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
                                            <p>registro de socios</p>
                                            <p>registro de personas</p>
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
                                            subsistema de control de minerales
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>registro de tipos de carga</p>
                                            <p>registro de secciones</p>
                                            <p>registro de ubicaciones</p>
                                            <p>registro de movilidades y/o transporte</p>
                                            <p>emision de ordenes salidas</p>
                                            <p>control de concentrados</p>
                                            <p>control de cargas de entrada y salida</p>
                                            <p>modulo de control de castigos</p>
                                            <p>modulo de control de pesajes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           subsistema de control de inventarios 
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>control de partidas de inventarios</p>
                                            <p>control de grupos de inventarios</p>
                                            <p>control de items</p>
                                            <p>control de activos</p>
                                        </div>
                                    </div>
                                </div>

                             <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                           subsistema de liquidaciones
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>control de boletas de aporte</p>
                                            <p>control de deudas</p>
                                            <p>registro de cuentas de socios</p>
                                            <p>registro de control de retenciones mineras</p>
                                            <p>registro y control de liquidaciones por empresa</p>
                                            <p>registro y control de aguinaldos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFive">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            creacion de archivos
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                          <p>plantilla de archivos</p>
                                          <p>archivos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingSix">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            subsistema de reportes
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                                        <div class="card-body">
                                          <p>reportes de administracion</p>
                                          <p>reportes de usuarios</p>
                                          <p>reportes decontrol de minerales</p>
                                          <p>reportes de oredenes de salida</p>
                                          <p>reportes de castigos y/o sanciones</p>
                                          <p>modulo de fiscaclizacion</p>
                                          <p>reporte y control de acopios</p>
                                          <p>reportes de inventarios</p>
                                          <p>reportes de papeletas de pago</p>
                                          <p>reporte por empresas</p>
                                          <p>reporte de extracto de cargas</p>
                                          <p>detallede aportes por mes</p>
                                          <p>resumen de entrega de liquiciones</p>
                                          <p>retenciones por mes </p>
                                          <p>otras retenciones</p>
                                          <p>planilla de deudor</p>
                                          <p>amortizacion de deuda</p>
                                          <p>deudas del siguiente mes</p>
                                          <p>reportes de devoluciones</p>
                                          <p>reportes por gestion</p>
                                          <p>reportes por mes</p>
                                          <p>reportes a detalle</p>
                                          <p>reportes de aguinaldos</p>
                                          <p>reportes de alquileres</p>
                                        </div>
                                    </div>
                                </div>
                              <div class="card">
                                    <div class="card-header" role="tab" id="headingSeven">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            subsistema de control de balanza desarollado en c#
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                                        <div class="card-body">
                                          <p>modulo administrativo (con el permiso de administrador)</p>
                                          <p>control de peso + la Conexión a cualquier tipo de balanza camionera</p>
                                          <p>control y validacion de ordenes de salida de cargas en tiempo real </p>
                                          <p>registro de volquetas adquiriendo su peso en tiempo real</p>
                                          <p>reportes de control de cargas</p>
                                          <p>impresion directa y coneccion a impresoras matriciales</p>
                                          <p></p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="card-header" role="tab" id="headingEight">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            subsistema de almacenes y control de servicios
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>venta de material explocivos</p>
                                            <p>control de alquiler de aire</p>
                                            <p>control de alquiler de pala</p>
                                            <p>manejo de horometros</p>
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
