@extends('layouts.app')
@include('partials._flotante')
@section('content')
    
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Contactanos</h2>
                    
                </div>
            </div>
        </section>
        <center>

         <h5>Bienbenido 
             <script language="JavaScript">
                var nombre = prompt("Dime tu nombre");
                document.write( "a nuestro sector de noticias  " + nombre +"  en que te podemos ayudar ");
                
             </script>
         </h5>
        </center>

        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d1879.5046412411!2d-65.7605023!3d-19.584103!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-19.5840803!2d-65.7597244!4m3!3m2!1d-19.584146!2d-65.75968689999999!5e0!3m2!1ses-419!2sbo!4v1544587442725" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">

                            </div>
                            <div class="bd-callout">
                            <h3>llamanos o envianos un mensaje </h3>
                            <p>America 485 <br /> Potosi - Bolivia</p>
                            <h4><i class="fa fa-volume-control-phone" aria-hidden="true"></i><a target="_blank" href="https://api.whatsapp.com/send?phone=59167916774">+591 67916774</a> <i class="fa fa-envelope" aria-hidden="true"> <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=admin@macsoftins.com&su=datos&body=en:&bcc=">admin@macsoftins.com</a></i>
 
                               </h4>
                        </div>
                            <p>para mayores informes </p>
                            <i class="fa fa-comments" aria-hidden="true"></i> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
